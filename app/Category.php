<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
