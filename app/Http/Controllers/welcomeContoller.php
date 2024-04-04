<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class welcomeContoller extends Controller
{
    public function index(){
        $posts = post::all();
        return view("welcome",compact("posts"));
    }
}
