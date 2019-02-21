<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workshops extends Model
{
    //
    protected $fillable=['workshop_id','title','banner_image','about','status'];
}
