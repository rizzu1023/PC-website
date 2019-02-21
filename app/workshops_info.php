<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workshops_info extends Model
{
    protected $fillable=['workshop_id','duration','workshop_date','workshop_time','location','fees','notes'];
}
