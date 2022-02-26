<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LaboratorieEmployee extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];
}
