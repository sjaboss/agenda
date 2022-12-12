<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoCatView extends Model
{
    use HasFactory;
    protected $table = 'v_con_cat';
    protected $primaryKey = 'id';  /* contacto_id */
}
