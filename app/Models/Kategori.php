<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
	use HasFactory;

	protected $table = 'kategori';
	protected $guarded = [];
	public function cucian(): HasMany
	{
		 return $this->hasMany(Cucian::class, 'kategori_id');
	}
}
