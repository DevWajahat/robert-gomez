<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->assignments);

        $assignments = auth()->user()->assignments;

        return view('screens.web.index',get_defined_vars());
    }
}
