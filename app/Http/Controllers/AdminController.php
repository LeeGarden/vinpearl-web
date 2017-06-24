<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Role;
use App\Model\Admin;
use Auth;
use Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

        $listrole = Role::get();
        view()->share(['listrole'=>$listrole]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getListRole()
    {
        $listrole = Role::get();
        
        return view('admin.role.list');
    }

    public function getAddRole()
    {
        
    }

    public function postAddRole(Request $request)
    {
        
    }

    public function getEditRole($id)
    {
        
    }

    public function postEditRole(Request $request, $id)     
    {

    }

    public function getListAdmin()
    {
        $listAdmin = Admin::get();
        foreach ($listAdmin as $key => $value) {
            $role[$key] = Role::find($value['role_id'])->roles;
        }
        return view('admin.admin.list', compact('listAdmin','role'));
    }

    public function getAddAdmin()
    {

        return view('admin.admin.add');
    }

    public function postAddAdmin(Request $request)
    {
        $admin = new Admin;
        $admin->name     = $request->name;
        $admin->username = $request->username;
        $admin->email    = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->role_id  = $request->role_id;
        $admin->save();
        return redirect()->route('admin.admin.list')->with(['flash_message'=>'Add new Admin successfull']);
    }

    public function getEditAdmin($id)
    {
        
    }

    public function postEditAdmin(Request $request, $id)     
    {

    }

    public function getDelAdmin($id)
    {
        
    }

    public function getChangePassword()
    {
        return view('admin.passwords.change');
    }

    public function postChangePassword(Request $request)
    {
        $oldpass = $request->oldpass;
        $newpass = $request->newpass;
        $confirm = $request->confirm;

        $admin = Auth::guard('admin')->user();
        if(Hash::check($oldpass,$admin['password']))
        {
            $this->validate($request,
            [ 'newpass' => 'different:oldpass',
              'confirm' => 'same:newpass',

            ],
            [
                'newpass.different' => 'Mật khẩu mới và cũ không được trùng',
                'confirm.same' => 'Xác nhận mật khẩu không đúng',
            ]);

            $admin['password'] = bcrypt($newpass);
        }
        else
        {
            return redirect()->back()->with(['err_message'=>'Your password was incorrect']);
        }
        $admin->save();

        return redirect()->route('admin.getProfile')->with(['flash_message'=>'Update password success.']);
    }
    public function getProfileInfo()
    {
        $role = Role::find(Auth::user()->role_id)->roles;
        return view('admin.admin.profile', compact('role'));
    }

    public function postUpdateInfo(Request $request)
    {
        $admin = Admin::find(Auth::user()->id);
        $admin->name    = $request->name;
        $admin->phone   = $request->phone;
        $admin->address = $request->address;
        $admin->gender  = $request->gender;
        if ($request->hasFile('image')) {                 
            $files = $request->file('image');
            $filename        = str_slug(date("Y-m-d H-i-s").$files->getClientOriginalName());
            $filetype        = $files->getClientOriginalExtension();
            $picture         = "$filename.$filetype";
            $destinationPath = base_path() . '/public/uploads/images/';
            $files->move($destinationPath, $picture);   
            $admin->image = $picture; // cắt xong lưu csdl
        }
        $admin->save();

        return redirect()->route('admin.getProfile')->with(['flash_message'=>'Update info success.']);
    }
}
