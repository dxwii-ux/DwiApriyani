<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    /** @use HasFactory<\Database\Factories\PesananFactory> */
    use HasFactory;
    protected $table = 'pesanans';
    protected $primaryKey ='id_pesanan';
    protected $guarded =[];
    public $incrementing = false;
    protected $keyType = "string";
    protected $fillable = ['id_pesanan', 'id_menu', 'id_pelanggan', 'jumlah', 'id_user'];
}
