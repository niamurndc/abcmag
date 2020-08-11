<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index(){
        $news = Post::OrderBy('id', 'desc')->get();
        return view('admin.news', ['news' => $news]);
    }

    public function show($id){
        $news = Post::findOrFail($id);
        return view('admin.viewnews', ['news' => $news]);
    }

    public function store(Request $request){
        $post = new Post();

        $post->title = $request->input('title');
        $post->slug = str_slug($post->title);
        $post->category_id = $request->input('category');
        $post->body = $request->input('body');

        // add image
        $image = $request->file('cover');
        $ext = $image->getClientOriginalExtension();

        $cover = time().'-news.'.$ext;

        $post->cover = $cover;

        $path = 'uploads';

        $image->move($path, $cover);

        $post->save();
        return redirect('/admin/news')->with('msg', 'News Publiched successfully.');
    }

    public function edit($id){
        $cat = Category::all();
        $post = Post::findOrFail($id);
        return view('admin.editnews', ['post' => $post, 'cats' => $cat]);
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);

        $post->title = $request->input('title');
        $post->slug = str_slug($post->title);
        $post->category_id = $request->input('category');
        $post->body = $request->input('body');

        // add image
        $image = $request->file('cover');
        $ext = $image->getClientOriginalExtension();

        $cover = time().'-news.'.$ext;

        $oldImg = public_path().'/uploads/'.$post->cover;
        unlink($oldImg);

        $post->cover = $cover;

        $path = 'uploads';

        $image->move($path, $cover);

        $post->update();
        return redirect('/admin/news')->with('msg', 'News Updated successfully.');
    }

    public function destroy($id){
        echo $id;
        $news = Post::findOrFail($id);

        $news->delete();

        $oldImg = public_path().'/uploads/'.$news->cover;
        unlink($oldImg);
        return redirect('/admin/news')->with('msg', 'News Deleted');
    }

    
}
