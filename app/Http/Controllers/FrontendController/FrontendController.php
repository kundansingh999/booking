<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\blog;
use App\Models\membership;
use App\Models\gallery_master;
use App\Models\offer;
use App\Models\pagetest;







class FrontendController extends Controller
{
    public function home()
    {
      $data = event::where('status',1)->orderBy('updated_at','desc')->get();
      $blog = blog::where('status',1)->orderBy('updated_at','desc')-> limit(3)->get();
      $membership = membership::where('status',1)->orderBy('updated_at','desc')-> limit(3)->get();

      


        return view('frontend.home' ,['data'=>$data,'blog'=>$blog,'membership'=>$membership]);
    }

    public function about()
    {
       return view('frontend.about');
    }


    public function gallery()
    {
       return view('frontend.gallery');
    }

    public function membership()
    {
       return view('frontend.membership');
    }

    public function contact()
    {
       return view('frontend.contact');
    }

    public function offer()
    {
       return view('frontend.offer');
    }
     

    public function login()
    {
       return view('frontend.user-auth.login');
    }

    public function signup()
    {
       return view('frontend.user-auth.signup');
    }

    public function events_details($id)
    {
      $data =event::where('id',$id)->first();
       return view('frontend.events_details',['data'=>$data]);

    }

    public function ticket_pdf()
    {
      $data =ticket_pdf::where('status',1)->first();
      return view('frontend.ticket_pdf');
    }



    public function testform()
    {
       return view('frontend.pagetest');
    }





}