<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $category         = Category::all();
        $subcategory      = SubCategory::all();
        return view('home', compact('subcategory','category'));
    }
    // public function index($id)
    // {
    //     // return view('home');
    //     $category         = Category::all();
    //     $subcategory      = SubCategory::all();
    //     $user = User::where('id', $id)->get()->first();
    //     return view('home', compact('subcategory','category','user'));
    // }
}
