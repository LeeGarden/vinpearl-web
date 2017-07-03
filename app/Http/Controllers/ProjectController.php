<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\MainProject;
use App\Model\Project;
use Auth;
use Carbon\Carbon;
class ProjectController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getList()
    {
        $listProject = Project::select('id','name','updated_at')->get();
        return view('admin.project.list',compact('listProject'));
    }
    public function getDetailEvent(Request $request, $id)
    {

    }

    public function getAdd()
    {
    	return view('admin.project.add');
    }

    public function postAdd(Request $request)
    {
        $project                 = new Project;
        $project->mainproject_id = $request->main_project;
        $project->name           = $request->name;
        $project->slug           = str_slug($request->name);
        $project->description    = $request->description;
        $project->video          = str_replace('watch?v=', 'embed/', $request->link_video);
        $project->overview       = $request->overview;
        $project->payment        = $request->payment;
        $project->construction   = $request->const;
        $project->admin_id       = Auth::guard('admin')->user()->id;

            $des_location = $request->des_location;
            $img_location = $this->uploadImage($request, 'img_location');
        $project->location       = json_encode(array(
            'description' => $des_location,
            'image'         => $img_location,
        ));

            $des_og       = $request->des_og;
            $img_og       = $this->uploadImage($request, 'img_og');
        $project->overall_ground = json_encode(array(
            'description' => $des_og,
            'image'       => $img_og
        ));

            $des_villas   = $request->des_villas;
            $sample1      = $request->sample1;
            $sp_img1      = $this->uploadImage($request, 'sp_img1');
            $sample2      = $request->sample2;
            $sp_img2      = $this->uploadImage($request, 'sp_img2');
            $sample3      = $request->sample3;
            $sp_img3      = $this->uploadImage($request, 'sp_img3');
            $sample4      = $request->sample4;
            $sp_img4      = $this->uploadImage($request, 'sp_img4');
            $sample5      = $request->sample5;
            $sp_img5      = $this->uploadImage($request, 'sp_img5');
        $project->sample_villa = json_encode(array(
            'description' => $des_villas,
            'sample1' => array(
                'title' => $sample1,
                'image' => $sp_img1
            ),
            'sample2' => array(
                'title' => $sample2,
                'image' => $sp_img2
            ),
            'sample3' => array(
                'title' => $sample3,
                'image' => $sp_img3
            ),
            'sample4' => array(
                'title' => $sample4,
                'image' => $sp_img4
            ),
            'sample5' => array(
                'title' => $sample5,
                'image' => $sp_img5
            ),
        ));

            $inve1        = $request->inve1;
            $des_iv1      = $request->des_iv1;
            $inve2        = $request->inve2;
            $des_iv2      = $request->des_iv2;
            $inve3        = $request->inve3;
            $des_iv3      = $request->des_iv4;
            $inve4        = $request->inve4;
            $des_iv4      = $request->des_iv4;
            $inve5        = $request->inve5;
            $des_iv5      = $request->des_iv5;
        $project->investment = json_encode(array(
            'inve1' => array(
                'title' => $inve1,
                'description' => $des_iv1
            ),
            'inve2' => array(
                'title' => $inve2,
                'description' => $des_iv2
            ),
            'inve3' => array(
                'title' => $inve3,
                'description' => $des_iv3
            ),
            'inve4' => array(
                'title' => $inve4,
                'description' => $des_iv4
            ),
            'inve5' => array(
                'title' => $inve5,
                'description' => $des_iv5
            ),
        ));
        $project->save();

        return redirect()->route('admin.project.list')->with(['flash_message'=>'Thêm dự án mới hoàn tất.']);

    }

    public function getEdit($id)
    {
        $project = Project::find($id);
        $project->location         = json_decode($project->location);
        $project->overall_ground   = json_decode($project-> overall_ground);
        $project->sample_villa     = json_decode($project->sample_villa);
        $project->investment       = json_decode($project->investment);
        return view('admin.project.edit',compact('project'));
    }

    public function postEdit(Request $request, $id)
    {
        $project = Project::find($id);
        $project->mainproject_id = $request->main_project;
        $project->name           = $request->name;
        $project->slug           = str_slug($request->name);
        $project->description    = $request->description;
        $project->video          = str_replace('watch?v=', 'embed/', $request->link_video);
        $project->overview       = $request->overview;
        $project->payment        = $request->payment;
        $project->construction   = $request->const;
        $project->admin_id       = Auth::guard('admin')->user()->id;

            $des_location = $request->des_location;
            $img_location = $this->uploadImage($request, 'img_location');
            if($img_location == null)
            {  
                $project->location = json_decode($project->location);
                $img_location = $project->location->image;
            }
        $project->location       = json_encode(array(
            'description' => $des_location,
            'image'         => $img_location,
        ));

            $des_og       = $request->des_og;
            $img_og       = $this->uploadImage($request, 'img_og');
            if($img_og == null)
            {
                $project->overall_ground = json_decode($project->overall_ground);
                $img_og = $project->overall_ground->image;
            }
        $project->overall_ground = json_encode(array(
            'description' => $des_og,
            'image'       => $img_og
        ));

            $project->sample_villa = json_decode($project->sample_villa);
            $des_villas   = $request->des_villas;
            $sample1      = $request->sample1;
            $sp_img1      = $this->uploadImage($request, 'sp_img1');
            if($sp_img1 == null)
            {
                $sp_img1 = $project->sample_villa->sample1->image;
            }
            $sample2      = $request->sample2;
            $sp_img2      = $this->uploadImage($request, 'sp_img2');
            if($sp_img2 == null)
            {
                $sp_img2 = $project->sample_villa->sample2->image;
            }
            $sample3      = $request->sample3;
            $sp_img3      = $this->uploadImage($request, 'sp_img3');
            if($sp_img3 == null)
            {
                $sp_img3 = $project->sample_villa->sample3->image;
            }
            $sample4      = $request->sample4;
            $sp_img4      = $this->uploadImage($request, 'sp_img4');
            if($sp_img4 == null)
            {
                $sp_img4 = $project->sample_villa->sample4->image;
            }
            $sample5      = $request->sample5;
            $sp_img5      = $this->uploadImage($request, 'sp_img5');
            if($sp_img5 == null)
            {
                $sp_img5 = $project->sample_villa->sample5->image;
            }
        $project->sample_villa = json_encode(array(
            'description' => $des_villas,
            'sample1' => array(
                'title' => $sample1,
                'image' => $sp_img1
            ),
            'sample2' => array(
                'title' => $sample2,
                'image' => $sp_img2
            ),
            'sample3' => array(
                'title' => $sample3,
                'image' => $sp_img3
            ),
            'sample4' => array(
                'title' => $sample4,
                'image' => $sp_img4
            ),
            'sample5' => array(
                'title' => $sample5,
                'image' => $sp_img5
            ),
        ));

            $inve1        = $request->inve1;
            $des_iv1      = $request->des_iv1;
            $inve2        = $request->inve2;
            $des_iv2      = $request->des_iv2;
            $inve3        = $request->inve3;
            $des_iv3      = $request->des_iv4;
            $inve4        = $request->inve4;
            $des_iv4      = $request->des_iv4;
            $inve5        = $request->inve5;
            $des_iv5      = $request->des_iv5;
        $project->investment = json_encode(array(
            'inve1' => array(
                'title' => $inve1,
                'description' => $des_iv1
            ),
            'inve2' => array(
                'title' => $inve2,
                'description' => $des_iv2
            ),
            'inve3' => array(
                'title' => $inve3,
                'description' => $des_iv3
            ),
            'inve4' => array(
                'title' => $inve4,
                'description' => $des_iv4
            ),
            'inve5' => array(
                'title' => $inve5,
                'description' => $des_iv5
            ),
        ));
        $project->save();

        return redirect()->route('admin.project.list')->with(['flash_message'=>'Cập nhập thông tin dự án hoàn tất.']);
    }

    public function deleteProject($id)
    {

    }

    public function getMainProject(Request $request)
    {
        $data = MainProject::get();
        if($request->ajax())
        {
            return $data;
        }
    }

    public function postAddMainProject(Request $request)
    {
        if($request->ajax())
        {
            $mp = new MainProject;
            $mp->name = $request->mainproject;
            $mp->save();
            return $mp;
        }
    }

    public function uploadImage($request, $name)
    {
        $picture = "";
        if ($request->hasFile($name)) {
            $files = $request->file($name);
            $filename        = str_slug(date("Y-m-d H-i-s").$files->getClientOriginalName());
            $filetype        = $files->getClientOriginalExtension();
            $picture         = "$filename.$filetype";
            $destinationPath = base_path() . '/public/uploads/images/';
            $files->move($destinationPath, $picture);

            return $picture;
        }
        return null;
    }

    public function delProject($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->route('admin.project.list')->with(['flash_message'=>'Đã xóa thông tin Dự án.']);
    }

}
