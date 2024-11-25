<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class Ciudad extends Model
{
	protected $table = 'ciudades';
	protected $primaryKey = 'id_ciu';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_ciu' => 'int',
		'dep_id' => 'int'
	];

	protected $fillable = [
		'nom_ciu',
		'dep_id'
	];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class, 'dep_id');
	}

	public function hoteles()
	{
		return $this->hasMany(Hotel::class, 'ciu_id');
	}
}
