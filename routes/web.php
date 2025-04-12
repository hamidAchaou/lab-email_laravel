<?php

use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/send-email', function () {
    Mail::to('hamidachaou379@gmail.com')->send(new HelloMail());
    return 'Email sent successfully!';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    return view('tasks.tasks');
});
