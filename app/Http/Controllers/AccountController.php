<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\StoreNewAccount;
use App\Http\Requests\UpdateAccount;

class AccountController extends Controller
{

    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }
    public function expenses()
    {
        $accounts = Account::where('type',1)->get();
        return view('accounts.expenses', compact('accounts'));
    }
    public function revenues()
    {
        $accounts = Account::where('type',0)->get();
        return view('accounts.revenues', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(StoreNewAccount $request)
    {
        $data['name']            = $request->name;
        $data['money_amount']    = $request->money_amount;
        $data['username']        = auth()->user()->name;
        $data['type']            = $request->type;
        $data['notes']           = $request->notes;
        toastr()->success('تم اضافة المعاملة بنجاح!');
        Account::create($data);
        return redirect()->route('accounts.index');
    }

    public function show($id)
    {
        $account = Account::where('id', '=', $id)->first();
        return view('accounts.show', compact('account'));
    }

    public function edit($id)
    {
        $account = Account::where('id', '=', $id)->first();
        return view('accounts.edit', compact('account'));
    }

    public function update(UpdateAccount $request, $id)
    {
        $accounts = Account::where('id', '=', $id)->first();
        $data['name']            = $request->name;
        $data['money_amount']    = $request->money_amount;
        $data['username']        = auth()->user()->name;
        $data['type']            = $request->type;
        $data['notes']           = $request->notes;
        toastr()->success('تم تعديل المعاملة بنجاح!');
        $accounts->update($data);
        return redirect()->route('accounts.index');
    }

    public function destroy($id)
    {
        Account::where('id', '=',$id)->delete();
        toastr()->success('تم حذف المعاملة بنجاح!');
        return redirect()->route('accounts.index');
    }
}
