<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'component';

    /**
     * @var array
     */
    protected $fillable = ['id', 'category_id', 'name','quantity','price'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Categories','id');
    }
}
