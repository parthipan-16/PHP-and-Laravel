<?php

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/sendmail', [NotificationController::class, 
'sendSimpleNotification'])->name('send.simple.notification');


