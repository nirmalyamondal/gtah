<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class banner extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $timestamps = false;
}
