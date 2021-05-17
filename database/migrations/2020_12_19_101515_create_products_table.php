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
      $table->increments('id');
      $table->string('slug')->unique()->index();
      $table->string('name');
      $table->text('description')->nullable();
      $table->text('images')->nullable();
      $table->integer('brand')->nullable();
      $table->bigInteger('discount')->default(0);
      $table->bigInteger('price');
      $table->integer('quantity');
      $table->tinyInteger('status')->default(1)->index();
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
