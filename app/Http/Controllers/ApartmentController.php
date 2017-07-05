<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Apartment;
use Auth;

class ApartmentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getList()
    {
        $listApartment = Apartment::select('id','name','updated_at')->get();
        return view('admin.apartment.list',compact('listApartment'));
    }

    public function getAdd()
    {
    	return view('admin.apartment.add');
    }

    public function postAdd(Request $request)
    {
        $apartment                 = new Apartment;
        $apartment->name           = $request->name;
        $apartment->slug           = str_slug($request->name);
        $apartment->description    = $request->description;
        $apartment->image          = $this->uploadImage($request, 'image');
        $apartment->video          = str_replace('watch?v=', 'embed/', $request->link_video);
        $apartment->overview       = $request->overview;
        $apartment->payment        = $request->payment;
        $apartment->construction   = $request->const;
        $apartment->admin_id       = Auth::guard('admin')->user()->id;

            $des_location = $request->des_location;
            $img_location = $this->uploadImage($request, 'img_location');
        $apartment->location       = json_encode(array(
            'description' => $des_location,
            'image'         => $img_location,
        ));

            $des_og       = $request->des_og;
            $img_og       = $this->uploadImage($request, 'img_og');
        $apartment->overall_ground = json_encode(array(
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
        $apartment->sample_villa = json_encode(array(
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
        $apartment->investment = json_encode(array(
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
        $apartment->save();

        return redirect()->route('admin.apartment.list')->with(['flash_message'=>'Thêm căn hộ mới hoàn tất.']);

    }

    public function getEdit($id)
    {
        $apartment = Apartment::find($id);
        $apartment->location         = json_decode($apartment->location);
        $apartment->overall_ground   = json_decode($apartment-> overall_ground);
        $apartment->sample_villa     = json_decode($apartment->sample_villa);
        $apartment->investment       = json_decode($apartment->investment);
        return view('admin.apartment.edit',compact('apartment'));
    }

    public function postEdit(Request $request, $id)
    {
        $apartment = Apartment::find($id);
        $apartment->name           = $request->name;
        $apartment->slug           = str_slug($request->name);
        $apartment->description    = $request->description;
        $image = $this->uploadImage($request, 'image');
        if ($image == null) {
            $image = $apartment->image;
        }
        $apartment->image          = $image;
        $apartment->video          = str_replace('watch?v=', 'embed/', $request->link_video);
        $apartment->overview       = $request->overview;
        $apartment->payment        = $request->payment;
        $apartment->construction   = $request->const;
        $apartment->admin_id       = Auth::guard('admin')->user()->id;

            $des_location = $request->des_location;
            $img_location = $this->uploadImage($request, 'img_location');
            if($img_location == null)
            {
                $apartment->location = json_decode($apartment->location);
                $img_location = $apartment->location->image;
            }
        $apartment->location       = json_encode(array(
            'description' => $des_location,
            'image'         => $img_location,
        ));

            $des_og       = $request->des_og;
            $img_og       = $this->uploadImage($request, 'img_og');
            if($img_og == null)
            {
                $apartment->overall_ground = json_decode($apartment->overall_ground);
                $img_og = $apartment->overall_ground->image;
            }
        $apartment->overall_ground = json_encode(array(
            'description' => $des_og,
            'image'       => $img_og
        ));

            $apartment->sample_villa = json_decode($apartment->sample_villa);
            $des_villas   = $request->des_villas;
            $sample1      = $request->sample1;
            $sp_img1      = $this->uploadImage($request, 'sp_img1');
            if($sp_img1 == null)
            {
                $sp_img1 = $apartment->sample_villa->sample1->image;
            }
            $sample2      = $request->sample2;
            $sp_img2      = $this->uploadImage($request, 'sp_img2');
            if($sp_img2 == null)
            {
                $sp_img2 = $apartment->sample_villa->sample2->image;
            }
            $sample3      = $request->sample3;
            $sp_img3      = $this->uploadImage($request, 'sp_img3');
            if($sp_img3 == null)
            {
                $sp_img3 = $apartment->sample_villa->sample3->image;
            }
            $sample4      = $request->sample4;
            $sp_img4      = $this->uploadImage($request, 'sp_img4');
            if($sp_img4 == null)
            {
                $sp_img4 = $apartment->sample_villa->sample4->image;
            }
            $sample5      = $request->sample5;
            $sp_img5      = $this->uploadImage($request, 'sp_img5');
            if($sp_img5 == null)
            {
                $sp_img5 = $apartment->sample_villa->sample5->image;
            }
        $apartment->sample_villa = json_encode(array(
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
        $apartment->investment = json_encode(array(
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
        $apartment->save();

        return redirect()->route('admin.apartment.list')->with(['flash_message'=>'Cập nhập thông tin căn hộ hoàn tất.']);
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

    public function delApartment($id)
    {
        $apartment = Apartment::find($id);
        $apartment->delete();

        return redirect()->route('admin.apartment.list')->with(['flash_message'=>'Đã xóa thông tin Căn hộ.']);
    }
}
