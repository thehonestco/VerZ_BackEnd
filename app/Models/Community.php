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
		'status'
    ];

	public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User');
    }
}
