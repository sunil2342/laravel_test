<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post\Post;
use App\Services\Post\ManagePost;

class PostController extends Controller
{

    /**
     * The post controller instance.
     */
    protected $post;
    private $managePost;

    /**
     * Create a new controller instance.
     *
     * @param  Post  $post
     * @return void
     */
    public function __construct(Post $post, ManagePost $managePost)
    {
        $this->post = $post;
        $this->managePost = $managePost;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', ['posts' => $this->post->paginate(config('customization.number_of_data_pagination'))]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        try {
            $request['user_id']= auth()->user()->id;
            $this->managePost->createPost($request->except('_token'));
            return redirect()->back()->with('success',trans('app.record_created'));
        } catch (Exception $e) {
            return redirect()->back()->with('error',trans('app.something_went_wrong'));
            
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return view('posts.show', ['post' => $this->post->findOrFail($id)]);
        } catch (Exception $e) {
            return redirect()->back()->with('error',trans('app.something_went_wrong'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            return view('posts.edit', ['post' => $this->post->findOrFail($id)]);
        } catch (Exception $e) {
            return redirect()->back()->with('error',trans('app.something_went_wrong'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
