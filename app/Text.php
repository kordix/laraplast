<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $guarded=['created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
