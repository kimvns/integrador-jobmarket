<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Estado
 * 
 * @property int $idest
 * @property string $siglaest
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $cidades
 *
 * @package App\Models
 */
class Estado extends Eloquent
{
	protected $primaryKey = 'idest';

	protected $fillable = [
		'siglaest'
	];

	public function cidades()
	{
		return $this->hasMany(\App\Models\Cidade::class, 'estados_idest');
	}
}
