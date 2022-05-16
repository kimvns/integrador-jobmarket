<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Servico
 * 
 * @property int $idserv
 * @property string $nomeserv
 * @property string $descserv
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $subcategorias_idsubc
 * @property int $subcategorias_categorias_idcat
 * @property int $subcategorias_categorias_clientes_idcli
 * @property int $fornecedores_idfor
 * 
 * @property \App\Models\Fornecedore $fornecedore
 * @property \App\Models\Subcategoria $subcategoria
 * @property \Illuminate\Database\Eloquent\Collection $solicitacos
 *
 * @package App\Models
 */
class Servico extends Eloquent
{
	protected $casts = [
		'subcategorias_idsubc' => 'int',
		'subcategorias_categorias_idcat' => 'int',
		'subcategorias_categorias_clientes_idcli' => 'int',
		'fornecedores_idfor' => 'int'
	];

	protected $fillable = [
		'nomeserv',
		'descserv'
	];

	public function fornecedore()
	{
		return $this->belongsTo(\App\Models\Fornecedore::class, 'fornecedores_idfor');
	}

	public function subcategoria()
	{
		return $this->belongsTo(\App\Models\Subcategoria::class, 'subcategorias_idsubc')
					->where('subcategorias.idsubc', '=', 'servicos.subcategorias_idsubc')
					->where('subcategorias.categorias_idcat', '=', 'servicos.subcategorias_categorias_idcat')
					->where('subcategorias.categorias_clientes_idcli', '=', 'servicos.subcategorias_categorias_clientes_idcli');
	}

	public function solicitacos()
	{
		return $this->hasMany(\App\Models\Solicitaco::class, 'servicos_idserv');
	}
}
