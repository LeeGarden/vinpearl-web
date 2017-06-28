<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    protected $fillable = [
    	"fulname", "email", "phone", "message", "status", "admin_id"
    ];
}
