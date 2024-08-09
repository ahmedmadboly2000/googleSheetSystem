<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // database/migrations/xxxx_xx_xx_create_products_table.php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('product_name');
    $table->text('description');
    $table->string('country');
    $table->string('product_code')->unique();
    $table->timestamps();
});
;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
