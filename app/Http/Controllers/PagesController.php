<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Learning laravel should be fun ';
       // return view('pages.index',compact('title'));
       //similar to context in django where it takes a variable name
        //ivy = "good girl"
        //context ={'ivy':ivy}
        //return render(request,'pages/index',context)

        return view('pages.index') ->with('title',$title);

    }
    
    public function about(){
        $title ="This is my about page";
        return view('pages.about') ->with('title',$title);
    }
    
    public function services(){
        
        $data = array(
            'title' => 'Services we offer :',
            'services' =>['web design','logo creation','front-end development courses'],

        );

        return view('pages.services') ->with($data);
    }
}
