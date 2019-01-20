<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categories;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {

        if(Auth::user()->level == 1){
            $posts = Post::orderBy('created_at','desc')->paginate(5);
        }
        else{
            $posts = Post::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
        }




        return view('admin/post/list_post',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $categories = Categories::all();
        return view('admin/post/add_post',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|unique:posts',
            'summary'=>'required',
            'body'=>'required',
            'image'=>'required',
            'categories_id'=>'required',
            'breaking_news'=>'required'
        ]);

        //Handle file upload
        if($request->hasFile('image')){
            //get filename with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extsion
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('public/upload/news_image',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }


        //create post
        $post = new Post;
        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->body = $request->body;
        $post->image = $fileNameToStore;
        $post->categories_id = $request->categories_id;
        $post->breaking_news = $request->breaking_news;
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('admin/post/add')->with('alert','Add success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categories::all();
        $post = Post::find($id);
        return view('admin/post/edit_post',['post'=>$post],['categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $post =  Post::find($id);

        $this->validate($request,[
            'title'=>'required',
            'summary'=>'required',
            'body'=>'required',
            'categories_id'=>'required',
            'breaking_news'=>'required'
        ]);

        //Handle file upload
        if($request->hasFile('image')){
            //get filename with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extsion
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('public/upload/news_image',$fileNameToStore);
            Storage::delete('public/upload/news_image/'.$post->image);
        }else{
            $fileNameToStore = $post->image;
        }


        //edit post

        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->body = $request->body;
        $post->image = $fileNameToStore;
        $post->categories_id = $request->categories_id;
        $post->breaking_news = $request->breaking_news;
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('admin/post/edit/'.$id)->with('alert','Edit success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post = Post::find($id);

        if($post->image !== 'noimage.jgp'){
            //delete image
            Storage::delete('public/upload/news_image/'.$post->image);
        }

        $post->delete();
        return redirect('admin\post\list')->with('alert','Delete success');
    }
}
