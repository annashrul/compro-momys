<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    use HasFactory;
    protected $table = 'image_products';
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
