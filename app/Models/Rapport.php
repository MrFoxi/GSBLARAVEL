<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    // use HasFactory;
    public $table = 'rapport_visite';
    protected $primaryKey = 'RAP_NUM';
    public $timestamps = false;
    public $incrementing = false;
}