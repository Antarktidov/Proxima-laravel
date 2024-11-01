<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(2);

        return view('blog', compact('blogs'));
    }
    
    public function admin_index()
    {
        $blogs = Blog::paginate(2);

        return view('admin.v2.admin-blog', compact('blogs'));
    }

    public function api() {
        $blogs = Blog::paginate(2);

        $arr = [];

        foreach($blogs as $blog) {
            array_push($arr, [
                'id' => $blog->id,
                'title' => $blog->title,
                'content' => $blog->content,
                'image' => $blog->image,
            ]);
        }

        return $arr;
    }

    public function vue() {
        return view('blog-vue');
    }

    public function getBlog($blogId) {
        $blog = Blog::findOrFail($blogId);
        //dd($blog);

        return view('show-blog', compact('blog'));
    }

    public function create() {
        return view('admin.v2.create-blog');
    }

    public function store(Request $request) {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images/blog');
            //dd($path);
            //Blog::create($request);
            //return $path;
            $data = request()->validate([
                'title' => 'string',
                'content' => 'string',
                'image' => '',
            ]);
            $data['image'] = str_replace("public/images/blog","",$path);
            Blog::create($data);
            return redirect()->route('blogs.create');// Дальше обработка пути и сохранение блога...
        } else {
            // Обработка случая, когда файл не был загружен
            // Например, вы можете вернуть ошибку или перенаправить обратно на форму
            return redirect()->back()->with('error', 'Файл не был загружен.');
        }
    }

    public function delete(Blog $blog) {
        $blog->delete();
        return redirect()->route('blogs.admin.index');
    }

    public function update(Blog $blog, Request $request) {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => '',
        ]);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images/blog');
            $data['image'] = str_replace("public/images/blog","",$path);
            //Blog::update($data);
            //$blog->update($data);
            //return redirect()->route('blogs.admin.index');
        } else {
            //$data['image'] = '';
            // Обработка случая, когда файл не был загружен
            // Например, вы можете вернуть ошибку или перенаправить обратно на форму
            //return redirect()->back()->with('error', 'Файл не был загружен.');
        }
        $blog->update($data);
        return redirect()->route('blogs.admin.index');
    }
}
