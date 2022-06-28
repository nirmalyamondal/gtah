<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;

class BannerController extends Controller
{
    function addBanner(Request $req)
    {


        $req->validate([
            'bannerimage' => 'required|mimes:jpeg,jpg,png|max:2048',
            'bannerimagealt' => 'required',
            'imageorder' => 'required',
            'imageorderalt' => 'required',
            'imageright' => 'required',
            'imagerightal' => 'required'
        ]);


        $banner = new banner;

        $banner->bannerimage = $req->bannerimage->store('bannerimage');
        $banner->bannerimagealt = $req->bannerimagealt;

        $banner->imageorder = $req->imageorder->store('imageorder');
        $banner->imageorderalt = $req->imageorderalt;

        $banner->imageright = $req->imageright->store('imageright');
        $banner->imagerightal = $req->imagerightal;

        $banner->status = $req->status;
        $banner->save();

        return redirect('/banners')->with('message','Banner Data Inserted Successfully');
    }

    function show()
    {
        $data = Banner::all();
        return view('banner', compact('data'));
    }

    function delete($id)
    {
        $data = Banner::find($id);
        $data->delete();
        return redirect('banners')->with('message','Banner Data Deleted Successfully');
    }

}
