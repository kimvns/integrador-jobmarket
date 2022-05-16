<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cancelado
 * 
 * @property int $idcanc
 * @property string $desccanc
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
class Cancelado extends Eloquent
{
	protected $primarykey = "idcanc";
	
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
		'desccanc'
	];

	public function solicitaco()
	{
		return $this->belongsTo(\App\Models\Solicitaco::class, 'solicitacoes_idsol')
					->where('solicitacoes.idsol', '=', 'cancelados.solicitacoes_idsol')
					->where('solicitacoes.status_idstatus', '=', 'cancelados.solicitacoes_status_idstatus')
					->where('solicitacoes.servicos_idserv', '=', 'cancelados.solicitacoes_servicos_idserv')
					->where('solicitacoes.servicos_subcategorias_idsubc', '=', 'cancelados.solicitacoes_servicos_subcategorias_idsubc')
					->where('solicitacoes.servicos_subcategorias_categorias_idcat', '=', 'cancelados.solicitacoes_servicos_subcategorias_categorias_idcat')
					->where('solicitacoes.servicos_subcategorias_categorias_clientes_idcli', '=', 'cancelados.solicitacoes_servicos_subcategorias_categorias_clientes_idcli')
					->where('solicitacoes.servicos_fornecedores_idfor', '=', 'cancelados.solicitacoes_servicos_fornecedores_idfor');
	}

	public function getAll() {
		

		return $this->join(
			"servicos",
			"servicos.idserv",
			"=",
			"cancelados.solicitacoes_servicos_idserv" //ok	

		)->join(
			"categorias",
			"categorias.idcat",
			"=",
			"cancelados.solicitacoes_servicos_subcategorias_categorias_idcat"
		)->join(
				"status",
				"status.idstatus",
				"=",
				"cancelados.solicitacoes_status_idstatus"
		)->join(
			
			"clientes",
			"clientes.idcli",
			"=",
			"cancelados.solicitacoes_servicos_subcategorias_categorias_clientes_idcli"

		)->select(
			"cancelados.idcanc as canceladoid",
			"servicos.nomeserv as canceladoservi",
			"categorias.nomecat as canceladocat",
			"cancelados.created_at as canceladodata"
		
			)->where("status.tipostatus","Cancelado")->get();
	}


}
