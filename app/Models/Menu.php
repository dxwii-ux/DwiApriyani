<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;  
    protected $table = 'menus';
    protected $primaryKey ='id_menu';
    protected $gurded =[];
    protected $increments = false;
    protected $keyType = "string";
}
