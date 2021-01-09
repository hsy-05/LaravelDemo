<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; //

class ProductsController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        $products = Products::orderBy('id')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/products')) {
            mkdir('uploads/products', 0755, true);
        }

        $products = new Products;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path() . '\uploads\products\\';
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }
        else {
            $fileName = 'default.jpg';
        }

        $products->title = $request->input('title');
        $products->price = $request->input('price');
        $products->image = $fileName;
        $products->description = $request->input('description');

        $products->save();

        return redirect()->route('admin.products.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('admin.products.edit', compact('products'));
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
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/products')) {
            mkdir('uploads/products', 0755, true);
        }

        $products = Products::find($id);

        if ($request->hasFile('image')) {
            // 先刪除原本的圖片
            if ($products->image != 'default.jpg')
                @unlink('uploads/products/' . $products->image);
            $file = $request->file('image');
            $path = public_path() . '\uploads\products\\';
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $products->image = $fileName;
        }

        $products->title = $request->input('title');
        $products->price = $request->input('price');
        $products->description = $request->input('description');

        $products->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        if ($products->image != 'default.jpg')
            @unlink('uploads/products/' . $products->image);
        $products->delete();
        return redirect()->route('admin.products.index');
    }
}
