<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\User;


class PageController extends Controller
{
    public  function index () {

        return view('index')->with('user1',Campaign::all());
    }
    public function about () {
        return view('about');
    }
    public function contact () {
        return view('contact');
    }
}
