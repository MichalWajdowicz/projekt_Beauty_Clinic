<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['user_id', 'surgery_id', 'vist_date'];

    public function surgery()
    {
        return $this->belongsTo(Surgery::class);
    }
}
