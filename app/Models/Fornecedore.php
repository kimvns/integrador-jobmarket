<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Fornecedore
 * 
 * @property int $idfor
 * @property string $nomefor
 * @property string $cpf_cnpjfor
 * @property string $rgfor
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $enderecos
 * @property \Illuminate\Database\Eloquent\Collection $servicos
 * @property \Illuminate\Database\Eloquent\Collection $telefones
 *
 * @package App\Models
 */
class Fornecedore extends Eloquent
{
	protected $primaryKey = 'idfor';

	protected $fillable = [
		'nomefor',
		'cpf_cnpjfor',
		'rgfor'
	];

	public function enderecos()
	{
		return $this->hasMany(\App\Models\Endereco::class, 'fornecedores_idfor');
	}

	public function servicos()
	{
		return $this->hasMany(\App\Models\Servico::class, 'fornecedores_idfor');
	}

	public function telefones()
	{
		return $this->hasMany(\App\Models\Telefone::class, 'fornecedores_idfor');
	}



	}


