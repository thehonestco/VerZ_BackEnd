<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'splcode',
		'name',
		'license_no',
		'director_name',
		'director_no',
		'pharmacist_id_no',
		'address',
		'niu_no',
		'status'
    ];
	
	public function admins(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User');
    }
}
