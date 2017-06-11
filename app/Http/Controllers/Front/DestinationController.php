<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {

    }

    public function show($slug)
    {
        return view('front.show');
    }

    public function listByCategory($category)
    {
        return view('front.category-list');
    }
}
