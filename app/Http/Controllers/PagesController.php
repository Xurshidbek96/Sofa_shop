<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('pages.about');
    }

    public function design(){
        return view('pages.design');
    }

    public function shop(){
        return view('pages.shop');
    }

    public function contact(){
        return view('pages.contact');
    }
}
