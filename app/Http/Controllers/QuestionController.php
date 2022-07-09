<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Validator;

class CategoryController extends Controller
{
    /**
     * Add Category page
     *
     */
    public function create()
    {
        $catArr  = Category::get('*')
            ->where('level', '<=', 2)
            ->sortBy('name')
            ->toArray();

        
        $catagories = '';
        $refs = array();
        $list = array();
        if(!empty($catArr) && is_array($catArr)){
            foreach($catArr as $row){
                $ref = & $refs[$row['id']];

                $ref['id'] = $row['id'];
                $ref['pid'] = $row['pid'];
                $ref['name']    = $row['name'];
                $ref['level']    = $row['level'];
                if ($row['pid'] == 0){
                    $list[$row['id']] = & $ref;
                }
                else{
                    $refs[$row['pid']]['children'][$row['id']] = & $ref;
                }
                //$catagories .= '<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
            }
        }

        $data['catagories'] = $this->toSelectOptions($list);
        return view('category/add', ["data"=>$data]);
    }

    function toSelectOptions($array, $pid='')
    {
        //print_r($pid);print_r($array);die;
        $html = '';
        foreach ($array as $value){
            $gap    = $value['level'] * 2;
            $selected   = (isset($pid) && ($pid == $value['id'])) ? 'selected' : '';
            $class   = (isset($value['pid']) && ($value['pid'] > 0)) ? ' class="catchild"' : ' class="catparent"';
            $spacing = (isset($value['pid']) && ($value['pid'] > 0)) ? '&nbsp;&nbsp;&nbsp;' : '';
            $html .= '<option value="' . $value['id'].'" '.$selected.$class.'>';
            for($i = 0; $i <= $gap; $i++ ){
                //$html .= '-';
            }
            $html .= $spacing.$value['name'].'</option>';
            if (!empty($value['children'])){
                $html .= $this->toSelectOptions($value['children'], $pid);
            }
        }

        return $html;
    }
    /**
     * Add Category
     *
     */
    public function store(Request $request)
    {
        $rules = [
			'pid' => 'required|integer',
			'slug' => 'required|string|min:2|max:255',
			'name' => 'required|string|min:2|max:255'
		];

		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('category')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
                $result  = Category::where('id', $data['pid'])->select('level')->first();
                $level  = empty($result) ? 1 : $result->level+1;

				$category = new Category;
                $category->pid = $data['pid'];
                $category->slug = $data['slug'];
				$category->name = $data['name'];
                $category->level = $level;
				$category->save();
				return redirect('category')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('category')->with('failed',"operation failed");
			}
		}
    }

    /**
     * Edit Category page
     *
     */
    public function edit($id)
    {
        $catArr  = Category::get('*')
            ->where('level', '<=', 2)
            ->sortBy('name')
            ->toArray();

        
        $catagories = '';
        $refs = array();
        $list = array();
        if(!empty($catArr) && is_array($catArr)){
            foreach($catArr as $row){
                $ref = & $refs[$row['id']];

                $ref['id'] = $row['id'];
                $ref['pid'] = $row['pid'];
                $ref['name']    = $row['name'];
                $ref['level']    = $row['level'];
                if ($row['pid'] == 0){
                    $list[$row['id']] = & $ref;
                }
                else{
                    $refs[$row['pid']]['children'][$row['id']] = & $ref;
                }
            }
        }

        $cat  = Category::where('id', $id)
            ->get('*')
            ->toArray();
        
        $data['id']   = $id;
        if(isset($cat[0])){
            $data['slug']   = $cat[0]['slug'];
            $data['name']   = $cat[0]['name'];
        }
        $parent_id  = isset($cat[0]['pid']) ? $cat[0]['pid'] : 0;
        $data['catagories'] = $this->toSelectOptions($list, $parent_id);
        return view('category/edit', ["data"=>$data]);
    }

    /**
     * Show Categories
     *
     */
    public function show(Request $request)
    {
        $categories = Category::all(['name', 'slug', 'pid'])->toArray();
        return $this->success($categories, "Category List");
    }

    /**
     * Update Categories
     *
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $rules = [
			'pid' => 'required|integer',
			'slug' => 'required|string|min:3|max:40',
			'name' => 'required|string|min:3|max:200'
		];

		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('category')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
                $result  = Category::where('id', $data['pid'])->select('level')->first();
                $level  = empty($result) ? 1 : $result->level+1;
                
                $category = Category::find($id);
                $category->pid = $data['pid'];
                $category->slug = $data['slug'];
				$category->name = $data['name'];
                $category->level = $level;
				$category->save();
				return redirect('category')->with('status',"Updated successfully");
			}
			catch(Exception $e){
				return redirect('category')->with('failed',"operation failed");
			}
		}
    }

}
