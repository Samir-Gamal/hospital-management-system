<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmbulanceTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['driver_name','notes'];
    public $timestamps = false;
}
