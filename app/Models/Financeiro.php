<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Financeiro
 * 
 * @property int $idfin
 * @property \Carbon\Carbon $datafin
 * @property float $valorfin
 * @property float $totalfin
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $concluidos_idconc
 * @property int $concluidos_solicitacoes_idsol
 * @property int $concluidos_solicitacoes_status_idstatus
 * @property int $concluidos_solicitacoes_servicos_idserv
 * @property int $concluidos_solicitacoes_servicos_subcategorias_idsubc
 * @property int $concluidos_categorias_idcat
 * @property int $concluidos_categorias_clientes_idcli
 * @property int $concluidos_solicitacoes_servicos_fornecedores_idfor
 * 
 * @property \App\Models\Concluido $concluido
 *
 * @package App\Models
 */
class Financeiro extends Eloquent
{
	protected $table = 'financeiro';

	protected $casts = [
		'valorfin' => 'float',
		'totalfin' => 'float',
		'concluidos_idconc' => 'int',
		'concluidos_solicitacoes_idsol' => 'int',
		'concluidos_solicitacoes_status_idstatus' => 'int',
		'concluidos_solicitacoes_servicos_idserv' => 'int',
		'concluidos_solicitacoes_servicos_subcategorias_idsubc' => 'int',
		'concluidos_categorias_idcat' => 'int',
		'concluidos_categorias_clientes_idcli' => 'int',
		'concluidos_solicitacoes_servicos_fornecedores_idfor' => 'int'
	];

	protected $dates = [
		'datafin'
	];

	protected $fillable = [
		'datafin',
		'valorfin',
		'totalfin'
	];

	public function concluido()
	{
		return $this->belongsTo(\App\Models\Concluido::class, 'concluidos_idconc')
					->where('concluidos.idconc', '=', 'financeiro.concluidos_idconc')
					->where('concluidos.solicitacoes_idsol', '=', 'financeiro.concluidos_solicitacoes_idsol')
					->where('concluidos.solicitacoes_status_idstatus', '=', 'financeiro.concluidos_solicitacoes_status_idstatus')
					->where('concluidos.solicitacoes_servicos_idserv', '=', 'financeiro.concluidos_solicitacoes_servicos_idserv')
					->where('concluidos.solicitacoes_servicos_subcategorias_idsubc', '=', 'financeiro.concluidos_solicitacoes_servicos_subcategorias_idsubc')
					->where('concluidos.solicitacoes_servicos_subcategorias_categorias_idcat', '=', 'financeiro.concluidos_categorias_idcat')
					->where('concluidos.solicitacoes_servicos_subcategorias_categorias_clientes_idcli', '=', 'financeiro.concluidos_categorias_clientes_idcli')
					->where('concluidos.solicitacoes_servicos_fornecedores_idfor', '=', 'financeiro.concluidos_solicitacoes_servicos_fornecedores_idfor');
	}
}
