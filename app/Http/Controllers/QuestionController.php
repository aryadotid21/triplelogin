<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;

class QuestionController extends Controller
{
    public function create(Request $data)
    {
        $create = question::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject' => $data['subject']
        ]);
        return back()->with('success','Product successfully added.');
        
    }
    
    public function delete_question($id)
    {
        DB::table('questions')->where('id', $id)->delete();
        return back()->with('success','Question successfully deleted.');
    }
}
