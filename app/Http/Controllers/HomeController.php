<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Consult;
use App\Model\RegisterSale;
use App\Model\Project;
use App\Model\MainProject;
use App\Model\Gallery;
use App\Model\Apartment;

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
        $menuNoChild    = $this->loadMenuNoChild();
        $menuParent     = $this->loadMenuParent();
        $imageSlide     = $this->loadImageSlide();
        $listApartment   = $this->loadAllApartment();
        $listAllProject = $this->getAllProject();
        $list4Project   = $this->get4Project();
        $first = $list4Project->shift();

        view()->share([
            'menuNoChild'    => $menuNoChild,
            'menuParent'     => $menuParent,
            'imageSlide'     => $imageSlide,
            'listAllProject' => $listAllProject,
            'listApartment'  => $listApartment,
            'first'          => $first,
            'list4Project'   => $list4Project,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index');
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

    public function postAddRegSale(Request $request)
    {
        if($request->ajax())
        {
            $regSale = new RegisterSale;
            $regSale->fulname   = $request->fulname;
            $regSale->email     = $request->email;
            $regSale->phone     = $request->phone;
            $regSale->message   = $request->message;
            $date = $request->date;
            $time = $request->time;
            $regSale->date_sale = date('Y-m-d H-i-s',strtotime("$date $time"));
            $regSale->status    = 0;
            $regSale->save();
            return 'ok';
        }
        return 'ok';
    }

    public function getDetailProject($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $project->location = json_decode($project->location);
        $project->overall_ground = json_decode($project->overall_ground);
        $project->sample_villa  = json_decode($project->sample_villa);
        $project->investment  = json_decode($project->investment);

        return view('client.detail',compact('project'));
    }
    public function loadMenuNoChild()
    {
        $menuNoChild = Project::select('slug','name')
                        ->whereNull('mainproject_id')
                        ->get()->toArray();

        return ($menuNoChild);
    }
    public static function loadMenuOfParent($mainproject_id)
    {
        $menuOfParent = Project::select('slug','name','mainproject_id')
                        ->where('mainproject_id',$mainproject_id)
                        ->get()->toArray();

        return ($menuOfParent);
    }
    public function loadMenuParent()
    {
        $data = MainProject::get()->toArray();
        $menuParent = [];
        foreach ($data as $key => $value) {
            $child = Project::where('mainproject_id',$value['id'])->get()->toArray();
            if(count($child) > 0)
            {
                array_push($menuParent,$value);
            }
        }
        return $menuParent;

    }
    public function getAllProject()
    {
        $list = Project::get();
        return $list;
    }
    public function get4Project()
    {
        $list4Project = Project::orderBy('updated_at', 'desc')->take(4)->get();
        return $list4Project;
    }
    public function loadImageSlide()
    {
        $imageSlide =  Gallery::get();
        return $imageSlide;
    }
    public function loadAllApartment()
    {
        $listApartment = Apartment::get();
        return $listApartment;
    }
    public function getDetailApartment($slug)
    {
        $apartment =  Apartment::where('slug', $slug)->first();
        $apartment->location = json_decode($apartment->location);
        $apartment->overall_ground = json_decode($apartment->overall_ground);
        $apartment->sample_villa  = json_decode($apartment->sample_villa);
        $apartment->investment  = json_decode($apartment->investment);

        return view('client.apartment',compact('apartment'));
    }
}
