<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WhatsTrending
 * 
 * @property int $id
 * @property int $id_product
 * @property int $kolom
 *
 * @package App\Models
 */
class WhatsTrending extends Model
{
	protected $table = 'whats_trending';
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
