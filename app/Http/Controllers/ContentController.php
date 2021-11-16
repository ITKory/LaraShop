<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    //php artisan make:model Link -m
    public function home(){
        return view('welcome');
    }
}
