<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
	protected $table = 'registros';
	protected $guarded =['updated_at', 'created_at'];
}
