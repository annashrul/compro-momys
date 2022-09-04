<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function imageproduct()
    {
        return $this->hasMany(ImageProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
