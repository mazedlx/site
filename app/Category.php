<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
