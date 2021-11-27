<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel 8!";
        
        // return view('index', compact('title'));
        return view('index')->with('title', $title);
    }
    public function about(){
        $title = "About Page!";
        return view('/about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'SEO']
        );
        return view('/services')->with($data);
    }
}
