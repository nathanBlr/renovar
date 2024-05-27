<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
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
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=> 'required',
                'image'=> 'image|nullable|max:1999|mimes:png,jpg,jpeg,webp'
            ]
            );
        
            $data = [
                'name' => $request->name,
            ];
        
            if ($request->hasFile('image')) {
                $data['image_path'] = $this->storeImage($request);
            }
        
            Photo::create($data);
        
        return redirect(route('rotas.index', 'galeria'))->with('success', 'Post criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
