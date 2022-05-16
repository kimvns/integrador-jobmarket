<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pendencia
 * 
 * @property int $idpen
 * @property string $descpen
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
 *
 * @package App\Models
 */
class Pendencia extends Eloquent
{
	protected $primaryKey = 'idpen';
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
		'descpen'
	];

	public function solicitaco()
	{
		return $this->belongsTo(\App\Models\Solicitaco::class, 'solicitacoes_idsol')
					->where('solicitacoes.idsol', '=', 'pendencias.solicitacoes_idsol')
					->where('solicitacoes.status_idstatus', '=', 'pendencias.solicitacoes_status_idstatus')
					->where('solicitacoes.servicos_idserv', '=', 'pendencias.solicitacoes_servicos_idserv')
					->where('solicitacoes.servicos_subcategorias_idsubc', '=', 'pendencias.solicitacoes_servicos_subcategorias_idsubc')
					->where('solicitacoes.servicos_subcategorias_categorias_idcat', '=', 'pendencias.solicitacoes_servicos_subcategorias_categorias_idcat')
					->where('solicitacoes.servicos_subcategorias_categorias_clientes_idcli', '=', 'pendencias.solicitacoes_servicos_subcategorias_categorias_clientes_idcli')
					->where('solicitacoes.servicos_fornecedores_idfor', '=', 'pendencias.solicitacoes_servicos_fornecedores_idfor');
	}


	public function getAll () {

	

		return $this->join(
			"servicos",
			"servicos.idserv",
			"=",
			"pendencias.solicitacoes_status_idstatus" //ok	

		)->join(
			"categorias",
			"categorias.idcat",
			"=",
			"pendencias.solicitacoes_servicos_subcategorias_categorias_idcat"
			)->join(
				"status",
				"status.idstatus",
				"=",
				"pendencias.solicitacoes_status_idstatus"
		)->join(
			"clientes",
			"clientes.idcli",
			"=",
			"pendencias.solicitacoes_servicos_subcategorias_categorias_clientes_idcli"

		)->select (
			"pendencias.idpen as pendenciasid",
			"servicos.nomeserv as pendenciasservi",
			"categorias.nomecat as pendenciascat",
			"clientes.nomecli as pendenciascliete",

			"pendencias.created_at as pendenciasdata"
		
			)->where("status.tipostatus","Pendente")->get();
		

	}




	
}
