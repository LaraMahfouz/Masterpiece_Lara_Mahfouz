<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SubCategory;
use App\Category;
use App\Post;
use App\Comment;


class FrontController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        // $posts=Post::all();
        // $posts = Post::orderBy('created_at', 'DESC')->take(3);
        $posts = Post::all()->sortByDesc('created_at')->take(3);
        return view('landing',compact('categories','posts'));
    }

    public function sub(Category $category)
    {
       $new=$category->cat_name;
       $subcategory = SubCategory::where('cat_name', '=' ,$new)->get();
       $catimg=$category->cat_image;

        // dd($subcategory);

        // return view('landing',compact('subcategory'));
        // return redirect("/sub/$category->id")->with( ['subcategory' => $subcategory],['catimg'=>$catimg]);

        return view('subCat',compact('subcategory','catimg'));
    }

    public function test(Category $category)
    {

        return redirect("/sub/$category->id");
        // return redirect("/sub/$category->id")->with( ['subcategory' => $subcategory],['catimg'=>$catimg]);

    }
    public function auther(User $auther)
    {
        $newauther= $auther->email;
        $autherposts = Post::where('email', '=' ,$newauther)->get();
        return view('auther',compact('auther','autherposts'));
        
        

    }
    public function singleauther(User $auther)
    {

        return redirect("/auther/$auther->id");
        // return redirect("/sub/$category->id")->with( ['subcategory' => $subcategory],['catimg'=>$catimg]);

    }

    public function subpost(SubCategory $subcategory)
    {
       $new=$subcategory->sub_name;
       $subpost = Post::where('sub_name', '=' ,$new)->get();
       $categories=Category::all();
        // dd($subpost);
        // return view('landing',compact('subcategory'));
        return view('subcatpost',compact('subpost','categories'));
    }
    public function allpost()
    {
       $categories=Category::all();  
       $subpost = Post::orderBy('created_at', 'DESC')->paginate(9);
  
    //    $subpost = Post::all();
        // dd($subpost);
        // return view('landing',compact('subcategory'));
        return view('allpost',compact('subpost','categories'));
    }

    public function profile()
    {
        $auther= auth()->user()->email;
        $autherposts = Post::where('email', '=' ,$auther)->get();
        // dd($autherposts);
        // return view('landing',compact('subcategory'));
        return view('profile',compact('autherposts'));
    }

    public function single(Post $post)
    {   
        // $comments = Comment::where('post_id', '=' ,$post->id)->get();
        $comments = Comment::orderBy('created_at', 'DESC')->where('post_id', '=' ,$post->id)->paginate(2);

        return view('singlepost',compact('post','comments'));


    }
}
