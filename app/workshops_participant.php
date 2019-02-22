<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workshops_participant extends Model
{
    protected $fillable=['workshop_id','workshop_name','username','email'];
}
