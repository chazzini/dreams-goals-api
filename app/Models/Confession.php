<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Confession extends Model
{
    use HasFactory;
    protected $fillable = [
        'details',
        'category_id',
        'status'
    ];

    protected $casts = ['created_at'=>'date'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}