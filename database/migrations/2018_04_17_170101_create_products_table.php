<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->char('category', 1)->default(1);
            $table->float('price', 2);
            $table->float('sale', 2)->nullable();
            $table->float('cost', 2)->nullable();
            $table->integer('stock')->default(10);
            $table->string('provider')->nullable();
            $table->string('url')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('restrictions')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('product');
    }
}
