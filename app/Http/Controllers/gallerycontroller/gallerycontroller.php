<?php

namespace App\Http\Controllers\gallerycontroller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\UploadImage;
use App\Models\gallery_master;
use Illuminate\Support\Facades\Session;
use App\Models\newsletter;
use App\Models\pagetest;




class gallerycontroller extends Controller
{
    use UploadImage;
    public function AddGalleryPost(Request $request)
    {
        $request->validate([
            'photo' => 'required',
            'photo_description' => 'required',
            'photo_title' => 'required',
            'status' => 'required',
        ]);

        $checkdate = gallery_master::where('photo',$request->photo)->first();
        if($checkdate)
        {
            return redirect()->to('admin/view-gallery')->with('success', 'gallery'); 
        }else{
            $imgProduct = null;
            if ($request->hasFile("photo")) {
                $imgProductFile = $request->file("photo");
                $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
                $imgProduct = $this->UploadImage('assets/photo/', '', $imgProductFile, $new_name_of_profile_photo3);
            }  

        $post = new gallery_master();
        $post->photo= $request->photo;
        $post->photo_description= $request->photo_description;
        $post->photo_title= $request->photo_title;
        $post->status= $request->status;
        $post->save();
        return redirect()->to('admin/view-gallery')->with('success', 'gallery save successfully');
    }
     
}   

    public function UpdateGallery(Request $request)
    {
        $request->validate([
            'photo'=>'required',
            'photo_description'=>'required',
            'photo_title' => 'required',
            'status' => 'required',
        ]);

        $id = $request->id;
        $imgProduct = null;
        if ($request->hasFile("photo")) {
            $imgProductFile = $request->file("photo");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/photo/', '', $imgProductFile, $new_name_of_profile_photo3);
            gallery_master::where('id',$id)->update([
                'photo' => $imgProduct,
            ]);
        }
       gallery_master::where('id',$id)->update([
        'photo'=>$request->photo,
         'photo_description'=> $request->photo_description,
        'photo_title'=> $request->photo_title,
        'status'=> $request->status,
       ]);
       return redirect()->to('admin/view-gallery')->with('success', 'gallery update successfully'); 
    }

    public function DeleteGallery($id){
        $delete = gallery_master::where('id',$id)->delete();
        return redirect()->to('admin/view-gallery')->with('success', 'Delete gallery successfully'); 

    }

    public function AddNewsletter(Request $request)
    {
        $post = new newsletter();
        $post->email= $request->email;
        $post->save();
    }

    public function Addtestpage(Request $request)
    {
        $post = new pagetest();
        $post->email= $request->email;
        $post->save();

        return ["return" => "Thanks for submitting"];


    }




}