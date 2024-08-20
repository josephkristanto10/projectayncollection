<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeSetting
 * 
 * @property int $id
 * @property string $background_pertama
 * @property string $background_kedua
 * @property string $background_ketiga
 * @property string $background_keempat
 *
 * @package App\Models
 */
class HomeSetting extends Model
{
	protected $table = 'home_settings';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'background_pertama',
		'background_kedua',
		'background_ketiga',
		'background_keempat'
	];
}
