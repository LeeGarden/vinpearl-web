<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
    	'image', 'admin_id'
    ];

    public function admin()
    {
    	return $this->belongsTo(Admin::class);
    }
}
