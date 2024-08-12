<?php

namespace App\Http\Controllers;

use App\Notifications\NewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function sendSimpleNotification(Request $request)
    {
        $recipientEmail = 'abcd@gmail.com';

        // Send notification
        Notification::route('mail', $recipientEmail)
                    ->notify(new NewNotification());

        return response()->json(['message' => 'Simple notification sent.']);
    }
}
