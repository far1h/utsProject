<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $clothes = Clothes::all();
        return view("home", ["clothes"=> $clothes]);
    }
}
