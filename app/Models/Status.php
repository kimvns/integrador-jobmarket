<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Status
 * 
 * @property int $idstatus
 * @property string $tipostatus
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $solicitacos
 *
 * @package App\Models
 */
class Status extends Eloquent
{
	protected $table = 'status';
	protected $primaryKey = 'idstatus';

	protected $fillable = [
		'tipostatus'
	];

	public function solicitacos()
	{
		return $this->hasMany(\App\Models\Solicitaco::class, 'status_idstatus');
	}
}
