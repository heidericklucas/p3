<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomePageController extends Controller
{


    public function index()
    {
        return view ('index');
    }

} # end of class
