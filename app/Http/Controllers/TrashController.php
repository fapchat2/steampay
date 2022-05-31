<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashController extends Controller
{
       function index()
    {
     return view('trash');
    }
}
