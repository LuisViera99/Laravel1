<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =Post::paginate(2);
       return view('dashboard/post/index',compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id','title');


        echo view('dashboard/post/create', compact('categories'));

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {



        // $validated = $request -> validate(StoreRequest::myRules());

        // dd($validated);
    
    
        //     $data = array_merge($request->all(),['image' => '']);
    //   dd($data);


        // $data = $request->validated();
        // $data['slug'] = Str::slug($data['title']) ;
        // dd($data);

      Post::create($request->validated());
        //echo $request -> input('slug');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
            echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','title');


        echo view('dashboard/post/edit', compact('categories','post'));

        //
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
      
        $post->update($request->validated());
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        echo "Destroy";
    }
}
