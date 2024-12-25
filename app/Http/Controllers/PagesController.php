<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('page');
    }
    public function about() {
        return view('about');
    }
}
