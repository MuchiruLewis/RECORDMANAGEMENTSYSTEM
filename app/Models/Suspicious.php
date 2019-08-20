<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suspicious extends Model
{
   protected $table='arrestrecord';
   public $fillable = ['title','name','alias','identification','type','gender','residence','dob','offence','officerbadge','dateofcrime','officername','crimedescription','fingerprinttaker','datefingerprinttaken','arrestmethod','custody','condition','admittedby','cell'];
}


