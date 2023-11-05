<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Gym;
use App\Models\Message;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\GymRequest;
use App\Http\Request\UserSearchRequest;

class UserController extends Controller
{
    public function index(){
        $UserName = $user->name;
        $UserAge = $user->age;
        $UserGender = $user->gender;
        $UserProtein = $user->protein;
        $UserMustle = $user->preMustle;
        $UserPR = $user->PR_TEXT;
        $UserGym = $user->Chat_Gym;


        $lines = array();
        if($UserGym != null){
            $lines = Message::where('belongGym',$UserGym)->get();
        }

        if($UserAge == null){
            $UserAge = '未設定';
        }
        if($UserGender == null){
            $UserGender = '未設定';
        }
        if($UserProtein == null){
            $UserProtein = '未設定';
        }
        if($UserMustle == null){
            $UserMustle = '未設定';
        }
        if($UserPR == null){
            $UserPR = '未設定';
        }
        if($UserGym == null){
            $UserGym = '未設定';
        }
        $param=['UserName'=>$UserName,
                'UserAge'=>$UserAge,
                'UserGender'=>$UserGender,
                'UserProtein'=>$UserProtein,
                'UserMustle'=>$UserMustle,
                'UserPR'=>$UserPR,
                'UserGym'=>$UserGym,
                'lines'=>$lines
                ];
        return view('display.basic',$param);
    }

    public function ProfileEdit(ProfileRequest $request){
        $user = Auth::user();
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->protein = $request->protein;
        $user->preMustle = $request->preMustle;
        $user->PR_TEXT = $request->PR_TEXT;
        $user->save();

        $parameter=[
            'name'=>$user->name,
            'age'=>$user->age,
            'gender'=>$user->gender,
            'protein'=>$user->protein,
            'mustle'=>$user->preMustle,
            'PR'=>$user->PR_TEXT
        ];

        DB::update('update fakes set age=:age, gender=:gender, protein=:protein, mustle=:mustle, PR=:PR where name=:name',$parameter);
        return redirect('base');
    }

    public function Search(GymRequest $request){
        $data_prefecture = $request->prefecture;
        $data_city = $request->city;
        $items = Gym::where('prefecture', $data_prefecture)->where('city', $data_city)->get();
        return view('display.search',['items'=>$items]);
    }

    public function Profile(UserSearchRequest $request){
        $data_search_user = $request->UserPro;
        $item=User::where('name', $data_search_user)->first();

        return view('display.profile',['item'=>$item]);
    }
}