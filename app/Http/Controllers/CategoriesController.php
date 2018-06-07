<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($slug)
    {
        $category = Category::where('slug', '=', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('created_at', 'desc')->paginate(9);

        return view('category', compact('category','posts'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
