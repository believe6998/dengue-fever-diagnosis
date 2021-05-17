<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXaphuongsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */

  public function up()
  {
    Schema::create('xaphuongs', function (Blueprint $table) {
      $table->id();
      $table->string('code');
      $table->string('parent_code');
      $table->string('name');
      $table->string('type');
      $table->string('slug');
      $table->string('name_with_type');
      $table->string('path');
      $table->string('path_with_type');
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
    Schema::dropIfExists('xaphuongs');
  }
}
