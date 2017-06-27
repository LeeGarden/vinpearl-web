<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $curDate = '';


    public function __construct()
    {
        // $this->middleware('auth');

        $curDate = date('Y-m-d');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function get4EventComing($curDate)
    {
        $event =  Event::whereDate('date_begin', '>=', $curDate)->orderBy('date_begin', 'ASC')->take(4)->get()->toArray();
        return $event;
    }

    public function getAllEventComing($curDate)
    {
        $event =  Event::whereDate('date_begin', '>=', $curDate)->orderBy('date_begin', 'ASC')->get()->toArray();
        return $event;
    }

    public function get3EventEnded($curDate)
    {
        $event =  Event::whereDate('date_begin', '<=', $curDate)->orderBy('date_begin', 'DESC')->get()->toArray();
        return $event;
    }

    public function postAddContact(Request $request)
    {

    }

    public function postAddRegisterSale(Request $request)
    {

    }
}
