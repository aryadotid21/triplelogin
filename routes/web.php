<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\question;
use App\Models\User;
use App\Models\laptop;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',['laptop' => laptop::orderBy('created_at', 'desc')->get()]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['middleware'  => ['auth','admin']], function(){

    Route::get('admin/dashboard', function(){
    return view('admin/order',['order' => order::orderBy('created_at', 'desc')->get()]);
    });

    Route::get('admin/user', function(){
    return view('admin/user',['user' => user::orderBy('created_at', 'desc')->get()]);
    });

    Route::get('admin/laptop', function(){
        return view('admin/laptop',['user' => laptop::orderBy('id', 'asc')->get()]);
        });

    Route::get('admin/question', function(){
        return view('admin/question',['user' => question::orderBy('created_at', 'desc')->get()]);
        });

    Route::get('/admin', function(){
        return redirect('admin/dashboard');
    });

    Route::get('admin/order/delete/{id}',[App\Http\Controllers\OrderController::class, 'delete_order']);
    Route::get('admin/order/edit/{id}',[App\Http\Controllers\OrderController::class, 'edit_order']);
    Route::get('admin/order/edit/{id}/update',[App\Http\Controllers\OrderController::class, 'update_order']);


    Route::get('admin/user/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete_user']);
    Route::get('admin/user/edit/{id}',[App\Http\Controllers\HomeController::class, 'edit_user']);
    Route::get('admin/user/edit/{id}/update',[App\Http\Controllers\HomeController::class, 'update_user']);


    Route::get('admin/question/delete/{id}',[App\Http\Controllers\QuestionController::class, 'delete_question']);


});

Route::group(['middleware'  => ['auth','technician']], function(){

    Route::get('technician/dashboard', function(){
    return view('/technician/dashboard');
    });
});



Route::get('/test', function(){
    return order::all();
});

Route::post('/order', [App\Http\Controllers\OrderController::class,'create']);
Route::post('/question', [App\Http\Controllers\QuestionController::class,'create']);
