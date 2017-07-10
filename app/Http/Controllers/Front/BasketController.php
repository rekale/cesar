<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index(Request $request)
    {
        $destinations = json_decode($request->cookie('basket')) ?? [];

        return view('front.basket.index', compact('destinations'));
    }

    public function add($id)
    {
        $destination = Destination::findOrFail($id);

        return view('front.basket.add', compact('destination'));
    }

    public function store(Request $request)
    {
        $destination = Destination::findOrFail($request->input('id'));
        $destination->tickets = $request->input('tickets');

        $destCookie = json_decode($request->cookie('basket'));
        $destCookie[$destination->id] = $destination->toArray();

        $destCookie = json_encode($destCookie);

        $cookie = cookie('basket', $destCookie, 60);

        flash('item added to basket')->success();

        return redirect()->route('front.basket.index')->cookie($cookie);
    }
}
