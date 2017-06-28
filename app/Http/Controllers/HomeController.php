<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Consult;
use App\Model\RegisterSale;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        // $this->middleware('auth');

        $eventComing = $this->get4EventComing();
        view()->share(['eventComing' =>$eventComing]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.master');
    }

    public function get4EventComing()
    {
        $curDate = date('Y-m-d');
        $event =  Event::whereDate('date_begin', '>=', $curDate)->orderBy('date_begin', 'ASC')->take(4)->get()->toArray();
        return $event;
    }

    public function getAllEventComing()
    {
        $curDate = date('Y-m-d');
        $event =  Event::whereDate('date_begin', '>=', $curDate)->orderBy('date_begin', 'ASC')->get()->toArray();
        return $event;
    }

    public function get3EventEnded()
    {
        $curDate = date('Y-m-d');
        $event =  Event::whereDate('date_begin', '<=', $curDate)->orderBy('date_begin', 'DESC')->get()->toArray();
        return $event;
    }

    public function postAddConsult(Request $request)
    {
        
        if($request->ajax())
        {
            $consult = new Consult;
            $consult->fulname = $request->fulname;
            $consult->email   = $request->email;
            $consult->phone   = $request->phone;
            $consult->message = $request->message;
            $consult->status  = 0;
            $consult->save();
            return 'ok';
        }
    }

    public function postAddRegisterSale(Request $request)
    {
        $regSale = new RegisterSale;
        $regSale->fulname   = $request->fulname;
        $regSale->email     = $request->email;
        $regSale->phone     = $request->phone;
        $regSale->message   = $request->message;
        $regSale->date_sale = $request->date_sale;
        $regSale->status    = 0;
        $regSale->save();
        return 'ok';
    }
}
