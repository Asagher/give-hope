<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Employee;



class PageController extends Controller
{
    public  function index () {

        return view('index')->with('user1',Campaign::all())->with('emp',Employee::all());
    }
    public function about () {
        return view('about');
    }
    public function contact () {
        return view('contact');
    }
    public function user () {
        return view('users.index');
    }
}
