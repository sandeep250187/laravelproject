<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientImage extends Model
{
    //
	protected $fillable = [
        'client_name',
        'client_image_logo'
    ];
}
