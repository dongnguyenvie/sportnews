<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use \App\Mail\NewCollectorPost;
use App\Collector;
use App\Collects;
use App\Categories;
use App\Post;
use App\Video;
use App\League;
use App\LiveMatch;
use App\Advertisement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CollectorController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest:collector')->except('logout');

        $categories = Categories::all();
        $posts = Post::all();
        $hot_post = Post::where('Breaking_news',1)->orderBy('created_at','desc')->take(4)->get();
        $latest_post = Post::orderBy('created_at','desc')->orderBy('created_at','desc')->take(4)->get();
        $most_views = Post::orderBy('views','desc')->take(4)->get();
        $league = League::all();
        $live_match = LiveMatch::where('status',1)->get();
        $header_ad = Advertisement::all()->where('position',1);

        view()->share('live_match',$live_match);
        view()->share('categories',$categories);
        view()->share('posts',$posts);
        view()->share('hot_post',$hot_post);
        view()->share('latest_post',$latest_post);
        view()->share('most_views',$most_views);
        view()->share('league',$league);
        view()->share('header_ad',$header_ad);
    }


    public function login(){
        return view('pages/login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'enter Email',
            'password.required'=>'enter Password'
        ]);

        if(Auth::guard('collector')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/');
        }else{
            return redirect('pages/login')->with('alert','Login failed');
        }
    }

    public function register(){
        return view('pages/register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            're-password'=>'required|same:password',
        ],[
            're-password.same'=>'re-password is wrong',
        ]);

        $collector  = new Collector;
        $collector->name = $request->name;
        $collector->email = $request->email;
        $collector->password = bcrypt($request->password);
        $collector->save();

        return view('pages/login')->with('alert','Add success');

    }

    public function logout(){
        Auth::guard('collector')->logout();
        return redirect('/');
    }

    public function profile($id){

        $collector = Collector::find($id);
        $collects = Collects::where('collector_id',$id)->paginate(5);
        return view('pages/profile',['collector'=>$collector,'collects'=>$collects]);
    }

    public function newpost(){
        return view('pages/newpost');
    }

    public function postnewpost(Request $request){
        $this->validate($request,[
            'title'=>'required|unique:collects',
            'summary'=>'required',
            'body'=>'required',
            'image'=>'required',
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
            $path = $request->file('image')->storeAs('public/upload/collector_image',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }


        //create post
        $collects = new Collects;
        $collects->title = $request->title;
        $collects->summary = $request->summary;
        $collects->body = $request->body;
        $collects->image = $fileNameToStore;
        $collects->collector_id = Auth::guard('collector')->user()->id;
        $collects->status =0;
        $collects->save();

        \Mail::to(Auth::guard('collector')->user()->email)->send(new NewCollectorPost);

        return redirect('new-post')->with('alert','Add success');
    }

    public function list(){
        if(!Gate::allows('admin')){
            abort(404);
        }

        $collectors = Collector::paginate(5);
        return view('admin/collector/list',['collectors'=>$collectors]);
    }

    public function delete($id){
        if(!Gate::allows('admin')){
            abort(404);
        }
        $collectors = Collector::find($id);
        $collectors->delete();
        return redirect('admin\collector\list')->with('alert','Delete success');
    }

    public function collectsDelete($id)
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        $user_id = Auth::guard('collector')->user()->id;
        $collect = Collects::find($id);

        if($collect->image !== 'noimage.jgp'){
            //delete image
            Storage::delete('public/upload/collector_image/'.$collect->image);
        }

        $collect->delete();
        return redirect('profile/'.$user_id)->with('alert','Delete success');
    }

    public function getCollectEdit($id){
        $collect = Collects::find($id);
        return view('pages/editpost',['collect'=>$collect]);
    }

    public function postCollectEdit(Request $request,$id){
        $collect =  Collects::find($id);

        $this->validate($request,[
            'title'=>'required',
            'summary'=>'required',
            'body'=>'required',
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
            $path = $request->file('image')->storeAs('public/upload/collector_image',$fileNameToStore);
        }else{
            $fileNameToStore = $collect->image;
        }


        //create post

        $collect->title = $request->title;
        $collect->summary = $request->summary;
        $collect->body = $request->body;
        $collect->image = $fileNameToStore;
        $collect->collector_id = Auth::guard('collector')->user()->id;
        $collect->status =0;
        $collect->save();

        return redirect('edit-post/'.$id)->with('alert','Edit success');
    }
}
