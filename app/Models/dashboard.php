<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    protected $table = 'admin';
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
