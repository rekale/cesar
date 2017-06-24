<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Category $category, Destination $destination)
    {
        $categories = $category->get();
        $destinations = $destination->latest()->take(4)->get();

        return view('front.home', compact('categories', 'destinations'));
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
