<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{

    public function index()
    {
        $main = DB::table('main')->simplePaginate(3);
        $discounts = DB::table('discounts')->simplePaginate(4);

        return view('parts_of_the_website.welcome.welcome', compact('discounts'), compact('main'));
    }

}
