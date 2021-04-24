<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        $Users = [new MyUser("wispeckiy", "qwerty123", "admin"),
            new MyUser("Braurbeki", "123456", "banned"),
            new MyUser("gsvk", "j3jfhsuPL739S", "hacker"),
            new MyUser("linbaba", "zxc", "geniy")];
        return view('main', ['Users' => $Users]);
    }

    public function searchUser($name){
        $Users = [new MyUser("wispeckiy", "qwerty123", "admin"),
            new MyUser("Braurbeki", "123456", "banned"),
            new MyUser("gsvk", "j3jfhsuPL739S", "hacker"),
            new MyUser("linbaba", "zxc", "geniy")];
        foreach ($Users as $user)
            if ($name == $user->name) return view('UserPage', ['user' => $user]);
        return view('UserPage', ['user' => new MyUser('unknown', 'unknown', 'unknown')]);
    }

    public function SearchPage(){
        return view('SearchUser');
    }

    public function find(Request $request)
    {
        $Users = [new MyUser("wispeckiy", "qwerty123", "admin"),
            new MyUser("Braurbeki", "123456", "banned"),
            new MyUser("gsvk", "j3jfhsuPL739S", "hacker"),
            new MyUser("linbaba", "zxc", "geniy")];
        $name = $request->get('name');
        foreach ($Users as $user)
            if($name == $user->name)
                return redirect("/$name/UserPage");
            
        return redirect('/');
    }
}