<?php

namespace App\Http\Controllers\Membershipcontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\membership;
use App\Models\pagetest;




class Membershipcontroller extends Controller
{
    
    public function AddMembershipPost(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'paid_payment' => 'required',
            'cancel_payment' => 'required',
            'payment_option' => 'required',
            'refund_payment' => 'required',
            'order_id' => 'required',
            'Transaction_id' => 'required',
            'fee' => 'required',
            'status' => 'required',
        ]);



        $post = new membership();
        $post->user_id= $request->user_id;
        $post->paid_payment= $request->paid_payment;
        $post->cancel_payment= $request->cancel_payment;
        $post->payment_option= $request->payment_option;
        $post->refund_payment = $request->refund_payment;
        $post->order_id= $request->order_id;
        $post->Transaction_id= $request->Transaction_id;
        $post->fee= $request->fee;
        $post-> status = $request->status;
        $post->save();
        return redirect()->to('admin/view-membership')->with('success', 'membership save successfully');

    }

    public function UpdateMembership(Request $request)
    {
        $request->validate([
            'user_id'=> 'required',
            'paid_payment' => 'required',
            'cancel_payment' => 'required',
             'payment_option' => 'required',
            'refund_payment' => 'required',
            'order_id' => 'required',
            'Transaction_id' => 'required',
            'fee' => 'required',
            'status' => 'required',
        ]);
        
        $id = $request->id;
        membership::where('id',$id)->update([
         'user_id'=> $request->user_id,
        'paid_payment'=> $request->paid_payment	,
        'cancel_payment'=> $request->cancel_payment,
        'payment_option'=>$request->payment_option,
        'refund_payment'=> $request->refund_payment,
        'order_id'=>$request->order_id,
        'Transaction_id'=>$request->Transaction_id,
        'fee'=>$request->fee,
        'status'=>$request->status,
        ]);

        return redirect()->to('admin/view-membership')->with('success', 'Membership update successfully'); 

    }

    public function DeleteMembership($id){
        $delete = membership::where('id',$id)->delete();
        return redirect()->to('admin/view-membership')->with('success', 'Delete membership successfully');

    }







}