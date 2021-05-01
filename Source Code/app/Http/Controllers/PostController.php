<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('home', compact('subcategory','category'));
    }

    public function storecat(Request $request){
        $cat = $request->cat_name;
        session(['cat' => $cat]);
        $subcategory = SubCategory::where('cat_name','=', $cat)->get();
        return view('homeadd', compact('subcategory'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if ($request->hasFile('post_image')) {
            $file = $request->post_image->getClientOriginalExtension();
            $file_name = time() . '.' . $file;
            $path = 'imager';
            $request->post_image->move($path, $file_name);
        } else {
            $file_name = "defult.jpg";

        }
        $cat = Session::get('cat');
        Post::create([

            "cat_name"           => $cat,
            "sub_name"           => $request->sub_name,
            "autherid"           => $request->autherid,
            "name"               => $request->name,
            'email'              => $request->email,
            "last_seen"          => $request->last_seen,
            "user_image"         => $request->user_image,
            "post_title"         => $request->post_title,
            'post_desc'          => $request->post_desc,
            "post_mobile"        => $request->post_mobile,
            "post_image"         => $file_name,
            "post_price"         => $request->post_price,
            'post_location'      => $request->post_location,
             
        ]);
        // $posts            = Post::all();
        $category         = Category::all();
        $subcategory      = SubCategory::all();
        // return view('landing', compact('subcategory','category'));
        return redirect('allpost');
        // return view('allpost', compact('posts', 'category'));
        // return view('home', compact('subcategory','category'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }
    public function lara (){
        $posts = Post::all();
        return view('dashboardviews.postsdash', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect('postsdash');
    }
}
