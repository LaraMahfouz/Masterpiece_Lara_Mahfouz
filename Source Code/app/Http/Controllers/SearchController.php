<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('post_title', 'LIKE', "%{$search}%")
            ->orWhere('post_desc', 'LIKE', "%{$search}%")
            ->orWhere('post_mobile', 'LIKE', "%{$search}%")
            ->orWhere('name', 'LIKE', "%{$search}%")
            ->orWhere('cat_name', 'LIKE', "%{$search}%")
            ->get();

        $category=Category::all();

        // Return the search view with the resluts compacted
        return view('search', compact('posts','category'));
    }
}
