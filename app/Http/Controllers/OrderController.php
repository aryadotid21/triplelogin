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
}
