<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 * 
 * @property int $id_dep
 * @property string|null $nom_dep
 * 
 * @property Collection|Ciudade[] $ciudades
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamentos';
	protected $primaryKey = 'id_dep';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_dep' => 'int'
	];

	protected $fillable = [
		'nom_dep'
	];

	public function ciudades()
	{
		return $this->hasMany(Ciudade::class, 'dep_id');
	}
}
