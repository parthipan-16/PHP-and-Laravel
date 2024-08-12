<?php

use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $email = new HelloMail();
    Mail::to('parthipan162k@gmail.com')->send($email);

    return "Email sent successfully.";
});
