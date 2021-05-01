<?php

namespace App\Http\Controllers;

use App\Category;
use App\post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardviews.categorydash');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_category = Category::orderByDesc('id')->get();

        return view('dashboardviews.categorydash', compact('all_category'));
    }

    public function CategoriesCreate()
    {
        $all_category = Category::orderByDesc('id')->get();

        return view('public.categories-page', compact('all_category'));
    }


    public function validation(Request $request)
    {

        $request->validate([
            'cat_name' => 'required',
            'cat_image' => 'mimes:jpeg,jpg,png,gifmax:10000',
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

        $file = $request->cat_image->getClientOriginalExtension();
        $file_name = time() . '.' . $file;
        $path = 'imager';
        $request->cat_image->move($path, $file_name);

        Category::create([

            'cat_name' => $request['cat_name'],
            'cat_image' => $file_name,


        ]);

        return redirect("categorydash");
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::where('id', $id)->get()->first();
        return $categories;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
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
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function updateView($id)
    {

        $categories = $this->show($id);
        return view('dashboardviews.editcategory', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validation($request);
        if ($request->hasFile('cat_image')) {
            $file = $request->cat_image->getClientOriginalExtension();
            $file_name = time() . '.' . $file;
            $path = 'imager';
            $request->cat_image->move($path, $file_name);
        } else {
            $file_name = Category::find($id)->cat_image;
        }

        Category::where("id", $id)->update([
            'cat_name' => $request['cat_name'],
            'cat_image' => $file_name,
        ]);
        return redirect("categorydash");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_id = Category::where('id', $id)->delete();
        $all_category = Category::all();
        return redirect("categorydash");
    }
}
