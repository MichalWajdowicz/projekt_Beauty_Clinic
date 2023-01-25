<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'description'];

    public function surgarys()
    {
        return $this->hasMany(Surgery::class);
    }
}


