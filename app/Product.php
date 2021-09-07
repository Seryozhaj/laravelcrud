<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'url',
        'user_id'
    ];

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
