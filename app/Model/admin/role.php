<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function permissoins()
    {
        return $this->belongsToMany('App\Model\admin\Permission');
    }
}
