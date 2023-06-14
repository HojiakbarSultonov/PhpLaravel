<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Userlar royxati';
    }
    public function show( $user){

//        return 'Tanlangan user bu: ' . $user;
    }
//    public function show(Request $request, $user){
//        dd($request->ip());
//        return view('users.show', ['name' =>'Hojiakbar', 'id'=>$user]);
////        return 'Tanlangan user bu: ' . $user;
//    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        dd($request);

    }
    public function edit($user_id){
        return   $user_id . 'ni o\'zgartiring';
    }
}
