<?php

namespace App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Session;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\event;
use App\Models\gallery_master;
use App\Models\membership;
use App\Traits\UploadImage;
use Illuminate\Support\Facades\Mail;
use App\Mail\usermailticket;
use App\Models\booking;
use App\Models\User;
use App\Models\ticket_pdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Dompdf\Dompdf;





class EventController extends Controller
{
    use UploadImage;
    public function AddEventsPost(Request $request)
    {
        $request->validate([
            'events_name' => 'required',
            'events_description'=>'required',
            'events_title' => 'required',
            'events_date' => 'required',
            'amount' => 'required',
            'start_booking_date' => 'required',
            'end_booking_date' => 'required',
            'events_time' => 'required',
            'status' => 'required',
        ]);
        $checkdate = event::where('events_date',$request->events_date)->first();
        if($checkdate)
        {
            return redirect()->to('admin/view-event')->with('success', 'event date and time same'); 
        }else{
        $imgProduct = null;
        if ($request->hasFile("events_photo")) {
            $imgProductFile = $request->file("events_photo");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/events_photo/', '', $imgProductFile, $new_name_of_profile_photo3);
           
        }

        $post = new event();
        $post->events_name= $request->events_name;
        $post->events_description= $request->events_description;
        $post->events_title= $request->events_title;
        $post->events_date= $request->events_date;
        $post->amount= $request->amount;
        $post->start_booking_date= $request->start_booking_date;
        $post->end_booking_date= $request->end_booking_date;
        $post->events_time= $request->events_time;
        $post ->events_photo= $imgProduct;
        $post->status= $request->status;
        $post->save();
        return redirect()->to('admin/view-event')->with('success', 'event save successfully');
    }
}

    public function UpdateEvent(Request $request)
    {
        $request->validate([
            'events_name' => 'required',
            'events_description'=>'required',
            'events_title' => 'required',
            'events_date' => 'required',
            'amount' => 'required',
            'start_booking_date' => 'required',
            'end_booking_date' => 'required',
            'events_time' => 'required',
            'status' => 'required',
        ]);
        $id = $request->id;
        $imgProduct = null;
        if ($request->hasFile("events_photo")) {
            $imgProductFile = $request->file("events_photo");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/events_photo/', '', $imgProductFile, $new_name_of_profile_photo3);
            event::where('id',$id)->update([
                'events_photo' => $imgProduct,
            ]);
        }
       event::where('id',$id)->update([
        'events_name'=>$request->events_name,
         'events_description'=> $request->events_description,
        'events_title'=> $request->events_title,
        'events_date'=> $request->events_date,
        'amount'=> $request->amount,
        'start_booking_date'=> $request->start_booking_date,
        'end_booking_date'=> $request->end_booking_date,
        'events_time'=> $request->events_time,
        'status'=> $request->status,
       ]);
       return redirect()->to('admin/view-event')->with('success', 'event update successfully'); 
    }

    public function DeleteEvent($id){
        $delete = event::where('id',$id)->delete();
        return redirect()->to('admin/view-event')->with('success', 'delete event successfully'); 

    }

    public function bookticket($id)
    {
        $check = booking::where('event_id',$id)->where('user_id',Auth::user()->id)->first();
        if($check)
        {
            return redirect()->to('/')->with('success', 'Ticket already booked'); 

        }
        $booking = new booking();
        $booking ->event_id=$id;
        $booking ->user_id=Auth::user()->id;
        $booking ->status=1;
        $booking ->save();

        $event_pdf = event::where('id',$id)->first();
        $user = User::where('id',Auth::user()->id)->first();

         $pdf= App::make('dompdf.wrapper');


        $pdfticket = new ticket_pdf();
        $pdfticket ->events_name = $event_pdf ->events_name;
        $pdfticket->events_time = $event_pdf ->events_time;
        $pdfticket -> events_date = $event_pdf->events_date;
        $pdfticket -> events_amount = $event_pdf->amount;
        $pdfticket -> name = $user->name;
        $pdfticket -> email= $user->email;
        $pdfticket ->save();

        $id = $pdfticket->id;
       

        $data = ticket_pdf::where('id',$id)->first();
        //$pdf = Pdf::loadView('Frontend.ticket_pdf', $data->toArray()); 

        $pdf->loadView('Frontend.ticket_pdf', [
            'data' => $data
        ]);
        // Set the filename for the PDF
        $filename = 'ticket_' . $id . '.pdf';
        
        return $pdf->stream($filename);










        // $event = event::where('id',$id)->first();
        // $data=[
        //     "name"=>Auth::user()->name,
        //     "events_name"=>$event->events_name,
        //     "amount"=>$event->Amount,
        //     "event_date"=>$event->events_date,
        //     "time"=>$event->events_date,
        // ];
        // Mail::to(Auth::user()->email)->send(new usermailticket($data));

        return redirect()->to('/')->with('success','Ticket Booking successful');
    }


}