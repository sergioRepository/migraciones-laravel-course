<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $Post = Post::find(2);
        $Category = Category::find(2);
        dd($Category->posts);

       // $Post->delete();
       // $Post->update(
           // [
                //'title'=> 'title1new',
                //'slug'=> 'slug1',
                //'descripcion' => 'midescripcion',
                //'content' => 'contenido1',
                //'image' => 'iamgenes',
                //'category_id' => '1',
                //'posted' => 'yes',
            // ]
        //);
       // return 'datos eliminados';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
