<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep';
	
	protected $fillable = [
		'obat_id', 
		'dosis',
		'deskripsi',
	];
}
