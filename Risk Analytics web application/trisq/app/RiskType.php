<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiskType extends Model
{
	//protected $primaryKey = 'code';
    //protected $incrementing = false;
    protected $fillable = ['code', 'name', 'category', 'description', 'calculation_type'];
}
