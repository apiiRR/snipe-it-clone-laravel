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
    Schema::create('components', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('component_name');
      $table->enum('category', ['HDD/SSD', 'RAM']);
      $table->integer('quantity');
      $table->string('serial');
      $table->integer('order_number');
      $table->date('purchase_date');
      $table->integer('purchase_cost');
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
    Schema::dropIfExists('components');
  }
};
