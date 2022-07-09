<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Acategory;
use App\Models\Qcategory;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Validator;

class AcategoryController extends Controller
{
    /**
     * Add Acategory page
     *
     */
    public function create()
    {
        $catArr  = Acategory::get('*')
            ->sortBy('name')
            ->toArray();
        $qcategory = Qcategory::select('id','name')->get()->sortBy('name')->toArray(); 
        $qcat = []; 
        $qidSlect = '';
        foreach($qcategory as $qa => $qv) {
            $qcat[$qv['id']] = $qv['name'];
            $qidSlect .= '<option value='.$qv['id'].' >'.$qv['name'].'</option>';
        }  
        $list = [];
        if(!empty($catArr) && is_array($catArr)){
            foreach($catArr as $row){
                $list[$row['id']]['id'] = $row['id'];
                $list[$row['id']]['name'] = $row['name'];
                $list[$row['id']]['qid'] = @$qcat[$row['qid']];
                $list[$row['id']]['status'] = $row['status'] ? 'De-Active':'Active';
            }
        }
        $data['catagories'] = $list;
        $data['qidSlect'] = $qidSlect;
        return view('acategory/add', ["data"=>$data]);
    }

    /**
     * Add Acategory
     *
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:2|max:255'
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect('acategory')
            ->withInput()
            ->withErrors($validator);
        }
        else{
            $data = $request->input();
            try{
                $acategory = new Acategory;
                $acategory->name = $data['name'];
                $acategory->qid = $data['qid'];
                $acategory->save();
                return redirect('acategory')->with('status',"Category insertion successful!");
            }
            catch(Exception $e){
                return redirect('acategory')->with('failed',"Category insertion failed!");
            }
        }
    }

    /**
     * Edit Acategory page
     *
     */
    public function edit($id)
    {
        $catArr  = Acategory::get('*')
            ->sortBy('name')
            ->toArray();
        $catQid  = Acategory::select('qid')->where('id', $id)->get()->toArray(); 
        $qcategory = Qcategory::select('id','name')->get()->sortBy('name')->toArray(); 
        $qcat = []; 
        $qidSlect = '';
        foreach($qcategory as $qa => $qv) {
            $qcat[$qv['id']] = $qv['name'];
            if ($qv['id'] == $catQid[0]['qid']) {
                $qidSlect .= '<option value='.$qv['id'].' selected>'.$qv['name'].'</option>';
            } else {
                $qidSlect .= '<option value='.$qv['id'].' >'.$qv['name'].'</option>';
            }
            
        }
        $list = [];
        if(!empty($catArr) && is_array($catArr)){
            foreach($catArr as $row){
                $list[$row['id']]['id'] = $row['id'];
                $list[$row['id']]['name'] = $row['name'];
                $list[$row['id']]['qid'] = @$qcat[$row['qid']];
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
        $data['qidSlect'] = $qidSlect;
        return view('acategory/edit', ["data"=>$data]);
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
            return redirect('acategory')
            ->withInput()
            ->withErrors($validator);
        }
        else{
            $data = $request->input();
            $status = 0;
            if(@$data['status'] == 'on') { $status = 1; }
            try{
                $acategory = Acategory::find($id);
                $acategory->name = $data['name'];
                $acategory->qid = $data['qid'];
                $acategory->status = $status;
                $acategory->save();
                return redirect('acategory')->with('status',"Update successful!");
            }
            catch(Exception $e){
                return redirect('acategory')->with('failed',"Update failed!");
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
        $record = Acategory::find($id);       
        if(empty($record)){
            return $this->error('Note! Category not found', 403);
        }        
        try{
            Acategory::find($id)->delete();
            return redirect('acategory')->with('status',"Category deletion successful!");
        }
        catch(Exception $e){
            return redirect('acategory')->with('failed',"Category deletion failed!");
        }
    }

}
