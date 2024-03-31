<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class podpunkt extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'Подпункт'
    ];
    protected $table = 'podpunkt';
}
