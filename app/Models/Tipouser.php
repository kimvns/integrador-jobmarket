<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Nov 2018 21:28:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tipouser
 * 
 * @property int $idtipo
 * @property string $tipouserscol
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Tipouser extends Eloquent
{
	protected $primaryKey = 'idtipo';

	protected $fillable = [
		'tipouserscol'
	];
}
