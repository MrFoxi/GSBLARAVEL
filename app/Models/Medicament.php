<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;
    protected $table = 'medicament';
    protected $primaryKey = 'MED_DEPOTLEGAL';
    public $timestamps = false;
    public $incrementing = false;
}