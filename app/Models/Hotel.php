<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	protected $table = 'hoteles';
	protected $primaryKey = 'id_nit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'num_hab' => 'int',
		'ciu_id' => 'int'
	];

	protected $fillable = [
		'nom',
		'dir',
		'num_hab',
		'ciu_id',
	];

	public function ciudades()
	{
		return $this->belongsTo(Ciudad::class, 'ciu_id');
	}

	public function asignaciones()
	{
		return $this->hasMany(Asignacion::class, 'hotel_id');
	}
}