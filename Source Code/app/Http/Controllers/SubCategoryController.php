<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('dashboardviews.subdash');
    }
    public function create()
    {
        $all_sub = SubCategory::orderByDesc('id')->get();
        $all_category = Category::all();

        return view('dashboardviews.subdash', compact('all_sub','all_category'));
    }

    public function CategoriesCreate()
    {
        $all_sub = SubCategory::orderByDesc('id')->get();

        return view('public.Subcategories-page', compact('all_sub'));
    }
    public function validation(Request $request)
    {

        $request->validate([
            'sub_name' => 'required',
            'sub_image' => 'mimes:jpeg,jpg,png,gifmax:10000',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $file = $request->sub_image->getClientOriginalExtension();
        $file_name = time() . '.' . $file;
        $path = 'imager';
        $request->sub_image->move($path, $file_name);

        SubCategory::create([

            'sub_name' => $request['sub_name'],
            'cat_id'=>1,
            'cat_name'=>$request['cat_name'],
            'sub_image' => $file_name,
        ]);
        
        // $test=1;


        // SubCategory::create([
        //     'sub_name'          => $request->sub_name,
        //     'cat_id'            => 1,
        //     'cat_name'          => $request->cat_name,
        //     'sub_image'         => $file_name
        // ]);

        return redirect("subdash");
    }

    
    /**
     * Display the specified resource.
     *
     * @param SubCategory $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub_categories = SubCategory::where('id', $id)->get()->first();
        return $sub_categories;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SubCategory $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param SubCategory $category
     * @return \Illuminate\Http\Response
     */
    public function updateView($id)
    {

        $sub_categories = $this->show($id);
        return view('dashboardviews.editsubcat', compact('sub_categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validation($request);
        if ($request->hasFile('sub_image')) {
            $file = $request->cat_image->getClientOriginalExtension();
            $file_name = time() . '.' . $file;
            $path = 'imager';
            $request->sub_image->move($path, $file_name);
        } else {
            $file_name = SubCategory::find($id)->sub_image;
        }

        SubCategory::where("id", $id)->update([
            'sub_name' => $request['sub_name'],
            'sub_image' => $file_name,
        ]);
        return redirect("subdash");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubCategory $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory_id = SubCategory::where('id', $id)->delete();
        $all_sub = SubCategory::all();
        return redirect("subdash");
    }
}
