<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = ['user_id','name','stock','description','photo','location','price'];
}
