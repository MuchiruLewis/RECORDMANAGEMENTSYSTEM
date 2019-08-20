<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
protected $table = 'policeob';
protected $fillable = ['identification','title','Reportingdate','Reportername','physicaladdress','email','phonenumber','Reporttype','Policestation','Recordedby','Occurredon','Locationofoccurrence','Crimedescription','Policecomments'];
public $timestamps = true;
}
