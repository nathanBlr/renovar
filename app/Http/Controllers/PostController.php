<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title' =>'required',
                'content' =>'required',
                'image'=> 'image|nullable|max:1999'
            ]
            );
        $post = Post::findOrFail($id);
        $post->title = $request->title; 
        $post->content = $request->content;
        if ($request->hasFile('image')) {
            $post->image_path = $request->image->store('images', 'public');
        }
        $post->save();
        return redirect(route('rotas.index', 'noticias'))->with('success', 'Post atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        $post = Post::find($id);
        $post->delete();
        return redirect(route('rotas.index', 'noticias'))->with('success', 'Post excluído com sucesso');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' =>'required',
                'content' =>'required', 
                'image'=> 'image|nullable|max:1999|mimes:png,jpg,jpeg,webp'
            ]
            );
        
            $data = [
                'title' => $request->title,
                'content' => $request->content,
            ];
        
            if ($request->hasFile('image')) {
                $data['image_path'] = $this->storeImage($request);
            }
        
            Post::create($data);
        
        return redirect(route('rotas.index', 'noticias'))->with('success', 'Post criado com sucesso');
    }
    private function storeImage($request){
        $newImageName = uniqid(). '-'. $request->title . '.'.
        $request->image->extension();

        return $request->image->move(public_path('images'), $newImageName);
    }
}
