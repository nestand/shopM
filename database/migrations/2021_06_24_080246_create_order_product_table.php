<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*managing order's table. For any order we can have a few products in the same order, at the same time
        the product can appear at a few orders = many -to- many*/
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->Integer('order_id');
            $table->Integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
