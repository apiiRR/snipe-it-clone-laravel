<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
  use HasFactory;

  protected $table = "accessories";
  protected $fillable = ["accessory_name", "category", "model_number", "order_number", "purchase_date", "purchase_cost", "quantity", "notes"];
  public $timestamps = false;
}
