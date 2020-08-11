<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{

    public function index(){
        $news = Post::OrderBy('id', 'desc')->limit(4)->get();
        $cats = Category::OrderBy('id', 'desc')->get();
        $cat3 = Category::OrderBy('id')->limit(3)->get();
        $newslat = Post::OrderBy('created_at', 'desc')->limit(5)->get();
        $popu = Post::OrderBy('vcount', 'desc')->limit(5)->get();
        $random = Post::inRandomOrder()->limit(5)->get();
        return view('index', ['posts' => $news, 'cats' => $cats, 'cat3' => $cat3, 'newslat' => $newslat, 'popu' => $popu, 'random' => $random]);
    }

    public function show($slug){
        $news = Post::where('slug', $slug)->first();
        if($news){
            $news->vcount = $news->vcount + 1;
            $news->update();
            $cats = Category::OrderBy('id', 'desc')->get();
            return view('view', ['news' => $news, 'cats' => $cats]);
        }
        
    }

    public function category($slug){
        $cat = Category::where('slug', $slug)->first();
        $cats = Category::OrderBy('id', 'desc')->get();
        return view('category', ['cats' => $cats, 'cat' => $cat]);
    }
}
