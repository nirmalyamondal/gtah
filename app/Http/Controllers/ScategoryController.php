<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Acategory;
use App\Models\Qcategory;
use App\Models\Scategory;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Validator;

class ScategoryController extends Controller
{
    /**
     * Add Scategory page
     *
     */
    public function create()
    {
        $qcategory = Qcategory::select('id','name')->get()->sortBy('name')->toArray();
        $qcat = []; 
        $qidSlect = '';
        foreach($qcategory as $qa => $qv) {
            $qcat[$qv['id']] = $qv['name'];
            $qidSlect .= '<option value='.$qv['id'].' >'.$qv['name'].'</option>';
        }  

        $acategory = Acategory::select('id','name','qid')->get()->sortBy('name')->toArray(); 
        $acat = []; 
        $aidSlect = '';
        foreach($acategory as $aa => $av) {
            $acat[$av['id']] = $av['name'];
            if($qcategory[0]['id'] == $av['qid']) {                
                $aidSlect .= '<option value='.$av['id'].' >'.$av['name'].'</option>';
            }
        } 
        if($aidSlect == ''){
            $aidSlect = '<option value="0" disabled selected> - Not Available - </option>';  
        }

        $catArr  = Scategory::get('*')->sortBy('name')->toArray();
        $list = [];
        if(!empty($catArr) && is_array($catArr)){
            foreach($catArr as $row){
                $list[$row['id']]['id'] = $row['id'];
                $list[$row['id']]['name'] = $row['name'];
                $list[$row['id']]['qid'] = @$qcat[$row['qid']];
                $list[$row['id']]['aid'] = @$acat[$row['aid']];
                $list[$row['id']]['status'] = $row['status'] ? 'De-Active':'Active';
            }
        }
        $data['catagories'] = $list;
        $data['qidSlect'] = $qidSlect;
        $data['aidSlect'] = $aidSlect;
        return view('scategory/add', ["data"=>$data]);
    }

    /**
     * Add Scategory
     *
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:2|max:255'
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect('scategory')
            ->withInput()
            ->withErrors($validator);
        }
        else{
            $data = $request->input();
            try{
                $scategory = new Scategory;
                $scategory->name = $data['name'];
                $scategory->qid = $data['qid'];
                $scategory->aid = $data['aid'];
                $scategory->save();
                return redirect('scategory')->with('status',"Category insertion successful!");
            }
            catch(Exception $e){
                return redirect('scategory')->with('failed',"Category insertion failed!");
            }
        }
    }

    /**
     * Edit Scategory page
     *
     */
    public function edit($id)
    {
        $catArr  = Scategory::get('*')
            ->sortBy('name')
            ->toArray();

        $catQAid  = Scategory::select('qid','aid')->where('id', $id)->get()->toArray(); 
        $qcategory = Qcategory::select('id','name')->get()->sortBy('name')->toArray(); 
        $qcat = []; 
        $qidSlect = '';
        foreach($qcategory as $qa => $qv) {
            $qcat[$qv['id']] = $qv['name'];
            if ($qv['id'] == $catQAid[0]['qid']) {
                $qidSlect .= '<option value='.$qv['id'].' selected>'.$qv['name'].'</option>';
            } else {
                $qidSlect .= '<option value='.$qv['id'].' >'.$qv['name'].'</option>';
            }
            
        }

        $acategory = Acategory::select('id','name')->get()->sortBy('name')->toArray(); 
        $acat = []; 
        $aidSlect = '';
        foreach($acategory as $aa => $av) {
            $acat[$av['id']] = $av['name'];
            if ($av['id'] == $catQAid[0]['aid']) {
                $aidSlect .= '<option value='.$av['id'].' selected>'.$av['name'].'</option>';
            } else {
                $aidSlect .= '<option value='.$av['id'].' >'.$av['name'].'</option>';
            }
        } 

        $list = [];
        if(!empty($catArr) && is_array($catArr)){
            foreach($catArr as $row){
                $list[$row['id']]['id'] = $row['id'];
                $list[$row['id']]['name'] = $row['name'];
                $list[$row['id']]['qid'] = @$qcat[$row['qid']];
                 $list[$row['id']]['aid'] = @$acat[$row['aid']];
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
        $data['aidSlect'] = $aidSlect;
        return view('scategory/edit', ["data"=>$data]);
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
            return redirect('scategory')
            ->withInput()
            ->withErrors($validator);
        }
        else{
            $data = $request->input();
            $status = 0;
            if(@$data['status'] == 'on') { $status = 1; }
            try{
                $scategory = Scategory::find($id);
                $scategory->name = $data['name'];
                $scategory->qid = $data['qid'];
                $scategory->aid = $data['aid'];
                $scategory->status = $status;
                $scategory->save();
                return redirect('scategory')->with('status',"Update successful!");
            }
            catch(Exception $e){
                return redirect('scategory')->with('failed',"Update failed!");
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
        $record = Scategory::find($id);       
        if(empty($record)){
            return $this->error('Note! Category not found', 403);
        }        
        try{
            Scategory::find($id)->delete();
            return redirect('scategory')->with('status',"Category deletion successful!");
        }
        catch(Exception $e){
            return redirect('scategory')->with('failed',"Category deletion failed!");
        }
    }

    /**
     * Generate aid Options by qid.
     *
     * @param  int  $qid
     * @return string
     */
    public function getAidByQid($qid)
    { 
        $acategories = Acategory::select('id','name')->where('qid', $qid)->get()->toArray();
        try{
            if(!empty($acategories) && is_array($acategories)){
                $optionAcategories = '';
                foreach($acategories as $ack => $acv) {
                  $optionAcategories .= '<option value="'.$acv['id'].'">'.$acv['name'].'</option>';  
                }
                $data['status'] = true;
                $data['data'] = $optionAcategories;
            } else{
                $data['status'] = true;
                $data['data'] = '<option value="0" disabled selected> - Not Available - </option>';  
            }
            
        } catch(Exception $e) {
            $data['status'] = false;
            $data['msg'] = $e->getMessage();
        }
        echo json_encode($data);
        exit;        
    }
}
