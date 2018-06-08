<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function index()
    {
        $latest_posts = Post::with('category')->orderBy('created_at', 'desc')->take(6)->get();

//        $categories = Category::with('posts')->orderBy('created_at', 'desc')->get();
//        $categories->setRelation('posts', $categories->posts->take(5));
//        dd($categories);

        $categories = Category::orderBy('id', 'desc')->get();

        foreach ($categories as $category)
        {
            $posts[$category->title] = $category->posts()->take(3)->orderBy('created_at', 'desc')->get();

        }
        return view('home', compact('latest_posts', 'categories', 'posts'));

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {

        $post = Post::where('slug','=', $slug)->firstOrFail();

        $post = Post::with('category')->findOrFail($post->id);



        $category_posts = Category::find($post->category->id)->posts()->orderBy('created_at', 'desc')->take(3)->get();

        $post->increment('views');

        $next_post = null;
        $prev_post = null;

        if(Post::where('id', '=', $post->id + 1)->exists()){
            $next_post = Post::find($post->id + 1);
        }

        if(Post::where('id', '=', $post->id - 1)->exists()){
            $prev_post = Post::find($post->id - 1);
        }



       return view('post', compact('post', 'category_posts', 'next_post', 'prev_post'));


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

    public function most_viewed(){
//        $posts = Post::where('is_featured', 1)->orderBy('created_at', 'desc')->paginate(12);

        $posts = Post::orderBy('views','desc')->paginate(12);


        return view('most_viewed', compact('posts'));
    }

    public function featured() {
        $posts = Post::where('is_featured', 1)->orderBy('created_at', 'desc')->paginate(12);

        return view('featured', compact('posts'));
    }

    public function query(Request $request){

        $query = $request->validate([
            'search' => 'required|max:255|min:2',
        ]);
        $query = $request->get('query');

        $posts = Post::where('title', 'like', '%'.$query.'%')->orWhere('description', 'like', '%'.$query.'%')->orderBy('created_at', 'desc')->take(20)->get();

        $posts_count = $posts->count();

        return view('search', compact('posts', 'query', 'posts_count'));
    }
}
