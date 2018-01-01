<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
public function frontIndex(){
    return view('admin.login.login');
}
//    public function register(){
//        return view('admin.login.register');
//    }
public function aboutContent(){
    return view ('front.menu.about-content');
}
public function portfolioContent(){
    return view('front.menu.portfolio-content');
}
public function blogContent(){
    return view('front.menu.blog-content');
}
    public function iconContent(){
        return view('front.menu.icon-content');
    }
    public function Typography(){
        return view('front.menu.typography');
    }
    public function ContactUS(){
        return view('front.menu.contact');
    }
}
