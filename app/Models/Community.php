<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

	protected $table = "communities";

    protected $fillable = [
        'splcode',
		'type',
		'name',
		'nickname',
		'status',
        'admin_id'
    ];

	public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function admin()
    {
        return $this->belongsTo(User::class ,'admin_id','id');
    }
}
