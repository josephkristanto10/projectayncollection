<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $images
 * @property int $price
 * @property int $stock
 * @property int $status_variant
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';

	protected $casts = [
		'price' => 'int',
		'stock' => 'int',
		'status_variant' => 'int'
	];

	protected $fillable = [
		'code',
		'name',
		'images',
		'price',
		'stock',
		'status_variant'
	];
}
