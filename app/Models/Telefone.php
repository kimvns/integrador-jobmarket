<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Telefone
 * 
 * @property int $idtel
 * @property string $telefone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $clientes_idcli
 * @property int $fornecedores_idfor
 * 
 * @property \App\Models\Cliente $cliente
 * @property \App\Models\Fornecedore $fornecedore
 *
 * @package App\Models
 */
class Telefone extends Eloquent
{
	protected $casts = [
		'clientes_idcli' => 'int'
	];

	protected $fillable = [
		'telefone'
	];

	public function cliente()
	{
		return $this->belongsTo(\App\Models\Cliente::class, 'clientes_idcli');
	}
	
}
