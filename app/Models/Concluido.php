<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Concluido
 * 
 * @property int $idconc
 * @property string $descconc
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $solicitacoes_idsol
 * @property int $solicitacoes_status_idstatus
 * @property int $solicitacoes_servicos_idserv
 * @property int $solicitacoes_servicos_subcategorias_idsubc
 * @property int $solicitacoes_servicos_subcategorias_categorias_idcat
 * @property int $solicitacoes_servicos_subcategorias_categorias_clientes_idcli
 * @property int $solicitacoes_servicos_fornecedores_idfor
 * 
 * @property \App\Models\Solicitaco $solicitaco
 * @property \Illuminate\Database\Eloquent\Collection $financeiros
 *
 * @package App\Models
 */
class Concluido extends Eloquent
{
	protected $casts = [
		'solicitacoes_idsol' => 'int',
		'solicitacoes_status_idstatus' => 'int',
		'solicitacoes_servicos_idserv' => 'int',
		'solicitacoes_servicos_subcategorias_idsubc' => 'int',
		'solicitacoes_servicos_subcategorias_categorias_idcat' => 'int',
		'solicitacoes_servicos_subcategorias_categorias_clientes_idcli' => 'int',
		'solicitacoes_servicos_fornecedores_idfor' => 'int'
	];

	protected $fillable = [
		'descconc'
	];

	public function solicitaco()
	{
		return $this->belongsTo(\App\Models\Solicitaco::class, 'solicitacoes_idsol')
					->where('solicitacoes.idsol', '=', 'concluidos.solicitacoes_idsol')
					->where('solicitacoes.status_idstatus', '=', 'concluidos.solicitacoes_status_idstatus')
					->where('solicitacoes.servicos_idserv', '=', 'concluidos.solicitacoes_servicos_idserv')
					->where('solicitacoes.servicos_subcategorias_idsubc', '=', 'concluidos.solicitacoes_servicos_subcategorias_idsubc')
					->where('solicitacoes.servicos_subcategorias_categorias_idcat', '=', 'concluidos.solicitacoes_servicos_subcategorias_categorias_idcat')
					->where('solicitacoes.servicos_subcategorias_categorias_clientes_idcli', '=', 'concluidos.solicitacoes_servicos_subcategorias_categorias_clientes_idcli')
					->where('solicitacoes.servicos_fornecedores_idfor', '=', 'concluidos.solicitacoes_servicos_fornecedores_idfor');
	}

	public function financeiros()
	{
		return $this->hasMany(\App\Models\Financeiro::class, 'concluidos_idconc');
	}

	public function getAll () {

		return $this->join(
			
			"categorias",
			"categorias.idcat",
			"=",
			"concluidos.solicitacoes_servicos_subcategorias_categorias_idcat"
		
		)->join(
			"clientes",
			"clientes.idcli",
			"=",
			"concluidos.solicitacoes_servicos_subcategorias_categorias_clientes_idcli"

		)->select(
			"concluidos.idconc as concluidosid",
			
			"categorias.nomecat as concluidoscat",
			"clientes.nomecli as concluidoscliete",
			"concluidos.created_at as concluidosdata"

			)->where("concluidos.solicitacoes_status_idstatus","2")->get();
	}



}
