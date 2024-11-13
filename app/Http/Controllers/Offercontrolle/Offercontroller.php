<?php

namespace App\Http\Controllers\Offercontrolle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\offer;



class Offercontroller extends Controller
{
    public function AddOfferPost(Request $request)
     
    {
        // dd($request->all());
        $request->validate([
            'coupon_code' => 'required',
            'amount' => 'required',
            'admin_id' => 'required',
             'coupon_expire' => 'required',
            'status' => 'required',
        ]);
         $post = new offer();
        $post->coupon_code =$request->coupon_code;
        $post->amount= $request->amount;
        $post->coupon_expire= $request->coupon_expire;
        $post->admin_id= $request->admin_id;
         $post->status= $request->status;
        $post->save();
        return redirect()->to('admin/view-offer')->with('success', 'Offer save successfully');
     }

    public function UpdateOffer(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required',
            'amount' => 'required',
            'coupon_expire' => 'required',
             'admin_id' => 'required',
            'status' => 'required',
        ]);

        $id = $request->id;
        offer::where('id',$id)->update([
        'coupon_code'=>$request->coupon_code,
        'amount'=> $request->amount,
        'coupon_expire'=> $request->coupon_expire,
        'admin_id'=>$request->admin_id,
         'status'=>$request->status,
        ]);

        return redirect()->to('admin/view-offer')->with('success', 'Offer update successfully'); 

    }

    public function DeleteOffer($id){
        $delete = offer::where('id',$id)->delete();
        return redirect()->to('admin/view-offer')->with('success', 'Delete offer successfully');


    }



}
