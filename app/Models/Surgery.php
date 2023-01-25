<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cost', 'doctor_id','description'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function vists()
    {
        return $this->hasMany(Visit::class);
    }
    public function shop()
    {
        return $this->hasMany(Shop::class);
    }
}
