<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'surgery_id', 'vist_date','cost'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function surgery()
    {
        return $this->belongsTo(Surgery::class);
    }
}
