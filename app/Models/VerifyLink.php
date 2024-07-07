<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VerifyLink
 * 
 * @property int $id
 * @property string $code
 * @property Carbon $duration_link
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class VerifyLink extends Model
{
	protected $table = 'verify_link';

	protected $casts = [
		'duration_link' => 'datetime'
	];

	protected $fillable = [
		'code',
		'duration_link'
	];
}
