<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Acomodacion extends Model
{
	protected $table = 'acomodaciones';
	protected $primaryKey = 'id_acomo';
	public $timestamps = false;

	protected $fillable = [
		'acomodacion'
	];

	public function asignaciones()
	{
		return $this->hasMany(Asignacion::class, 'tip_acomo_id');
	}
}