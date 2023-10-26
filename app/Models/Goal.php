<?php

namespace App\Models;

use Carbon\Carbon as CarbonCarbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Goal extends Model
{
    use HasFactory;
    protected $fillable = [
        'target',
        'image',
        'start_date',
        'completion_date',
        'category_id',
        'status'
    ];


    protected $casts = [
        'start_date'=> 'date',
        'completion_date'=>'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}