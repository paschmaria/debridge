<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function destroy(Notification $notification)
    {
        $notification->delete();
        $notifications_count = count(auth()->user()->socialNotification);
        return response()->json($notifications_count);
        // return back();
    }
}
