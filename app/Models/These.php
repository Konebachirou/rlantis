<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class These extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'date_debut',
        'date_fin',
        'id_user',
    ];
}
