<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product= Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        if($request->hasFile('product_pic')){
            // $file = $request->file('product_pic');


            $extension = $request->product_pic->getClientOriginalExtension();
            $fileName = date('U').'.'.$extension;
            $destination = "upload/";

            $product->product_pic = $destination.$fileName;



            if($request->product_pic->move($destination, $fileName)){
                echo "success";
            }else{
                echo "error..";
            }

        }else{
            echo "file not found!";
        }




        $product->name= $request->input('name');
        $product->details= $request->input('details');
        $product->save();
        return redirect('product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        // $product= Student::find()
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if($request->hasFile('product_pic')){
            // $file = $request->file('product_pic');

            if($product->product_pic) {
                unlink($product->product_pic);
            }

            $extension = $request->product_pic->getClientOriginalExtension();
            $fileName = date('U').'.'.$extension;
            $destination = "upload/";

            $product->product_pic = $destination.$fileName;



            if($request->product_pic->move($destination, $fileName)){
                echo "success";
            }else{
                echo "error..";
            }

        }else{
            echo "file not found!";
        }




        $product->name= $request->input('name');
        $product->details= $request->input('details');
        $product->update();
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        if($product->product_pic) {
            unlink($product->product_pic);
        }
        $product->delete();
        return redirect('product');
    }
}
