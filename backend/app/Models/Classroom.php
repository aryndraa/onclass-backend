<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function students()
    {
        return $this->hasMany(StudentProfile::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

}
