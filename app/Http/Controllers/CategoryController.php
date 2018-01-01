<?php

namespace App\Http\Controllers;

use App\SaveCategoryInfo;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AddCategory(){
        return view('admin.category.add-category');
    }

    public function SaveCategoryInfo(Request $request){
       $category= new SaveCategoryInfo();
        $category->category_date = $request->category_date;
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('admin/category/add-category')->with('massage','Category Info Save Successfully');
    }
    public function ManageCategory(){
        $Categories=SaveCategoryInfo::orderBy('id','desc')->get();
        return view('admin.category.manage-category',['Categories'=>$Categories]);
    }
    public function UnpublishedCategoryInfo($id){
        $categoryBYId=SaveCategoryInfo::find($id);
        $categoryBYId->publication_status =0;
        $categoryBYId->save();
        return redirect('admin/category/manage-category')->with('massage','Category Unpublished Successfully');
    }
    public function publishedCategoryInfo($id){
        $categoryBYId=SaveCategoryInfo::find($id);
        $categoryBYId->publication_status =1;
        $categoryBYId->save();
        return redirect('admin/category/manage-category')->with('massage','Category Published Successfully');
    }
    public function EditCategoryInfo($id){
        $category=SaveCategoryInfo::find($id);

        return view('admin.category.edit-category',['category'=>$category]);
    }
    public function updateCategoryInfo(Request $request){
        $categoryBYId=SaveCategoryInfo::find($request->category_id);
        $categoryBYId->category_date=$request->category_date;
        $categoryBYId->category_name=$request->category_name;
        $categoryBYId->category_description=$request->category_description;
        $categoryBYId->publication_status=$request->publication_status;
        $categoryBYId->save();
        return redirect('admin/category/manage-category')->with('message','Category Info Update Successfully');

    }
    public function deleteCategoryInfo($id){
        $categoryBYId=SaveCategoryInfo::find($id);
        $categoryBYId->delete();
        return redirect('admin/category/manage-category')->with('message','Category Info delete Successfully');
    }

}