<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ], [
            'title.required' => 'Title tidak boleh kosong!',
            'content.required' => 'Content tidak boleh kosong!',
        ]);

         $posts = new Post;
        $posts->title      =$request->title;
        $posts->content    =$request->content;
       
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $posts->cover = $name; 
        }
        $posts->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('post.index');
        return redirect()->back()->with('success', 'Post berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('post.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('post.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $posts = Post::findOrFail($id);
        $posts->title      =$request->title;
        $posts->content    =$request->content;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $posts->cover = $name; 
        }
        $posts->save();

        session()->flash('success', 'Data Berhasil Dirubah');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::findOrFail($id);
        
        if($posts->cover) {
            $filePath = public_path('images/post/' . $posts->cover);
            if (File::exists($filePath)){
                File::delete($filePath);
            }
        }

        $posts->delete();
         return redirect()->route('post.index')->with('success', 'Data Berhasil Dihapus');
    }
}
