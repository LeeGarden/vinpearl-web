<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use Auth;
use Carbon\Carbon;
class EventController extends Controller
{
    function __construct()
    {

    }

    public function getList()
    {
    	$listEvent = Event::get();
        return view('admin.event.list',compact('listEvent'));
    }

    public function getAdd()
    {
    	return view('admin.event.add');
    }

    public function postAdd(Request $request)
    {
    	$event = new Event;
        $event->title      = $request->title;
        $event->slug       = str_slug($request->title);
        $event->content    = $request->content;
        $event->date_begin = date('Y-m-d',strtotime($request->date_begin));
        $event->time_begin = $request->time_begin;
        $event->admin_id   = Auth::guard('admin')->user()->id;
        $event->save();

        return redirect()->route('admin.event.list')->with(['flash_message'=>'Thêm mới Sự kiện hoàn tất']);
    }

    public function getEdit($id)
    {
        $event             = Event::find($id);
        $event->date_begin = date('d-m-Y',strtotime($event->date_begin));
        return view('admin.event.edit',compact('event'));
    }

    public function postEdit(Request $request, $id)
    {
    	$event = Event::find($id);
        $event->title      = $request->title;
        $event->slug       = str_slug($request->title);
        $event->content    = $request->content;
        $event->date_begin = date('Y-m-d',strtotime($request->date_begin));
        $event->time_begin = $request->time_begin;
        $event->admin_id   = Auth::guard('admin')->user()->id;
        $event->save();

        return redirect()->route('admin.event.list')->with(['flash_message'=>'Cập nhập sự kiện hoàn tất.']);
    }

    public function getDelete($id)
    {
    	$event = Event::find($id);
        if($event->delete())
        {
            return redirect()->route('admin.event.list')->with(['flash_message'=>'Xóa sự kiện hoàn tất.']);
        }
    }


}
