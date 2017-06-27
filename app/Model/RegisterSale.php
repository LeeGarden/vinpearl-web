<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RegisterSale extends Model
{
    protected $fillable = [
    	"fulname", "email", "phone", "message", "date_sale", "status", "admin_id"
    ];
}
