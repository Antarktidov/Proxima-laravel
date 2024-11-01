<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Study extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function students()
    {
        return $this->belongsToMany(Teacher::class);
    }
}
