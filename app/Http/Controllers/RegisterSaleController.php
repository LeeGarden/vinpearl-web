<?php

namespace App\Http\Controllers;

use App\Model\RegisterSale;
use Illuminate\Http\Request;


class RegisterSaleController extends Controller
{
    public function __construct()
    {
    	$listRegSale = $this->getAllRegisterSale();

        view()->share([
            'listRegSale' => $listRegSale,
        ]);
    }

    public function getAllRegisterSale()
    {
        $listRegSale = RegisterSale::get();
        return $listRegSale;
    }

    public function getListRegSale()
    {
    	return view('admin.regsale.list');
    }

    public function getDetailRegSale($id)
    {
    	$regSale = RegisterSale::find($id);
   		if ($regSale->status != 1)
   		{
   			$regSale->status = 1;
   		}
   		$regSale->save();

   		return view('admin.regSale.detail');
    }
}
