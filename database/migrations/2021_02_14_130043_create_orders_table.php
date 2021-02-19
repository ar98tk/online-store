<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_mobile');
            $table->string('customer_address');
            $table->string('status')->default(0);
            $table->string('order_uid');
            $table->string('item_1');
            $table->string('item_1_amount');
            $table->string('item_1_price');
            $table->string('item_1_category');
            $table->string('item_1_total');
            $table->string('item_2')->nullable();
            $table->string('item_2_amount')->nullable();
            $table->string('item_2_price')->nullable();
            $table->string('item_2_category')->nullable();
            $table->string('item_2_total')->nullable();
            $table->string('item_3')->nullable();
            $table->string('item_3_amount')->nullable();
            $table->string('item_3_price')->nullable();
            $table->string('item_3_category')->nullable();
            $table->string('item_3_total')->nullable();
            $table->string('item_4')->nullable();
            $table->string('item_4_amount')->nullable();
            $table->string('item_4_price')->nullable();
            $table->string('item_4_category')->nullable();
            $table->string('item_4_total')->nullable();
            $table->string('item_5')->nullable();
            $table->string('item_5_amount')->nullable();
            $table->string('item_5_price')->nullable();
            $table->string('item_5_category')->nullable();
            $table->string('item_5_total')->nullable();
            $table->string('total_price')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
