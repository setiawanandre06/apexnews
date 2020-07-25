<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Tag;
use App\Category;
use App\Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // GET ALL
    public function index()
    {
        $posts = Post::paginate(20);
        return view('posts.posts')->with(
            [
                'posts'     =>  $posts
            ]
        );
    }

    // Get id
    public function show($id)
    {
    	// TODO : 
        $post = Post::find($id);
        $images = $post->images;
        $videos = $post->videos;
        return view('posts.post')->with(
            [
                'post'      =>  $post,
                'images'    =>  $images,
                'videos'    =>  $videos
            ]
        );
    }

    public function newPost()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.new-post')->with(
            [
                'categories'      =>  $categories,
                'tags'            =>  $tags
            ]
        );
    }

    // POST
    public function store(Request $request)
    {
    	// TODO : 
        $request->validate([
            'post_title'    =>  'required',
            'post_content'  =>  'required',
            'post_category' =>  'required',
        ]);

        $user = Auth::user();

        $post = new Post();
        $post->title = $request->input('post_title');
        $post->content = $request->input('post_content');
        $post->category_id = intval($request->input('post_category'));
        $post->author_id = $user->id;
        $post->post_type = 'text';

        $post->save();

        if ($request->has('post_tags')) 
        {
            $post->tags()->attach($request->post_tags);
        }

        if ($request->hasFile('post_images'))
        {
            $image_counter = 0;
            $images = $request->file('post_images');  // get files from the request
            foreach ($images as $image) {
                $path = $image->store('public');
                $image = new Image();
                $image->description = '';
                $image->url = $path;
                $image->post_id = $post->id;
                if ($image_counter == 0) {
                    $image->featured = true;
                }
                else {
                    $image->featured = false;
                }
                $image->save();
                $image_counter++;
            }
        }

        return redirect()->back()->with('message', 'Post Created');
    }
}
