<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function getCate(){
//        $data['catelist'] = Category::all();
//        return view('backend.category',$data);
        $categories = Category::all();
        return view('backend.category',['categories'=>$categories]);
    }

    public function getEditCate($id){
         $data['cate'] = Category::find($id);
        return view('backend.editcategory',$data);
    }



    public function postAddCategory(AddCateRequest $request){

        $category  = new Category;
        $category->cate_name = $request->name;
//        $category->cate_slug = str_slug($request->name);
        $category->cate_slug = Str::slug($request->name);
        $category->save();
        return Redirect::to('admin/category')->with('success','Thêm mới dnah mục thành công');
    }

    public function postEditCate(EditCateRequest $request, $id){
        $category  = Category::find($id);
        $category->cate_name = $request->name;
        $category->cate_slug = Str::slug($request->name);
        $category->save();
        return Redirect::to('admin/category')->with('success','Sửa thành công');
    }

    public function getDeleteCate($id){
        Category::destroy($id);
        return Redirect::to('admin/category')->with('success','Xóa danhh mục thành công');

    }
}
