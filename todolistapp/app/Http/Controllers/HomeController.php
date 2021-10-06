<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function helper()
    {
        return view('home');
    }
    public function check(Request $request)
    {/*
     $review=new tasks();
     $review->task_id=3;
     $review->tas_id=1;
     $review->task_text=$request->input('subject');
     $review->save();*/
    }
}
