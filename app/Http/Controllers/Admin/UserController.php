<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = $this->model->latest()->paginate();

        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = $this->model->findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update($id, UserRequest $request)
    {
        $input = $request->only(['name', 'detail_name']);

        if($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('users', 'public');
            $input['image'] = "/storage/{$imgPath}";
        }

        $user = $this->model->whereId($id)->update($input);

        flash('user successfuly edited')->success();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->model->destroy($id);

        flash('user have been deleted');

        return redirect()->back();
    }

}
