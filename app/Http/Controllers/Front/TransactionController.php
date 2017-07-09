<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    private $model;

    public function __construct(Transaction $transaction)
    {
        $this->model = $transaction;
    }

    public function histories(Request $request)
    {
        $id  = $request->user()->id;
        $filter = $request->input('filter');
        $model = $this->model->with('destinations');

        if(isset($filter)) {
            $model = $this->{$filter}($model);
        }

        $transactions = $model->latest()->paginate();

        return view('front.transactions.histories', compact('transactions'));
    }

    public function confirmation($id, Request $request)
    {
        $transaction = $this->model->whereUserId($request->user()->id)
                                   ->findOrFail($id);

        return view('front.transactions.confirmation', compact('transaction'));
    }

    public function confirm($id, Request $request)
    {
        if($request->hasFile('proof')) {
            $imgPath = $request->file('proof')->store('transactions', 'public');
            $input['proof'] = "/storage/{$imgPath}";
        }

        $transaction = $this->model->whereId($id)->update($input);

        flash('confirmation has been requested')->success();

        return redirect()->route('front.transactions.histories');
    }

    private function confirmed(Builder $model)
    {
        return $model->whereConfirmed(true);
    }

    private function not_confirmed(Builder $model)
    {
        return $model->whereNull('proof')->whereConfirmed(false);
    }

    private function confirm_request(Builder $model)
    {
        return $model->whereNotNull('proof')->whereConfirmed(false);
    }
}
