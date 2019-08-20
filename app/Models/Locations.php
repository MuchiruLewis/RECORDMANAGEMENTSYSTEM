<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
   protected $table='locations';
   public $fillable = ['name','identification','phonenumber','lat','lng','description','location_status'];
}



