<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PurchaseRequest;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    private $model;

    public function __construct(Purchase $purchase)
    {
        $this->model = $purchase;
    }

    public function index(Request $request)
    {
        $filter = $request->input('filter');
        $model = $this->model->with('user', 'destination');

        if(isset($filter)) {
            $model = $this->{$filter}($model);
        }

        $purchases = $model->latest()->paginate();

        return view('admin.purchases.index', compact('purchases'));
    }

    public function edit($id)
    {
        $purchase = $this->model->findOrFail($id);

        return view('admin.purchases.edit', compact('purchase'));
    }

    public function update($id, PurchaseRequest $request)
    {
        $input = $request->only(['name', 'detail_name']);

        if($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('purchases', 'public');
            $input['image'] = "/storage/{$imgPath}";
        }

        $purchase = $this->model->whereId($id)->update($input);

        flash('purchase successfuly edited')->success();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->model->destroy($id);

        flash('purchase have been deleted');

        return redirect()->back();
    }

    private function confirmed(Builder $model)
    {
        return $model->whereConfirmed(true);
    }

    private function not_confirmed(Builder $model)
    {
        return $model->whereConfirmed(false);
    }

    private function confirm_request(Builder $model)
    {
        return $model->whereNotNull('proof')->whereConfirmed(false);
    }

}
