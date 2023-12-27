<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriController extends Controller
{
    function index(){
        return view('news');
    }
}