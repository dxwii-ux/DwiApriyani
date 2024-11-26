<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    /** @use HasFactory<\Database\Factories\PelangganFactory> */
    use HasFactory;
    protected $table ='pelanggans';
    protected $primaryKey ='id_pelanggan';
    protected $gurded =[];
    protected $increments = false;
    protected $keyType = "string";
}
