<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
	protected $table = 'contactos';
	protected $guarded =['created_at', 'updated_at'];
}