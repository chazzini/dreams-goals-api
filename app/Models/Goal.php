<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}