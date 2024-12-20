<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    /** @use HasFactory<\Database\Factories\MejaFactory> */
    use HasFactory;
    protected $table = 'mejas';
    protected $primaryKey ='id_meja';
    protected $guarded =[];
    protected $keyType = 'string';
}
