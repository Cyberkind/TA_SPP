<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugasModels extends Model
{
    use HasFactory;
    protected $table = "petugas";
    protected $primaryKey = "id_petugas";
    public $incrementing = false;
    // protected $keyType = "string";
    protected $guarded = [];
}
