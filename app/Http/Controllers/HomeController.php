<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\question;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function delete_user($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back()->with('success','User successfully deleted.');
    }




    
    
    public function edit_user($id)
    {
        $user = DB::table('users')->where('id',$id)->get();
	    return view('admin/edit/user',['users' => $user]);
    }

    public function update_user($id,Request $request)
    {
	// update data pegawai
	    DB::table('users')->where('id',$request->id)->update([
		    'name' => $request->name,
		    'email' => $request->email,
		    'phone' => $request->phone,
		    'usertype' => $request->usertype
	    ]);
	// alihkan halaman ke halaman pegawai
        return redirect('/admin/user')->with('success','User successfully edited.');
    }
}
