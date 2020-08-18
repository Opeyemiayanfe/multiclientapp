<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Merchant;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guard('signup')->check())
        {
            $auid = Auth::guard('signup')->user()->id;
            $mchant = Merchant::where('merchant_id',$auid)->value('merchant_id');
            $pro = Product::where('signup_id',$auid)->get();
            if($auid == $mchant)
            {
                return view('Merchants.show',compact('pro'));
             }
            elseif($auid != $mchant)
            {
            return redirect('/signup');
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guard('signup')->check())
        {
            $auid = Auth::guard('signup')->user()->id;
            $mchant = Merchant::where('merchant_id',$auid)->value('merchant_id');
            if($auid == $mchant)
            {
            return view('Merchants.addpro');
             }
            elseif($auid != $mchant){
            return redirect('/signup');
            }
        }
        
        {
            return redirect('/merchant');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'image|nullable|max:1999'
    
           ]);
    
           if ($request->hasFile('image')) {
    
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameTostore = $filename.'_'.time().'.'.$extension;
            $path = $request ->file('image')->storeAs('public/productsimage', $fileNameTostore);
    
           }
           $id = Auth::guard('signup')->user()->id;
           $chant = Merchant::where('merchant_id',$id)->value('pagename');
           $product =new Product();
    
           $product->name = request('name');
           $product->description = request('description');
           $product->Price = request('price');
           $product->product_image = $fileNameTostore;
           $product->page_name = $chant;
           $product->signup_id = $id;
           $product->save();
    
           return redirect('/product'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
