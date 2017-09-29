<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use DB;

class CategoryController extends Controller
{
    
    public function createCategory(){

    	return view('admin.category.createCategory');
    }

    public function storeCategory(Request $request){
        $this->validate($request,[
            'categoryName'=>'required',
            'categoryDescription'=>'required',
            ]);

    		//return $request->all();
    												//Eloquent
                                      // Database store data process 1(need use App\Category)
/*
    	$category=new Category();
    	$category->categoryName=$request->categoryName;
    	$category->categoryDescription=$request->categoryDescription;
    	$category->publicationStatus=$request->publicationStatus;
    	$category->save();
    	return 'Category Info Save Successfully';
*/
    												//Eloquent
    	                           //Database store data process 2 (need use App\Category)
/*
    	Category::create($request->all());
    	return 'Category Info Save Successfully';
*/
    												//Query Builder
    								//Database store data process 3 (need use DB)

    	DB::table('categories')->insert([
    		'categoryName'=>$request->categoryName,
    		'categoryDescription'=>$request->categoryDescription,
    		'publicationStatus'=>$request->publicationStatus,

    		]);
    	return redirect('/category/add')->with('message','Category Store Successfully ');
    }

        public function manageCategory(){
            $categories=Category::all();
            return view ('admin.category.manageCategory',['categories'=>$categories]);
        }


        public function editCategory($id){
            $categoryByid=Category::where('id',$id)->first();
            return view ('admin.category.editCategory',['categoryByid'=>$categoryByid]);
        }

        public function updateCategory(Request $request){
            //dd($request->all());
            $category=Category::find($request->id);
            $category->categoryName=$request->categoryName;
            $category->categoryDescription=$request->categoryDescription;
            $category->publicationStatus=$request->publicationStatus;
            $category->save();
            return redirect('/category/manage')->with('message','Category Info update Successfully');

        }

        public function deleteCategory($id){
            $category=Category::find($id);
            $category->delete();
            return redirect('/category/manage')->with('message','Category Info Delete Successfully');

        }






}
