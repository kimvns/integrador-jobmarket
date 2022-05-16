<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Solicitaco
 * 
 * @property int $idsol
 * @property string $descsol
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $status_idstatus
 * @property int $servicos_idserv
 * @property int $servicos_subcategorias_idsubc
 * @property int $servicos_subcategorias_categorias_idcat
 * @property int $servicos_subcategorias_categorias_clientes_idcli
 * @property int $servicos_fornecedores_idfor
 * 
 * @property \App\Models\Servico $servico
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $cancelados
 * @property \Illuminate\Database\Eloquent\Collection $concluidos
 * @property \Illuminate\Database\Eloquent\Collection $pendencias
 *
 * @package App\Models
 */
class Solicitaco extends Eloquent
{
	protected $table = 'solicitacoes';
	protected $primaryKey = "idsol";

	protected $casts = [
		'status_idstatus' => 'int',
		'servicos_idserv' => 'int',
		'servicos_subcategorias_idsubc' => 'int',
		'servicos_subcategorias_categorias_idcat' => 'int',
		'servicos_subcategorias_categorias_clientes_idcli' => 'int',
		'servicos_fornecedores_idfor' => 'int'
	];
///
	protected $fillable = [
		'descsol'
	];

	public function servico()
	{
		return $this->belongsTo(\App\Models\Servico::class, 'servicos_idserv')
					->where('servicos.idserv', '=', 'solicitacoes.servicos_idserv')
					->where('servicos.subcategorias_idsubc', '=', 'solicitacoes.servicos_subcategorias_idsubc')
					->where('servicos.subcategorias_categorias_idcat', '=', 'solicitacoes.servicos_subcategorias_categorias_idcat')
					->where('servicos.subcategorias_categorias_clientes_idcli', '=', 'solicitacoes.servicos_subcategorias_categorias_clientes_idcli')
					->where('servicos.fornecedores_idfor', '=', 'solicitacoes.servicos_fornecedores_idfor');
	}

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function cancelados()
	{
		return $this->hasMany(\App\Models\Cancelado::class, 'solicitacoes_idsol');
	}

	public function concluidos()
	{
		return $this->hasMany(\App\Models\Concluido::class, 'solicitacoes_idsol');
	}

	public function pendencias()
	{
		return $this->hasMany(\App\Models\Pendencia::class, 'solicitacoes_idsol');
	}

	public function getAll ( $id_status ) {
		

		return $this->join(
			"categorias",
			"categorias.idcat",
			"=",
			"solicitacoes.servicos_subcategorias_categorias_idcat"
		)->join(
			"status",
			"status.idstatus",
			"=",
			"solicitacoes.status_idstatus"
		)->join(
			"clientes",
			"clientes.idcli",
			"=",
			"solicitacoes.servicos_subcategorias_categorias_clientes_idcli"
		)->select(
			"solicitacoes.idsol AS idsolicitacoes",
			"clientes.nomecli AS nomecliente",
			"categorias.nomecat AS nomecategoria",
			"solicitacoes.descsol AS descricao",
			"status.tipostatus AS tipostatus"
			)->where("status.tipostatus" , "Solicitado")->get();
	}


}
