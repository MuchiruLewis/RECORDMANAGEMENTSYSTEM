<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adminob extends Model
{
   protected $table='policeob';
   public $fillable = ['identification','title','Reportingdate','Reportername','physicaladdress','email','phonenumber','Reporttype','Policestation','Recordedby','Occurredon','Locationofoccurence','Crimedescription','Policecomments','cases','CaseNo','Investigator','Report'];
}



