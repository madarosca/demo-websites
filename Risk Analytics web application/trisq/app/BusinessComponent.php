<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessComponent extends Model
{
	protected $fillable = ['name', 'category', 'description', 'order_seq'];
}
