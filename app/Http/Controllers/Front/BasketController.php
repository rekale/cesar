<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function index(Request $request)
    {
        $destinations = json_decode($request->cookie('basket')) ?? [];
        $destinations = collect($destinations);

        return view('front.basket.index', compact('destinations'));
    }

    public function add($id, Request $request)
    {
        $destination = Destination::findOrFail($id);
        $cookie = json_decode($request->cookie('basket'), true);

        $destBasket = $cookie[$destination->id] ?? null;
        $destination['buy_tickets'] = isset($destBasket) ? $destBasket['buy_tickets']: 0 ;

        return view('front.basket.add', compact('destination'));
    }

    public function store(Request $request)
    {
        $destination = Destination::findOrFail($request->input('id'));
        $destination->buy_tickets = $request->input('buy_tickets');
        $destination->total = $destination->buy_tickets * $destination->ticket_price;

        $basket = json_decode($request->cookie('basket'), true) ?? [];
        $basket[$destination->id] = $destination->toArray();
        $basket = json_encode($basket);

        $cookie = cookie('basket', $basket, 60);

        flash('item added to the basket')->success();

        return redirect()->route('front.basket.index')->cookie($cookie);
    }

    public function destroy(Request $request)
    {
        $basket = json_decode($request->cookie('basket'), true);
        $id = $request->input('id');

        unset($basket[$id]);

        $basket = json_encode($basket);
        $cookie = cookie('basket', $basket, 60);

        flash('item has been deleted')->success();

        return back()->cookie($cookie);
    }

    public function checkout(Request $request)
    {
        $destinations = json_decode($request->cookie('basket'), true);
        $destinations = collect($destinations);

        DB::transaction(function() use ($destinations, $request) {
            $transaction = Transaction::create([
                'user_id' => $request->user()->id,
                'total' => $destinations->sum->total,
                'expired_at' => Carbon::tomorrow(),
            ]);

            foreach($destinations as $destination) {
                $dest = Destination::findOrFail($destination['id']);
                $dest->tickets -= $destination['tickets'];
                $dest->save();

                $transaction->destinations()->attach($destination['id'], [
                    'total' => $destination['total'],
                    'tickets' => $destination['buy_tickets'],
                ]);
            }
        });

        flash('basket has been checked out. please confirm the payment')->success();

        return redirect()->route('front.transactions.histories')->withCookie(cookie()->forget('basket'));
    }
}
