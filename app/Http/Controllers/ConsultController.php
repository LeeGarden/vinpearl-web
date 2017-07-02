<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Consult;

class ConsultController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');

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
    	$consult = Consult::where('id',$id)->first();
        dd($consult);

   		if ($consult->status != 1)
   		{
   			$consult->status = 1;
   		}
   		$consult->save();

      if($request->ajax())
      {
        return $consult;
      }

      return view('admin.consult.detail', compact('consult'));
    }
}
