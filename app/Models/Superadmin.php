<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Superadmin
 * 
 * @property int $id
 * @property string $name
 * @property string $user
 * @property string $pass
 *
 * @package App\Models
 */
class Superadmin extends Model
{
	protected $table = 'superadmin';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'user',
		'pass'
	];
}
