<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Subcategoria
 * 
 * @property int $idsubc
 * @property string $nomesubc
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $categorias_idcat
 * @property int $categorias_clientes_idcli
 * 
 * @property \App\Models\Categoria $categoria
 * @property \Illuminate\Database\Eloquent\Collection $servicos
 *
 * @package App\Models
 */
class Subcategoria extends Eloquent
{
	protected $casts = [
		'categorias_idcat' => 'int',
		'categorias_clientes_idcli' => 'int'
	];

	protected $fillable = [
		'nomesubc'
	];

	public function categoria()
	{
		return $this->belongsTo(\App\Models\Categoria::class, 'categorias_idcat')
					->where('categorias.idcat', '=', 'subcategorias.categorias_idcat')
					->where('categorias.clientes_idcli', '=', 'subcategorias.categorias_clientes_idcli');
	}

	public function servicos()
	{
		return $this->hasMany(\App\Models\Servico::class, 'subcategorias_idsubc');
	}
}
