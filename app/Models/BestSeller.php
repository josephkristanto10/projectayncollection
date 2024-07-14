<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BestSeller
 * 
 * @property int $id
 * @property int $id_product
 * @property int $kolom
 *
 * @package App\Models
 */
class BestSeller extends Model
{
	protected $table = 'best_seller';
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
