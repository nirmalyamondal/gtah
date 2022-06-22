<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Expert;
use App\Models\Testimonial;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Validator;

class ExpertController extends Controller
{
    /**
     * Add Expert page
     *
     */
    public function create()
    {
        $data = [];       
        $data['testimonials'] = $this->unAssignedTestimonial();
        return view('expert/add', ["data"=>$data]);
    }

    
    /**
     * Add Expert
     *
     */
    public function store(Request $request)
    {

        $rules = [
			'name' => 'required|min:2|max:255',
			'subject' => 'required|min:2|max:255',
			'rating' => 'required|integer',
            'orderfinish' => 'required',
            'orderprogress' => 'required',
            'country' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:1024',
            'imagealt' => 'required',
            'qualification' => 'required',
		];
       
		$validator = Validator::make($request->all(),$rules);
        $data = $request->input();
		if ($validator->fails()) {
			return redirect('experts')
			->withInput()
			->withErrors($validator);
		}
		else{ 
			try{
                $uploadFolder = 'images/expert';
                $profile_image_name = '';
                if($image = $request->file('image')){
                    $image_uploaded_path = $image->store($uploadFolder, 'public');
                    $profile_image_name = basename($image_uploaded_path);
                }
                
				$expert = new Expert;
                $expert->name = $data['name'];
                $expert->subject = $data['subject'];
				$expert->rating = $data['rating'];
                $expert->orderfinish = $data['orderfinish'];
                $expert->orderprogress = $data['orderprogress'];
				$expert->country = $data['country'];
                $expert->description = $data['description'];
                $expert->image = $profile_image_name;
				$expert->imagealt = $data['imagealt'];
                $expert->qualification = $data['qualification'];
				$expert->save();
                $testimonialIds = $data['to'];
                $expertId = $expert->id;
                $this->updateTestimonial($expertId,$testimonialIds);
				return redirect('experts')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('experts')->with('failed',"operation failed");
			}
		}
    }

    /**
     * Show Experts
     *
     */
    public function show(Request $request)
    {
        $data['experts'] = Expert::all()->toArray();        
        return view('expert/show', ["data"=>$data]);
    }

    /**
     * Edit expert page
     *
     */
    public function edit($id)
    {
        $record  = Expert::where('id', $id)
            ->get('*')
            ->toArray();

        if(isset($record[0])){
            $data   = $record[0];
        }
        $data['id']   = $id;
        $data['testimonials'] = $this->unAssignedTestimonial();
        $data['testimonials_to'] = $this->myTestimonial($id);        
        return view('expert/edit', ["data"=>$data]);
    }

    /**
     * Add Expert
     *
     */
    public function update(Request $request, $id)
    {
        $rules = [
			'name' => 'required|min:2|max:255',
			'subject' => 'required|min:2|max:255',
			'rating' => 'required|integer',
            'orderfinish' => 'required',
            'orderprogress' => 'required',
            'country' => 'required',
            'description' => 'required',
            'imagealt' => 'required',
            'qualification' => 'required',
		];
       
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('experts')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
                $uploadFolder = 'images/expert';
                $profile_image_name = '';
                if($image = $request->file('image')){
                    $image_uploaded_path = $image->store($uploadFolder, 'public');
                    $profile_image_name = basename($image_uploaded_path);
                }

                $expert = Expert::find($id);
                $expert->name = $data['name'];
                $expert->subject = $data['subject'];
				$expert->rating = $data['rating'];
                $expert->orderfinish = $data['orderfinish'];
                $expert->orderprogress = $data['orderprogress'];
				$expert->country = $data['country'];
                $expert->description = $data['description'];
                if($image = $request->file('image')){
                    $expert->image = $profile_image_name;
                }
				$expert->imagealt = $data['imagealt'];
                $expert->qualification = $data['qualification'];
				$expert->save();
                $testimonialIds = $data['to'];
                $expertId = $id;
                $this->updateTestimonial($expertId, $testimonialIds);
				return redirect('experts')->with('status',"Updated successfully");
			}
			catch(Exception $e){
				return redirect('experts')->with('failed',"operation failed");
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
        $record = Expert::find($id);
       
        if(empty($record)){
            return $this->error('Note! Expert not found', 403);
        }
        
        try{
            Expert::find($id)->delete();
            return redirect('experts')->with('status',"Expert deleted successfully");
        }
        catch(Exception $e){
            return redirect('experts')->with('failed',"operation failed");
        }
    }

    /**
     * Update the specified resources inside storage.
     *
     * @param  int  $expertId
     * @param  array  $testimonialIds
     * @return null
     */
    public function updateTestimonial($expertId, $testimonialIds)
    {
        if(!$expertId || !is_array($testimonialIds)){ return false; }
        //Reset existing testimonials for this Expert
        //We don't require this to Add but to Update
        DB::table('testimonials')
            ->where('owner', $expertId)
            ->update(['owner' => 0]);
        //Update new testimonials for this Expert
        DB::table('testimonials')
            ->whereIn('id', $testimonialIds)
            ->update(['owner' => $expertId]);
    }

    /**
     * Generate Options for un-assigned Testimonials.
     *
     * @return string
     */
    public function unAssignedTestimonial()
    {
        $testimonial = Testimonial::all()->sortBy('id')->toArray();    
        $optionTestimonial = '';
        foreach($testimonial as $testimonik => $testimoniv) {
            if($testimoniv['owner'] == '') {
              $optValue = mb_strimwidth('['.$testimoniv['id'].']'.$testimoniv['author'].':'.$testimoniv['description'], 0, 59, '...');
              $optionTestimonial .= '<option value="'.$testimoniv['id'].'">'.$optValue.'</option>';  
          }            
        }
        return $optionTestimonial;
    }

    /**
     * Generate Options for assigned Testimonials.
     *
     * @param  int  $expertId
     * @return string
     */
    public function myTestimonial($expertId)
    { 
        $testimonial = Testimonial::where('owner', '=', $expertId)->get()->toArray();
        $optionTestimonial = '';
        foreach($testimonial as $testimonik => $testimoniv) {
          $optValue = mb_strimwidth('['.$testimoniv['id'].']'.$testimoniv['author'].':'.$testimoniv['description'], 0, 59, '...');
          $optionTestimonial .= '<option value="'.$testimoniv['id'].'">'.$optValue.'</option>';  
        }
        return $optionTestimonial;
    }

}
