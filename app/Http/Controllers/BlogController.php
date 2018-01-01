<?php

namespace App\Http\Controllers;

use App\SaveBlogInfo;
use App\SaveCategoryInfo;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function AddBlogInfo(){
        //$publishedCategories = SaveCategoryInfo::where('publication_status',1)->get();
        return view ('admin.blog.add-blog');

    }
    public function SaveBlogInformation(Request $request){
        $blog= new SaveBlogInfo();
        $blog->Category_id = $request->Category_id;
        $blog->blog_date = $request->blog_date;
        $blog->blog_title = $request->blog_title;
        $blog->blog_description = $request->blog_description;
        $blog->blog_image = $request->blog_image;
        $blog->publication_status = $request->publication_status;

        return $request->all();


        return redirect('/blog/save-blog')->with('massage','Blog Info Save Successfully');

    }
    public function ManageBlogInfo(){
        return view ('admin.blog.manage-blog');
    }
}
