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
    Schema::create('lisences', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('software_name');
      $table->enum('category', ['Graphics Software', 'Office Software']);
      $table->string('product_key');
      $table->string('licensed_to_name');
      $table->string('licensed_to_email');
      $table->enum('supplier', ['adobe', 'microsoft']);
      $table->integer('order_number');
      $table->integer('purchase_cost');
      $table->date('purchase_date');
      $table->date('expiration_date');
      $table->date('termination_date');
      $table->integer('purchase_order_number');
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
    Schema::dropIfExists('lisences');
  }
};
