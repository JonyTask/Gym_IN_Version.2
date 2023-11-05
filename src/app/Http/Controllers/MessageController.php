<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Gym;
use App\Models\Message;

class MessageController extends Controller
{
    public function SendMessage(Request $request){
        if($user->Chat_Gym != null && $request->message != null){
            $message = new message();
            $message->name = $user->name;
            $message->message = $request->message;
            $message->belongGym = $user->Chat_Gym;
            $message->save();

            return redirect('/base');
        }
    }

    public function SetGym(Request $request){
        $user = Auth::user();
        $setGym = $request->Chat_Gym;

        $$user->Chat_Gym = $setGym;
        $user->save();

        return redirect('/base');
    }
}
