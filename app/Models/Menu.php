<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User;
// use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;  
    protected $table = 'menus';
    protected $primaryKey ='id_menu';
    protected $guarded =[];
    public $incrementing = false;
    protected $keyType = "string";
    
}
