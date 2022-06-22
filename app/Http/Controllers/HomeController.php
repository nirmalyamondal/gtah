<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Validator;

class HomeController extends Controller
{
    /**
     * Show Categories
     *
    */
    public function getSubCategories($id)
    {
        $records = Category::where('pid', $id)
            ->get(['id', 'slug', ])
            ->toArray();
        
        $options    = '<option value="0"> Select Sub Category</option>';
        try{
            if(!empty($records) && is_array($records)){
                foreach($records as $val){
                    $options    .= '<option value="'.$val['id'].'">'.$val['slug'].'</option>';
                }
            }
            $data['status'] = true;
            $data['data'] = $options;
        }
        catch(Exception $e){
            $data['status'] = false;
            $data['msg'] = $e->getMessage();
        }
        echo json_encode($data);
        exit;
    }

}
