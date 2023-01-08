<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('accessories', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('accessory_name');
      $table->enum('category', ['keyboard', 'mouse']);
      $table->integer('model_number');
      $table->integer('order_number');
      $table->date('purchase_date');
      $table->integer('purchase_cost');
      $table->integer('quantity');
      $table->string('notes');
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
    Schema::dropIfExists('accessories');
  }
};
