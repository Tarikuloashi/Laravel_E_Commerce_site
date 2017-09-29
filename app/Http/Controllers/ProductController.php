<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menufacturer;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function createProduct(){
    	$categories=Category::where('publicationStatus',1)->get();
    	$menufacturers=Menufacturer::where('publicationStatus',1)->get();
    	return view('admin.product.createProduct',['categories'=>$categories,'menufacturers'=>$menufacturers]);
    }

    public function storeProduct(Request $request){
    	//return $request->all();
    	$this->validate($request,[
    		'productName'=>'required',
    		'productPrice'=>'required',
    		'productImage'=>'required',

    		]);

    	$productImage=$request->file('productImage');
    	$name=$productImage->getClientOriginalName();
    	$uploadPath='public/productImage/';
    	$productImage->move($uploadPath,$name);
    	$imageUrl=$uploadPath.$name;
    	$this->saveProductInfo($request,$imageUrl);
    	return redirect('/product/add')->with('message','Product info Save successfully');
}
protected function saveProductInfo($request,$imageUrl){
    	$product=new Product();
    	$product->productName=$request->productName;
    	$product->categoryid=$request->categoryid;
    	$product->manufacturerid=$request->menufacturerid;
    	$product->productPrice=$request->productPrice;
    	$product->productQuantity=$request->productQuentity;
    	$product->productShortDescription=$request->productShortDescription;
    	$product->productLongDescription=$request->productLongDescription;
    	$product->productImage=$imageUrl;
    	$product->publicationStatus=$request->publicationStatus;
    	$product->save();

    }

    public function manageProduct(){
       $products=DB::table('products')
                    ->join('categories','products.categoryid','=','categories.id')
                    ->join('menufacturers','products.manufacturerid','=','menufacturers.id')
                    ->select('products.id','products.productName','products.productPrice','products.productQuantity','products.publicationStatus','categories.categoryName','categories.categoryDescription','menufacturers.menufacturerName')
                 //   ->select('products.*','categories.categoryName','menufacturers.menufacturerName')
                    ->get();
   
    /* show data to Browser
       echo '<pre>';
       print_r($products);
       exit();
*/
        return view ('admin.product.manageProduct',['products'=>$products]);
    
    }

    public function viewProduct($id){
         $productById=DB::table('products')
                    ->join('categories','products.categoryid','=','categories.id')
                    ->join('menufacturers','products.manufacturerid','=','menufacturers.id')
                   // ->select('products.id','products.productName','products.productPrice','products.productQuantity','products.publicationStatus','categories.categoryName','categories.categoryDescription','menufacturers.menufacturerName')
                    ->select('products.*','categories.categoryName','menufacturers.menufacturerName')
                    ->where('products.id',$id)
                    ->first();

        return view('admin.product.viewProduct',['product'=>$productById]);
    }

    public function editProduct($id){
        $categories = Category::where('publicationStatus',1)->get();
        $menufacturers = Menufacturer::where('publicationStatus',1)->get();
        $productById=product::where('id',$id)->first();
     //   return view('admin.product.editProduct',['productById'=>$productById,'categories'=>$categories,'menufacturers'=>$menufacturers]);
   
   // Another way to send edited data
       
        return view('admin.product.editProduct')
                ->with ('productById',$productById)
                ->with ('categories',$categories)
                ->with ('menufacturers',$menufacturers);
   
    }
    public function updateProduct(Request $request){
        $imageUrl=$this->imageExistStatus($request);
        echo $imageUrl;
        exit();

    }

    private function imageExistStatus($request){
        $productById=Product::where('id',$request->productid)->first();
        $productImage=$request->file('productImage');
        if($productImage){
            unlink($productById->productImage);
            $name=$productImage->getClientOriginalName();
            $uploadPath='public/productImage/';
            $productImage->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;

       
        }else{
            $imageUrl=$productById->productImage;
       
        }
        return $imageUrl;
   
    }

    public function deleteProduct($id){
 
 $product = Product::find($id);
 $product->delete();
 return redirect('/product/manage')->with('message','Product Info delete successfully');
    
}
}
