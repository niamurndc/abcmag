<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;

class AdminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function showDashboard(){
        return view('admin.index');
    }

    public function showNews(){
        $news = Post::OrderBy('id', 'desc')->get();
        return view('admin.news', ['news' => $news]);
    }

    public function createNews(){
        $cats = Category::OrderBy('id', 'desc')->get();
        return view('admin.createnews', ['cats' => $cats]);
    }

    public function showCategory(){
        $cats = Category::OrderBy('id', 'desc')->get();
        return view('admin.category', ['cats' => $cats]);
    }

    public function showUser(){
        $user = User::all();
        return view('admin.user', ['users' => $user]);
    }
}
