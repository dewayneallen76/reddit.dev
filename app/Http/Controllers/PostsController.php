<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Vote;
use App\Models\Post;
use App\Models\BaseModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $data['posts'] = (isset($request->search)) ?  Post::searchPosts($request->search)->paginate(10) : Post::with('user')->paginate(10);

       return view('posts.index')->with($data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // associative array whose keys are input names in the request
        // values are the validation rules
        $rules = [
            'title'   => 'required|min:5',
            'url'     => 'required|url',
            'content' => 'required',
        ];

        // will redirect back with $errors object populated if validation fails
        $request->session()->flash('ERROR_MESSAGE', 'Post not created. See error messages below input');
        $this->validate($request, $rules);
        $request->session()->forget('ERROR_MESSAGE');

        $post = new Post();
        $post->created_by = $request->user()->id;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post created successfully');
        Log::info('New Post Created' . $post);
        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['post'] = Post::findOrFail($id);
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['post'] = Post::findOrFail($id);
        return view('posts.edit')->with($data);
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
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post updated successfully');
        return redirect()->action('PostsController@show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete($id);

        $request->session()->flash('SUCCESS_MESSAGE', 'Post deleted successfully');
        return redirect()->action('PostsController@index');
    }

    public function vote(Request $request)
    {
        $vote = Vote::firstOrCreate(
            array(
                    'user_id' => $request->user()->id,
                    'post_id' => $request->input('post_id'),
                )
            );

        $vote->vote = $request->input('vote');
        $vote->save();

        $post = $vote->post;

        $post->upVotes = $post->upVotes();
        $post->downVotes = $post->downVotes();

        $data = [
            'upVotes' => $post->upVotes,
            'downVotes' => $post->downVotes,
            'vote' => $vote->vote
        ];
        return back()->with($data);
    }
}
