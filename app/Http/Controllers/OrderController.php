<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Http\Requests\StoreNewOrder;
use App\Http\Requests\UpdateOrder;
use App\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $categories = Category::all();
        $products   = Product::all();
        return view('orders.create',compact('products', 'categories'));
    }

    public function store(StoreNewOrder $request)
    {

        $item_1_total_price = $request->item_1_price * $request->item_1_amount;
        $item_2_total_price = $request->item_2_price * $request->item_2_amount;
        $item_3_total_price = $request->item_3_price * $request->item_3_amount;
        $item_4_total_price = $request->item_4_price * $request->item_4_amount;
        $item_5_total_price = $request->item_5_price * $request->item_5_amount;

        $total_price = $item_1_total_price + $item_2_total_price
            + $item_3_total_price + $item_4_total_price + $item_5_total_price;

        $data['customer_name']        = $request->customer_name;
        $data['customer_mobile']      = $request->customer_mobile;
        $data['customer_address']     = $request->customer_address;
        $data['status']               = $request->status;
        $data['order_uid']            = '#' .  rand('12345678', '99999999');
        $data['total_price']          = $total_price;

        $data['item_1']               = $request->item_1;
        $data['item_1_amount']        = $request->item_1_amount;
        $data['item_1_price']         = $request->item_1_price;
        $data['item_1_total']         = $item_1_total_price;
        $data['item_1_category']      = $request->item_1_category;

        $data['item_2']               = $request->item_2;
        $data['item_2_amount']        = $request->item_2_amount;
        $data['item_2_price']         = $request->item_2_price;
        $data['item_2_total']         = $item_2_total_price;
        $data['item_2_category']      = $request->item_2_category;

        $data['item_3']               = $request->item_3;
        $data['item_3_amount']        = $request->item_3_amount;
        $data['item_3_price']         = $request->item_3_price;
        $data['item_3_total']         = $item_3_total_price;
        $data['item_3_category']      = $request->item_3_category;

        $data['item_4']               = $request->item_4;
        $data['item_4_amount']        = $request->item_4_amount;
        $data['item_4_price']         = $request->item_4_price;
        $data['item_4_total']         = $item_4_total_price;
        $data['item_4_category']      = $request->item_4_category;

        $data['item_5']               = $request->item_5;
        $data['item_5_amount']        = $request->item_5_amount;
        $data['item_5_price']         = $request->item_5_price;
        $data['item_5_total']         = $item_5_total_price;
        $data['item_5_category']      = $request->item_5_category;

        toastr()->success('تم اضافة الطلب بنجاح!');
        Order::create($data);
        return redirect()->route('orders.index');
    }

    public function show($id)
    {
        $order = Order::where('id', '=', $id)->first();
        return view('orders.show', compact('order'));
    }

    public function print($id)
    {
        $orders = Order::where('id', '=', $id)->first();
        return view('orders.print', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::where('id', '=', $id)->first();
        return view('orders.edit', compact('order'));
    }

    public function update(UpdateOrder $request, $id)
    {
        $orders = Order::where('id', '=', $id)->first();
        $item_1_total_price = $request->item_1_price * $request->item_1_amount;
        $item_2_total_price = $request->item_2_price * $request->item_2_amount;
        $item_3_total_price = $request->item_3_price * $request->item_3_amount;
        $item_4_total_price = $request->item_4_price * $request->item_4_amount;
        $item_5_total_price = $request->item_5_price * $request->item_5_amount;

        $total_price = $item_1_total_price + $item_2_total_price
            + $item_3_total_price + $item_4_total_price + $item_5_total_price;

        $data['customer_name']        = $request->customer_name;
        $data['customer_mobile']      = $request->customer_mobile;
        $data['customer_address']     = $request->customer_address;
        $data['status']               = $request->status;
        $data['order_uid']            = '#' .  rand('12345678', '99999999');
        $data['total_price']          = $total_price;

        $data['item_1']               = $request->item_1;
        $data['item_1_amount']        = $request->item_1_amount;
        $data['item_1_price']         = $request->item_1_price;
        $data['item_1_total']         = $item_1_total_price;
        $data['item_1_category']      = $request->item_1_category;

        $data['item_2']               = $request->item_2;
        $data['item_2_amount']        = $request->item_2_amount;
        $data['item_2_price']         = $request->item_2_price;
        $data['item_2_total']         = $item_2_total_price;
        $data['item_2_category']      = $request->item_2_category;

        $data['item_3']               = $request->item_3;
        $data['item_3_amount']        = $request->item_3_amount;
        $data['item_3_price']         = $request->item_3_price;
        $data['item_3_total']         = $item_3_total_price;
        $data['item_3_category']      = $request->item_3_category;

        $data['item_4']               = $request->item_4;
        $data['item_4_amount']        = $request->item_4_amount;
        $data['item_4_price']         = $request->item_4_price;
        $data['item_4_total']         = $item_4_total_price;
        $data['item_4_category']      = $request->item_4_category;

        $data['item_5']               = $request->item_5;
        $data['item_5_amount']        = $request->item_5_amount;
        $data['item_5_price']         = $request->item_5_price;
        $data['item_5_total']         = $item_5_total_price;
        $data['item_5_category']      = $request->item_5_category;
        toastr()->success('تم تعديل الطلب بنجاح!');
        $orders->update($data);
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        Order::where('id', '=',$id)->delete();
        toastr()->success('تم حذف الطلب بنجاح!');
        return redirect()->route('orders.index');
    }
}
