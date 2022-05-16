<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Categoria
 * 
 * @property int $idcat
 * @property string $nomecat
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $clientes_idcli
 * 
 * @property \App\Models\Cliente $cliente
 * @property \Illuminate\Database\Eloquent\Collection $subcategorias
 *
 * @package App\Models
 */
class Categoria extends Eloquent
{
	protected $casts = [
		'clientes_idcli' => 'int'
	];

	protected $fillable = [
		'nomecat'
	];

	public function cliente()
	{
		return $this->belongsTo(\App\Models\Cliente::class, 'clientes_idcli');
	}

	public function subcategorias()
	{
		return $this->hasMany(\App\Models\Subcategoria::class, 'categorias_idcat');
	}
}
