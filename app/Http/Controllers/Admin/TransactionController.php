<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    private $model;

    public function __construct(Transaction $transaction)
    {
        $this->model = $transaction;
    }

    public function index(Request $request)
    {
        $filter = $request->input('filter');
        $model = $this->model->with('user');

        if(isset($filter)) {
            $model = $this->{$filter}($model);
        }

        $transactions = $model->latest()->paginate();

        return view('admin.transactions.index', compact('transactions'));
    }

    public function edit($id)
    {
        $transaction = $this->model->with('destinations.category')->findOrFail($id);

        return view('admin.transactions.edit', compact('transaction'));
    }

    public function update($id, TransactionRequest $request)
    {
        $input = $request->only(['total', 'proof', 'confirmed']);

        if($request->hasFile('proof')) {
            $imgPath = $request->file('image')->store('transactions', 'public');
            $input['image'] = "/storage/{$imgPath}";
        }

        $transaction = $this->model->whereId($id)->update($input);

        flash('transaction successfuly edited')->success();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->model->destroy($id);

        flash('transaction have been deleted');

        return redirect()->back();
    }

    private function confirmed(Builder $model)
    {
        return $model->whereConfirmed(true);
    }

    private function not_confirmed(Builder $model)
    {
        return $model->where('expired_at', '>=', Carbon::now())->whereNull('proof')->whereConfirmed(false);
    }

    private function confirm_request(Builder $model)
    {
        return $model->where('expired_at', '>=', Carbon::now())->whereNotNull('proof')->whereConfirmed(false);
    }

    private function expired(Builder $model)
    {
        return $model->where('expired_at', '<', Carbon::now());
    }

}
