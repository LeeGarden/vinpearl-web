<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Gallery;
use Auth;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getListGallery()
    {   
        $listImage = Gallery::get();
    	return view('admin.gallery.list',compact('listImage'));
    }


    public function postAddImage(Request $request)
    {
        $gallery = new Gallery;
        $gallery->admin_id = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {                 
            $files = $request->file('image');
            $filename        = str_slug(date("Y-m-d H-i-s").$files->getClientOriginalName());
            $filetype        = $files->getClientOriginalExtension();
            $picture         = "$filename.$filetype";
            $destinationPath = base_path() . '/public/uploads/images/';
            $files->move($destinationPath, $picture);   
            $gallery->image = $picture; // cắt xong lưu csdl
        }
        $gallery->save();

        return redirect()->route('admin.gallery.list')->with(['flash'=>'Đã thêm ảnh vào bộ sưu tập.']);
    }

    public function postEditImage(Request $request,$id)
    {
        $gallery = Gallery::find($id);
        $gallery->admin_id = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {                 
            $files = $request->file('image');
            $filename        = str_slug(date("Y-m-d H-i-s").$files->getClientOriginalName());
            $filetype        = $files->getClientOriginalExtension();
            $picture         = "$filename.$filetype";
            $destinationPath = base_path() . '/public/uploads/images/';
            $files->move($destinationPath, $picture);   
            $gallery->image = $picture; // cắt xong lưu csdl
        }
        else
        {
            return redirect()->route('admin.gallery.list')->with(['flash_message'=>'Cập nhập ảnh bị lỗi. Vui lòng thử lại.']);
        }
        $gallery->save();

        return redirect()->route('admin.gallery.list')->with(['flash_message'=>'Cập nhập ảnh hoàn tất.']);
    }

    public function delImage(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect()->route('admin.gallery.list')->with(['flash_message'=>'Đã xóa ảnh khỏi bộ sưu tập']);
    }
}
