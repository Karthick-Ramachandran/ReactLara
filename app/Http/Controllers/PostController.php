<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use Session;
use App\Like;
use App\Comments;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('discuss.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'title' => 'required|min:6',
        'image' => 'required',
     'content' => 'required|min:50'
        ]);


        $post = new Post;
        $post->title = $request->title;
        $post->user_id = Auth::user()->id;
        $post->content = $request->content;
        
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('post', $image_new_name);

        $post->image = 'post/'.$image_new_name;
        $post->save();
        Session::flash('success', 'Post created');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $like = Like::where('post_id', '=', $id)->get();
        $comment = Comments::where('post_id', '=', $id)->get();
        if(Like::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->exists()) {
            $data = "Liked";
        } else {
            $data =  "Unliked";

        }
        return view('discuss.show')->with('post', $post)->with('like', $like)->with('data', $data)->with('comment', $comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function like($id)
    {
        $app = new Like;
        $app->post_id = $id;
        $app->user_id = Auth::user()->id;
        $app->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unlike($id)
    {
        $rem = Like::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first();
        $rem->delete();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request, $id)
    {
        $app = new Comments;
        $app->user_id = Auth::user()->id;
        $app->post_id = $id;
        $app->content = $request->content;
        $app->save();
        return redirect()->back();

    }
}
