<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lisence extends Model
{
  use HasFactory;

  protected $table = "lisences";
  protected $fillable = ["software_name", "category", "product_key", "licensed_to_name", "licensed_to_email", "supplier", "order_number", "purchase_cost", "purchase_date", "expiration_date", "termination_date", "purchase_order_number", "notes"];
  public $timestamps = false;
}
