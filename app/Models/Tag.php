<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'slug'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
