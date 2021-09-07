<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title'];

    public function product() {
        return $this->belongsToMany(Product::class);
    }
}
