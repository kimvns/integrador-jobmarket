<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Endereco
 * 
 * @property int $idend
 * @property string $logend
 * @property string $baiend
 * @property string $numend
 * @property string $compend
 * @property string $cepend
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $clientes_idcli
 * @property int $fornecedores_idfor
 * @property int $cidades_idcid
 * 
 * @property \App\Models\Cidade $cidade
 * @property \App\Models\Cliente $cliente
 * @property \App\Models\Fornecedore $fornecedore
 *
 * @package App\Models
 */
class Endereco extends Eloquent
{

	protected $primaryKey = 'idend';
	protected $casts = [
		'clientes_idcli' => 'int',
		'fornecedores_idfor' => 'int',
		'cidades_idcid' => 'int'
	];

	protected $fillable = [
		'logend',
		'baiend',
		'numend',
		'compend',
		'cepend'
	];

	public function cidade()
	{
		return $this->belongsTo(\App\Models\Cidade::class, 'cidades_idcid');
	}

	public function cliente()
	{
		return $this->belongsTo(\App\Models\Cliente::class, 'clientes_idcli');
	}

	public function fornecedore()
	{
		return $this->belongsTo(\App\Models\Fornecedore::class, 'fornecedores_idfor');
	}
}
