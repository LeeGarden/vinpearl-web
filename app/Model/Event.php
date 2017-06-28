<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	"title", "slug", "content", "date_begin", "time_begin", "admin_id"
    ];

}
