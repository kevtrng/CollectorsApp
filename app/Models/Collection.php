<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Collection extends Eloquent
{
    protected $fillable = [
        'collectionName',
        'userEmail',
    ];

    protected $items = ['name', 'model', 'prodyear', 'acqdate', 'price', 'condition', 'picUrl', 'description'];

    use HasFactory;


}
