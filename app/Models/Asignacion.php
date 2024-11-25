<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
	protected $table = 'asignaciones';
	protected $primaryKey = 'id_asig';
	public $timestamps = false;

	protected $casts = [
		'tip_habita_id' => 'int',
		'tip_acomo_id' => 'int',
		'cant' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'tip_habita_id',
		'tip_acomo_id',
		'cant'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class, 'hotel_id');
	}

	public function tip_habitacione()
	{
		return $this->belongsTo(TipHabitacion::class, 'tip_habita_id');
	}

	public function acomodacion()
	{
		return $this->belongsTo(Acomodacion::class, 'tip_acomo_id');
	}
}
