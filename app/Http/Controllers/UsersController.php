<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewUser;
use App\Http\Requests\UpdateUser;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreNewUser $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        toastr()->success('تم اضافة الحساب بنجاح!');
        User::create($data);
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::where('id', '=', $id)->first();
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUser $request, $id)
    {
        $users = User::where('id', '=', $id)->first();
        $data['name']       = $request->name;
        $data['email']      = $request->email;
        $data['password']   = bcrypt($request->password);
        toastr()->success('تم تعديل الحساب بنجاح!');
        $users->update($data);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::where('id', '=',$id)->delete();
        toastr()->success('تم حذف المستخدم بنجاح!');
        return redirect()->route('users.index');
    }
}
