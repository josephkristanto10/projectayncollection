<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WeekArrival
 * 
 * @property int $id
 * @property int $id_product
 * @property int $kolom
 *
 * @package App\Models
 */
class WeekArrival extends Model
{
	protected $table = 'week_arrival';
	public $timestamps = false;

	protected $casts = [
		'id_product' => 'int',
		'kolom' => 'int'
	];

	protected $fillable = [
		'id_product',
		'kolom'
	];
}
