<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Category;

use Carbon\Carbon;

use Image;

class BackendController extends Controller
{
    public function dashboard()
    {
    	return view('backend.index');
    }

    public function category_add()
    {
    	return view('backend.category_add');
        //echo $current = Carbon::now();
        //Image::make(Input::file('photo'))->resize(300, 200)->save('foo.jpg');
      //return  $img = Image::make('./uploads/1519710799.jpeg')->resize(50, 50)->save('watermark.png');
    }


    public function category_list()
    {

         $category_all = Category::all();

       // $category_all = DB::table("categories")->orderBy('category_name')->get();
        return view('backend.category_list', ['category_all'=>$category_all]);
    }


    public function show_category_list()
    {

        $category_all = DB::table("categories")->orderBy('category_name')->get();
        return view('backend.show_category_list', ['category_all'=>$category_all]);
    }


    public function category_edit($catid)
    {

        $category_select = DB::table("categories")->where('catid', $catid)->first();

       // dd($category_select);
        return view('backend.category_edit', ['category_select'=>$category_select]);
    }


    public function category_delete($catid)
    {


        

        DB::table("categories")->where('catid', $catid)->delete();
        return 1;
       
    }

    public function cat_delete(Request $request)
    {


       dd($request);

        // DB::table("categories")->where('catid', $catid)->delete();
        // return redirect('/category-list');
       
    }




    public function insert_update_category(Request $request)
    {
    	$catid = $request->input('catid');
    	$category_name = $request->input('category_name');

    	//dd($category_name);

    	if($catid >0)

    	{
    		// Update query here

    		DB::table('categories')->where('catid', $catid)->update(['category_name' =>$category_name]);
    	}
    	else
    	{
    		// Insert query here
    		DB::table('categories')->insert(['category_name' =>$category_name]);
    	}

        return redirect('/category-list');

    	
    }

    // Product manage start here
    public function product_add()
    {
        $category_all = Category::all();
        return view('backend.product_add', ['category_all'=>$category_all]);
    }


    public function insert_update_product(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_category = $request->input('product_category');
        $product_name = $request->input('product_name');
        $product_price = $request->input('product_price');
        $product_details = $request->input('product_details');
        $product_status = $request->input('product_status');
        $product_stock_in = $request->input('product_stock_in');


        $product_image = "";


        //$date = date("Y-m-d H:i:s");


        //dd($request);


        // request()->validate([

        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);


        if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');

                $name = time().'.'.$image->getClientOriginalExtension();

               

                $img = Image::make($request->file('product_image'));
                //$img->resize(100, 100);

                 // resize the image to a width of 300 and constrain aspect ratio (auto height)
                $img->resize(100, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $img->save('uploads/thumbs/'.$name, 80);


                $destinationPath = public_path('/uploads');
                $image->move($destinationPath, $name);


                $product_image = $name;




                //$this->save();
            }



        if($product_id >0)

        {
            // Update query here

            DB::table('products')->where('product_id', $product_id)
                    ->update([
                        'product_name' =>$product_name,
                        'product_price' =>$product_price,
                        'product_image' =>$product_image,
                        'product_details' =>$product_details,
                        'product_category' =>$product_category,
                        'product_stock_in' =>$product_stock_in,
                        'product_status' =>$product_status

                    ]);
        }
        else
        {
            // Insert query here
            DB::table('products')->insert([
                        'product_name' =>$product_name,
                        'product_price' =>$product_price,
                        'product_image' =>$product_image,
                        'product_details' =>$product_details,
                        'product_category' =>$product_category,
                        'product_stock_in' =>$product_stock_in,
                        'product_status' =>$product_status,
                        //'created_at' =>now(),
                        //'updated_at' =>now()
            ]);
        }

         return redirect('/product-list');

        
    }



     public function product_list()
    {

         $product_all = DB::table("products")->orderBy('product_name')->get();

       // $category_all = DB::table("categories")->orderBy('category_name')->get();
        return view('backend.product_list', ['product_all'=>$product_all]);
        //return view('backend.product_list', compact('product_all'));
    }


     public function product_edit($product_id)
    {

        $product_select = DB::table("products")->where('product_id', $product_id)->first();

       
        //dd($product_select->product_category);
        $category_all = Category::orderBy('category_name')->get();

       // dd($category_select);
        return view('backend.product_edit', ['product_select'=>$product_select, 'category_all' =>$category_all]);
    }


     public function product_delete($product_id)
    {
        $product_select = DB::table("products")->where('product_id', $product_id)->first();

        DB::table("products")->where('product_id', $product_id)->delete();

        if($product_select->product_image !="")
        {

            $main_img = 'uploads/'.$product_select->product_image;
            $thumbs_img = 'uploads/thumbs/'.$product_select->product_image;
            if(file_exists($main_img))
            {
                //echo "Exits";
                unlink($main_img);

                if(file_exists($thumbs_img))
                {
                    unlink($thumbs_img);
                }
            }
            

        }

        return redirect('/product-list');
    }

    // Product manage end here

}
