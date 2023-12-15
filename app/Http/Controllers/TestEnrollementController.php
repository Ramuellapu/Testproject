<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\TestEnrolle;
use Illuminate\Support\Facades\Notification;

class TestEnrollementController extends Controller
{
    public function sendNotification(){
        $user = User::all();
        $enrollementData = [
            'body'=>'hii',
            'text'=>'hello',
            'url' =>url('/'),
            'tankyou'=>'tankyou'

        ];
        // $user->send(new TestEnrolle($enrollementData));
        Notification::send($user,new TestEnrolle($enrollementData));
    }
}
