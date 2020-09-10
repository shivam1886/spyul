<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['categories'] = $this->categories();
        return view('home',compact('data'));
    }

    public function profile(){
        $data = array();
        $data['categories'] = $this->categories();
        return view('profile',compact('data'));
    }

    public function forYou(Request $request){
        $data = array();
        $data['categories'] = $this->categories();
        return view('forYou',compact('data'));
    }

    public function trending(Request $request){
        $data = array();
        $data['categories'] = $this->categories();
        return view('trending',compact('data'));
    }

    public function aboutUs(Request $request){
        $data = array();
        $data['categories'] = $this->categories();
        return view('aboutUs',compact('data'));
    }

    public function addPost(Request $request){
        $data = array();
        $data['categories'] = $this->categories();
        return view('addPost',compact('data'));
    }

    public function categories(){
        return Category::orderBy('title','ASC')->get();
    }
}
