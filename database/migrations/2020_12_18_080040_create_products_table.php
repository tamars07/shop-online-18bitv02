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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name',50)->comment('day la ten sp');
            $table->integer('id_type');
            $table->text('decription')->nullable();
            $table->double('unit_price')->default(0);
            $table->double('promption_price')->nullable();
            $table->text('image')->nullable();
            $table->string('unit',10)->nullable();
            $table->boolean('new')->default(true);

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
        Schema::dropIfExists('products');
    }
}
