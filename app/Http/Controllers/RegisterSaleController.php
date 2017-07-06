<?php

namespace App\Http\Controllers;

use App\Model\RegisterSale;
use Illuminate\Http\Request;


class RegisterSaleController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
      
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

    public function getDetailRegSale(Request $request, $id)
    {
    	$regSale = RegisterSale::where('id',$id)->first();
   		if ($regSale->status == 0)
   		{
   			$regSale->status = 1;
   		}
   		$regSale->save();

      if($request->ajax())
      {
        return $regSale;
      }

   		return view('admin.regsale.detail',compact('regSale'));
    }
}
