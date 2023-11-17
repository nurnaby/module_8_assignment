<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request){
        $id = $request->id;
        $name ="Donal Trump";
        $age ="75";
        $data=[
            "id"=> $id,
            "name"=> $name,
            "age"=> $age,
        ];

    }
}