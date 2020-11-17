<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class OrderController extends Controller
{
    public function create(Request $data)
    {
        $create = order::create([
            'name' => $data['name'],
            'email' =>  $data['email'],
            'phone' =>  $data['phone'],
            'city' =>  $data['city'],
            'zip' =>  $data['zip'],
            'address' =>  $data['address'],
            'laptop' =>  $data['laptopname'],
            'dayprice' =>  $data['dayprice'],
            'duration' =>  $data['duration'],
            'totprice' =>  $data['totprice'],
            'pickupdate' =>  $data['pickupdate'],
            'status' =>  "Pending",
        ]);
        return back()->with('success','Order success, Admin will confirm your order and will send a notification email as soon as possible.');
        
    }

    public function edit_order($id)
    {
        $order = DB::table('orders')->where('id',$id)->get();
	    return view('admin/edit/order',['orders' => $order]);
    }

    public function update_order($id,Request $request)
    {
	// update data pegawai
	    DB::table('orders')->where('id',$request->id)->update([
            'name' => $request['name'],
            'email' =>  $request['email'],
            'phone' =>  $request['phone'],
            'city' =>  $request['city'],
            'zip' =>  $request['zip'],
            'address' =>  $request['address'],
            'laptop' =>  $request['laptop'],
            'dayprice' =>  $request['dayprice'],
            'duration' =>  $request['duration'],
            'totprice' =>  $request['totprice'],
            'pickupdate' =>  $request['pickupdate'],
            'status' =>  $request['status']
	    ]);
	// alihkan halaman ke halaman pegawai
        return redirect('/admin/dashboard')->with('success','Order successfully edited.');
    }

    public function delete_order($id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return back()->with('success','Order successfully deleted.');
    }
}
