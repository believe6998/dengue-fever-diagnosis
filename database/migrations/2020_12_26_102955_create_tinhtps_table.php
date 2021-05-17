<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinhtpsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tinhtps', function (Blueprint $table) {
      $table->id();
      $table->string('code');
      $table->string('name');
      $table->string('slug');
      $table->string('type');
      $table->string('name_with_type');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('tinhtps');
  }
}
