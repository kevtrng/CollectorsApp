<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

	protected $connection = 'mongodb';
    protected $collection = 'wishlist';

	protected $fillable = [
		'email',
		'url',
		'name'
	];

}
