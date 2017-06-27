<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Consult;

class ConsultController extends Controller
{
    public function __construct()
    {
    	$listConsult = $this->getAllConsult();

        view()->share([
            'listConsult' => $listConsult,
        ]);

    }

    public function getAllConsult()
    {
        $listConsult = Consult::get();
        return $listConsult;
    }

    public function getListConsult()
    {
    	return view('admin.consult.list');
    }

    public function getDetailConsult(Request $request, $id)
    {
    	$consult = Consult::find($id)->first();
   		if ($consult->status != 1)
   		{
   			$consult->status = 1;
   		}
   		$consult->save();

      if($request->ajax())
      {
        return $consult;
      }

      return 'return data on view :))';   		
    }
}
