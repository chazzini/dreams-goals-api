<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function confessions()
    {
        return $this->hasMany(Confession::class);
    }
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
    public function whys()
    {
        return $this->hasMany(Why::class);
    }
}