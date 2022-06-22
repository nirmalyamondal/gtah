<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\Country;
use App\Models\Category;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Validator;

class TestimonialController extends Controller
{
    /**
     * Add Testimonial page
     *
     */
    public function create()
    {
        $data['countries'] = Country::get(['id', 'name']);
        $data['categories'] = Category::all(['id', 'slug'])->where('parent', 0);
        return view('testimonial/add', ["data"=>$data]);
    }

    
    /**
     * Add Testimonial
     *
     */
    public function store(Request $request)
    {
        $rules = [
			'author' => 'required|min:2|max:255',
			'country' => 'required|integer',
			'category' => 'required|integer',
            'description' => 'required',
            'gender' => 'required',
            'stream' => 'required',
            'status' => 'required',
            'rating' => 'required'
		];
       
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('testimonials')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
                $uploadFolder = 'images/testimonial';
                $profile_image_name = '';
                if($image = $request->file('image')){
                    $image_uploaded_path = $image->store($uploadFolder, 'public');
                    $profile_image_name = basename($image_uploaded_path);
                }

				$dataObj = new Testimonial;
                $dataObj->author = $data['author'];
                $dataObj->country = $data['country'];
				$dataObj->category = $data['category'];
                $dataObj->sub_category = isset($data['sub_category']) ? $data['sub_category'] : 0;
                $dataObj->description = $data['description'];
				$dataObj->gender = $data['gender'];
                $dataObj->image = $profile_image_name;
                $dataObj->image_alt = $data['image_alt'];
				$dataObj->stream = $data['stream'];
                $dataObj->status = $data['status'];
                $dataObj->rating = $data['rating'];
				$dataObj->save();
				return redirect('testimonials')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('testimonials')->with('failed',"operation failed");
			}
		}
    }

    /**
     * Show Testimonials
     *
     */
    public function show(Request $request)
    {
        $data['testimonials'] = Testimonial::all()->toArray();
        return view('testimonial/show', ["data"=>$data]);
    }

    /**
     * Edit Testimonial page
     *
     */
    public function edit($id)
    {
        $record  = Testimonial::where('id', $id)
            ->get('*')
            ->toArray();

        if(isset($record[0])){
            $data   = $record[0];
        }
        $data['id']   = $id;
        $data['countries'] = Country::get(['id', 'name']);
        $data['categories'] = Category::all(['id', 'slug'])->where('parent', 0);

        return view('testimonial/edit', ["data"=>$data]);
    }

    /**
     * Update Testimonial
     *
     */
    public function update(Request $request, $id)
    {
        $rules = [
			'author' => 'required|min:2|max:255',
			'country' => 'required|integer',
			'category' => 'required|integer',
            'description' => 'required',
            'gender' => 'required',
            'stream' => 'required',
            'status' => 'required',
            'rating' => 'required'
		];
       
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('testimonials')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
                $uploadFolder = 'images/testimonial';
                $profile_image_name = '';
                if($image = $request->file('image')){
                    $image_uploaded_path = $image->store($uploadFolder, 'public');
                    $profile_image_name = basename($image_uploaded_path);
                }

                $dataObj = Testimonial::find($id);
                $dataObj->author = $data['author'];
                $dataObj->country = $data['country'];
				$dataObj->category = $data['category'];
                $dataObj->sub_category = isset($data['sub_category']) ? $data['sub_category'] : 0;
                $dataObj->description = $data['description'];
				$dataObj->gender = $data['gender'];
                if($image = $request->file('image')){
                    $dataObj->image = $profile_image_name;
                }
                $dataObj->image_alt = $data['image_alt'];
				$dataObj->stream = $data['stream'];
                $dataObj->status = $data['status'];
                $dataObj->rating = $data['rating'];
				$dataObj->save();
				return redirect('testimonials')->with('status',"Updated successfully");
			}
			catch(Exception $e){
				return redirect('testimonials')->with('failed',"operation failed");
			}
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Testimonial::find($id);
       
        if(empty($record)){
            return $this->error('Note! Testimonial not found', 403);
        }
        
        try{
            Testimonial::find($id)->delete();
            return redirect('testimonials')->with('status',"Testimonial deleted successfully");
        }
        catch(Exception $e){
            return redirect('testimonials')->with('failed',"operation failed");
        }
    }
}
