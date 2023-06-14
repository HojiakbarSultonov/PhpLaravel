<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Userlar royxati';
    }
    public function show($user){
        return view('users.show', ['name' =>'Hojiakbar', 'id'=>$user]);
//        return 'Tanlangan user bu: ' . $user;
    }
    public function create(){
        return view('users.create');
    }
    public function edit($user_id){
        return   $user_id . 'ni o\'zgartiring';
    }
}
