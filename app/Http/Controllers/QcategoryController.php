<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Qcategory;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Validator;

class QcategoryController extends Controller
{
    /**
     * Add Qcategory page
     *
     */
    public function create()
    {
        $catArr  = Qcategory::get('*')
            ->sortBy('name')
            ->toArray();

        $list = [];
        if(!empty($catArr) && is_array($catArr)){
            foreach($catArr as $row){
                $list[$row['id']]['id'] = $row['id'];
                $list[$row['id']]['name'] = $row['name'];
                $list[$row['id']]['status'] = $row['status'] ? 'De-Active':'Active';
            }
        }
        $data['catagories'] = $list;
        return view('qcategory/add', ["data"=>$data]);
    }

    /**
     * Add Qcategory
     *
     */
    public function store(Request $request)
    {
        $rules = [
			'name' => 'required|string|min:2|max:255'
		];

		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('qcategory')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$qcategory = new Qcategory;
				$qcategory->name = $data['name'];
				$qcategory->save();
				return redirect('qcategory')->with('status',"Category insertion successful!");
			}
			catch(Exception $e){
				return redirect('qcategory')->with('failed',"Category insertion failed!");
			}
		}
    }

    /**
     * Edit Qcategory page
     *
     */
    public function edit($id)
    {
        $catArr  = Qcategory::get('*')
            ->sortBy('name')
            ->toArray();

        $list = [];
        if(!empty($catArr) && is_array($catArr)){
            foreach($catArr as $row){
                $list[$row['id']]['id'] = $row['id'];
                $list[$row['id']]['name'] = $row['name'];
                $list[$row['id']]['status'] = $row['status'] ? 'De-Active':'Active';
                if($id == $row['id']) {
                    $name = $row['name'];
                    $status = $row['status'];
                    $checked = $row['status'] ? 'Checked':'';
                }
            }
        }
        $data['catagories'] = $list;
        $data['id'] = $id;
        $data['name'] = $name;
        $data['status'] = $status;
        $data['checked'] = $checked;
        return view('qcategory/edit', ["data"=>$data]);
    }

    /**
     * Update Qcategories
     *
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $rules = [
			'name' => 'required|string|min:3|max:200'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('qcategory')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
            //print_r($data); die();
            $status = 0;
            if(@$data['status'] == 'on') { $status = 1; }
			try{
                $qcategory = Qcategory::find($id);
				$qcategory->name = $data['name'];
                $qcategory->status = $status;
				$qcategory->save();
				return redirect('qcategory')->with('status',"Update successful!");
			}
			catch(Exception $e){
				return redirect('qcategory')->with('failed',"Update failed!");
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
        $record = Qcategory::find($id);       
        if(empty($record)){
            return $this->error('Note! Category not found', 403);
        }        
        try{
            Qcategory::find($id)->delete();
            return redirect('qcategory')->with('status',"Category deletion successful!");
        }
        catch(Exception $e){
            return redirect('qcategory')->with('failed',"Category deletion failed!");
        }
    }

}
