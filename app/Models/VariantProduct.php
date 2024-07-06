<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VariantProduct
 * 
 * @property int $id
 * @property int $id_product
 * @property string $variant_images
 * @property string $variant_name
 * @property int $variant_stock
 * @property int $variant_status
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class VariantProduct extends Model
{
	protected $table = 'variant_product';

	protected $casts = [
		'id_product' => 'int',
		'variant_stock' => 'int',
		'variant_status' => 'int'
	];

	protected $fillable = [
		'id_product',
		'variant_images',
		'variant_name',
		'variant_stock',
		'variant_status'
	];
}
