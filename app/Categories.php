<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = 'categories';

    protected $fillable = ['id', 'name'];

    protected $guarded = ['id'];

    public function component()
    {
        return $this->hasMany('App\Component','category_id');
    }
}
