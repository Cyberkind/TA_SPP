<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sppModels extends Model
{
    use HasFactory;
    protected $table = "spp";
    protected $primaryKey = "id_spp";
    public $incrementing = false;
    // protected $keyType = "string";
    protected $guarded = [];
}
