<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TipHabitacion extends Model
{
	protected $table = 'tip_habitaciones';
	protected $primaryKey = 'id_habita';
	public $timestamps = false;

	protected $fillable = [
		'habitacion'
	];

	public function asignaciones()
	{
		return $this->hasMany(Asignacion::class, 'tip_habita_id');
	}
}