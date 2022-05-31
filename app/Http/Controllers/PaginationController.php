<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{

    function index()
    {
     $discounts = DB::table('discounts')->simplePaginate(4);
     return view('welcome', compact('discounts'));
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $discounts = DB::table('discounts')->simplePaginate(4);
      return view('pagination_discounts', compact('discounts'))->render();
     }
    }
}
