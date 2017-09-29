<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menufacturer;

use DB;

class menufacturerController extends Controller
{
    
    public function createMenufacturer(){

    	return view('admin.menufacturer.createMenufacturer');
    }

    public function storeMenufacturer(Request $request){
        $this->validate($request,[
            'menufacturerName'=>'required',
            'menufacturerDescription'=>'required',
            ]);

        DB::table('menufacturers')->insert([
    		'menufacturerName'=>$request->menufacturerName,
    		'menufacturerDescription'=>$request->menufacturerDescription,
    		'publicationStatus'=>$request->publicationStatus,

    		]);
    	return redirect('/menufacturer/add')->with('message','Menufacturer Store Successfully ');
    }

        public function manageMenufacturer(){
            $menufacturers=Menufacturer::all();
            return view ('admin.menufacturer.manageMenufacturer',['menufacturers'=>$menufacturers]);
        }


        public function editMenufacturer($id){
            $menufacturerByid=Menufacturer::where('id',$id)->first();
            return view ('admin.menufacturer.editMenufacturer',['menufacturerByid'=>$menufacturerByid]);
        }

        public function updateMenufacturer(Request $request){
            //dd($request->all());
            $menufacturer=Menufacturer::find($request->id);
            $menufacturer->menufacturerName=$request->menufacturerName;
            $menufacturer->menufacturerDescription=$request->menufacturerDescription;
            $menufacturer->publicationStatus=$request->publicationStatus;
            $menufacturer->save();
            return redirect('/menufacturer/manage')->with('message','Menufacturer Info update Successfully');

        }

        public function deleteMenufacturer($id){
            $menufacturer=Menufacturer::find($id);
            $menufacturer->delete();
            return redirect('/menufacturer/manage')->with('message','Menufacturer Info Delete Successfully');

        }






}
