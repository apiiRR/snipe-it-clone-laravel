<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
  use HasFactory;

  protected $table = "components";
  protected $fillable = ["component_name", "category", "quantity", "serial", "order_number", "purchase_date", "purchase_cost", "notes"];
  public $timestamps = false;
}
