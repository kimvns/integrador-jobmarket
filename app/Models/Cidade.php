<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cidade
 * 
 * @property int $idcid
 * @property string $nomecid
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $estados_idest
 * 
 * @property \App\Models\Estado $estado
 * @property \Illuminate\Database\Eloquent\Collection $enderecos
 *
 * @package App\Models
 */
class Cidade extends Eloquent
{

	protected $primaryKey = 'idcid';

	protected $casts = [
		'estados_idest' => 'int'
	];

	protected $fillable = [
		'nomecid'
	];

	public function estado()
	{
		return $this->belongsTo(\App\Models\Estado::class, 'estados_idest');
	}

	public function enderecos()
	{
		return $this->hasMany(\App\Models\Endereco::class, 'cidades_idcid');
	}
}
