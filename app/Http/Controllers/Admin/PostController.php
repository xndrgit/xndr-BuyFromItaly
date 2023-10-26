<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    private $validationRules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(4);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules);

        $post = new Post();
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->promo_price = $request->input('promo_price');
        $post->shop_link = $request->input('shop_link');
        $post->category_id = $request->input('category_id');

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverPath = $cover->store('post-covers', 'public');
            $post->cover = $coverPath;
        }

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->validationRules);

        $post = Post::findOrFail($id);

        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->promo_price = $request->input('promo_price');
        $post->shop_link = $request->input('shop_link');
        $post->category_id = $request->input('category_id');

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverPath = $cover->store('post-covers', 'public');
            $post->cover = $coverPath;
        }

        $post->save();
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully');
    }
}
