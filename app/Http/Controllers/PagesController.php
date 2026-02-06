<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
       #passing values to view
       $title = 'Welcome to Nieldev Services'; 
       return view('pages.index', compact('title'));
       #other metods to pass values to view
       #return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }

    public function services(){
        #passing multiple values to view
        $data = [
            'title' => 'Our Services',
            'services' => ['Web Design', 'Programming using laravel', 'PC Maintenance']
        ];
        return view('pages.services', $data);
    }
}
    