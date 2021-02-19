<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewCustomer;
use App\Customer;
use App\Http\Requests\UpdateCustomer;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(StoreNewCustomer $request)
    {
        $data['name'] = $request->name;
        $data['mobile'] = $request->mobile;
        $data['address'] = $request->address;
        $data['notes'] = $request->notes;
        toastr()->success('تم اضافة بيانات العميل بنجاح!');
        Customer::create($data);
        return redirect()->route('customers.index');
    }

    public function show($id)
    {
        $customer = Customer::where('id', '=', $id)->first();
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::where('id', '=', $id)->first();
        return view('customers.edit', compact('customer'));
    }

    public function update(UpdateCustomer $request, $id)
    {
        $customers = Customer::where('id', '=', $id)->first();
        $data['name'] = $request->name;
        $data['mobile'] = $request->mobile;
        $data['address'] = $request->address;
        $data['notes'] = $request->notes;
        toastr()->success('تم تعديل العميل بنجاح!');
        $customers->update($data);
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        Customer::where('id', '=',$id)->delete();
        toastr()->success('تم حذف العميل بنجاح!');
        return redirect()->route('customers.index');
    }
}
