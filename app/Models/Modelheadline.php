<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelheadline extends Model
{
    use HasFactory;

    protected $table = 'headline';
    protected $primaryKey = 'headlineid';
    public $timestamps = false;
}
