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
 * @property int $id_category
 * @property string $code
 * @property string $name
 * @property string $images
 * @property int $price
 * @property int $stock
 * @property string $descriptions
 * @property int $status_product
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';

	protected $casts = [
		'id_category' => 'int',
		'price' => 'int',
		'stock' => 'int',
		'status_product' => 'int'
	];

	protected $fillable = [
		'id_category',
		'code',
		'name',
		'images',
		'price',
		'stock',
		'descriptions',
		'status_product'
	];
}
