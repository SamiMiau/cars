<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehiculo_id',
        'old_user_id',
        'new_user_id'
    ];
}
