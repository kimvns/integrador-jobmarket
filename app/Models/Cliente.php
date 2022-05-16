<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cliente
 * 
 * @property int $idcli
 * @property string $nomecli
 * @property string $sexocli
 * @property \Carbon\Carbon $dncli
 * @property string $rgcli
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $categorias
 * @property \Illuminate\Database\Eloquent\Collection $enderecos
 * @property \Illuminate\Database\Eloquent\Collection $telefones
 *
 * @package App\Models
 */
class Cliente extends Eloquent
{
	protected $primaryKey = 'idcli';

	protected $dates = [
		'dncli'
	];

	protected $fillable = [
		'nomecli',
		'sexocli',
		'dncli',
		'rgcli'
	];

	public function categorias()
	{
		return $this->hasMany(\App\Models\Categoria::class, 'clientes_idcli');
	}

	public function enderecos()
	{
		return $this->hasMany(\App\Models\Endereco::class, 'clientes_idcli');
	}

	public function telefones()
	{
		return $this->hasMany(\App\Models\Telefone::class, 'clientes_idcli');
	}


	public function getAll() {

		return $this->join(
			"telefones",
			"telefones.clientes_idcli",
			"=",
			"clientes.idcli"
		)->select(
			"telefones.telefone as telefone",
			"clientes.idcli as clienteid",
			"clientes.nomecli as clientenome",
			"clientes.dncli as clientedata",
			"clientes.cpfcli as clientecpf",
			#"Endereco.logend as enderecorua",
			"clientes.sexocli as clientesexo"		
		)->get();


	}


	public function getAllEdit ( $id_cliente ) {

		$condicao = [
			'clientes.idclientes' => $id_cliente
		];

		$result = $this->join(
			'telefone',
			'telefone.idcliente',
			'=',
			'clientes.idclientes'
		)->join(
			'endereco',
			'endereco.idcliente',
			'=',
			'clientes.idclientes'
		)->select(
			'clientes.idcliente as idcliente'
		)->where(
			$condicao
		)->get();

		return $result;
	}

}
