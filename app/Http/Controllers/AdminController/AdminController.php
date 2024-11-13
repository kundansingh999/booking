<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Session;
use App\Models\event;
use App\Models\blog;
use App\Models\membership;
use App\Models\offer;
use App\Models\gallery_master;
use App\Models\booking;






class AdminController extends Controller
{
    public function dashboard()
    {
      return view('Admin.dashboard');
    }

    public function postevent()
    { 
      return view('Admin.Event.post-event');
    }

    public function PostGallery()
    {
      return view('Admin.Gallery.post-gallery');
    }
    public function postmembership()
    {
      return view('Admin.Membership.post-membership');
    }

    public function postoffer()
    {
    return view('Admin.Offer.post-offer');
   }

   public function postblog()
   {
     return view('Admin.Blog.post-blog');
   }

   public function postbooking()
   {
    return view ('Admin.Booking.post-booking');
   }

   public function postcontactreply()
   {
    return view ('Admin.Contact Reply.post-contactreply');
   }

   public function postcontactus()
   {
    return view ('Admin.Contact Us.post-contactus');
   }

   public function postpdfticket()
   {
    return view('Admin.Pdf Ticket.post-pdfticket');
   }

   public function ViewEvent()
   {
    $data = event::where('status',1)->orderBy('updated_at','desc')->get();
    return view('Admin.Event.view-event',['data'=>$data]);
   }

   public function ViewBlog()
   {
   $data = blog::where('status',1)->orderBy('updated_at','desc')->get();
   return view('Admin.Blog.view-blog',['data'=>$data]);
  }
  
 
   public function ViewBooking()
   {
    return view('Admin.Booking.view-booking');
   }

   public function ViewGallery()
   {
    $data = gallery_master::where('status',1)->orderBy('updated_at','desc')->get();
    return view('Admin.Gallery.view-gallery',['data'=>$data]);
   }

   public function ViewMembership()
   {

    $data = membership::where('status',1)->orderBy('updated_at','desc')->get();
    return view('Admin.Membership.view-membership',['data'=>$data]);
   }

   public function ViewOffer()
   {
    $data = offer::where('status',1)->orderBy('updated_at','desc')->get();
    return view('Admin.Offer.view-offer' ,['data'=>$data]);

   }

   public function ViewContactus()
   {
    return view('Admin.Contact Us.view-contactus');
   }

   public function Viewcontactreply()
   {
    return view('Admin.Contact Reply.view-contactreply');
   }

   public function ViewPdfticket()
   {
    return view('Admin.Pdf Ticket.view-pdfticket');
   }

   public function postuser ()
   {
    return view('Admin.User.post-user');
   }

   public function AdminLogin()
    {
    return view('Admin.Admin-auth.login');
   }

   public function loginadmin(Request $request)
   {
    $email = $request->email;
    $password = $request->password;
    $result = admin::where('email', $email)->where('status', 1)->first();
    // dd($result);
    if ($result && !empty($result->password)) {
      // dd('helo');
        $hashedPassword = $result->password;
        if ( $hashedPassword == $password) {
          // dd('hey');
            $request->session()->put('Ljghtoq45!@856Sl56as^%$aslf5DSDFl', 'login');
            Session::put("admin", $result);
            Session::put("id", $result->id);
            Session::put("name", $result->name);
            Session::put("email", $result->email);
                            Session::put("admin", $result->admin);
            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->to('admin-login')->with('success', 'Invalid email or password');
        }
    } else {
        return redirect()->to('admin-login')->with('success', 'User not found');
    }

   }


   public function Adminlogout()
   {
    session()->flush();
      return redirect()->to('/');

   }
     
   public function EventEdit($id)
   { 
    $data = event::where('id',$id)->first();

     if(!$data)
     {
      return redirect()->to('admin/view-event'); 
     }
    return view('Admin.Event.edit_event',['data'=>$data]);
   }


   public function BlogEdit($id)
   { 
    $data = blog::where('id',$id)->first();

     if(!$data)
     {
      return redirect()->to('admin/view-blog'); 
     }
    return view('Admin.Blog.edit_blog',['data'=>$data]);
   }

   public function MembershipEdit($id)
   { 
    $data = membership::where('id',$id)->first();

     if(!$data)
     {
      return redirect()->to('admin/view-membership'); 
     }
    return view('Admin.Membership.edit_membership',['data'=>$data]);
   }

   public function OfferEdit($id)
   { 
    $data = offer::where('id',$id)->first();

     if(!$data)
     {
      return redirect()->to('admin/view-offer'); 
     }
    return view('Admin.Offer.edit_offer',['data'=>$data]);
   }

public function GalleryEdit($id)
{
  $data =gallery_master::where('id',$id)->first();

  if(!$data)
  {
    return redirect()->to('admin/view-gallery');
  }
  return view('Admin.Gallery.edit_gallery',['data'=>$data]);


}

public function EventApplication()
{
  $data = booking::where('bookings.status',1)->orderBy('bookings.updated_at','desc')->
        leftjoin('users', 'bookings.user_id', '=', 'users.id')->
        leftjoin('events', 'bookings.event_id', '=', 'events.id')->
        select('users.*', 'events.*', 'bookings.*')->get();
        // dd($data);
  return view('Admin.event-application.index' ,['data'=>$data]);
}

    
}