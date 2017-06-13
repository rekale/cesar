<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Category $category)
    {
        $categories = $category->all();

        return view('front.home', compact('categories'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function tours()
    {
        return view('front.tours');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
