<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    function __construct()
    {
    	
    }

    public function getList()
    {
    	
    }
    
    public function getAdd()
    {
    	return view('admin.event.add');
    }

    public function postAdd(Request $request)
    {
    	
    }

    public function getEdit()
    {
    	
    }

    public function postEdit(Request $request, $id)
    {
    	
    }

    public function getDelete($id)
    {
    	
    }

}
