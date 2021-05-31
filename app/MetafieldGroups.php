<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Resources;

class MetafieldGroups extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Resources()
    {
        return $this->belongsToMany('App\Resources');
    }

    public function Metafields()
    {
        return $this->hasMany('App\Metafields');
    }
}
