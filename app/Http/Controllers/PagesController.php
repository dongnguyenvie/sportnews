<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Post;
use App\Video;
use App\League;
use App\LiveMatch;
use App\User;
use App\Collects;
use App\Advertisement;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewCollectorPost;
class PagesController extends Controller
{
    function __construct(){
        $categories = Categories::all();
        $posts = Post::all();
        $hot_post = Post::where('Breaking_news',1)->orderBy('created_at','desc')->take(4)->get();
        $latest_post = Post::orderBy('created_at','desc')->orderBy('created_at','desc')->take(4)->get();
        $most_views = Post::orderBy('views','desc')->take(4)->get();
        $league = League::all();
        $live_match = LiveMatch::where('status',1)->get();
        $header_ad = Advertisement::all()->where('position',1);
        $side_ad = Advertisement::all()->where('position',2);

        view()->share('header_ad',$header_ad);
        view()->share('side_ad',$side_ad);
        view()->share('live_match',$live_match);
        view()->share('categories',$categories);
        view()->share('posts',$posts);
        view()->share('hot_post',$hot_post);
        view()->share('latest_post',$latest_post);
        view()->share('most_views',$most_views);
        view()->share('league',$league);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/home');
    }

    public function categories($id)
    {

        $posts = Post::where('categories_id',$id)->orderBy('created_at','desc')->paginate(4);
        return view('pages/categories',['posts'=>$posts]);
    }



   public function post($id){
     $post = Post::find($id);
     $relate_post = post::where([
        ['categories_id',$post->categories_id],
        ['id','!=',$post->id],
     ])->orderBy('created_at','desc')->take(2)->get();

     $post->increment('views');


    return view('pages/single',['post'=>$post,'relate_post'=>$relate_post]);
   }

   public function search(Request $request){

    $key = $request->search_key;
    $posts = Post::where('title','like',"%$key%")
                        ->orWhere('summary','like',"%$key%")
                        ->orWhere('body','like',"%$key%")->take(30)
                        ->paginate(5);
   return view('pages/search',['posts'=>$posts,'key'=>$key]);
  }


  public function video(){
    $videos = Video::all();
    return view('pages/videos',['videos'=>$videos]);

  }

  public function videosCate($id){
    $videos = Video::where('categories_id',$id)->paginate(8);
    return view('pages/videos-cate',['videos'=>$videos]);
  }


  public function watch($id){
      $video = Video::find($id);
      $realte_video = Video::where([
          ['categories_id',$video->categories_id],
          ['id','!=',$video->id],
      ])->orderBy('created_at','desc')->take(3)->get();
      return view('pages/watch',['video'=>$video,'realte_video'=>$realte_video]);
  }

    public function standing($id){
        $data = json_decode(file_get_contents(url('/').'/api/league/'.$id),true);

        $lg = League::find($id);

        return view('pages/standing',['data'=>$data,'lg'=>$lg]);
    }

    public function fixtures($id){
        $data = json_decode(file_get_contents(url('/').'/api/fixtures/'.$id),true);

        $lg = League::find($id);

        return view('pages/fixtures',['data'=>$data,'lg'=>$lg]);
    }

    public function score($id){
        $data = json_decode(file_get_contents(url('/').'/api/live/'.$id),true);

        $lg = League::find($id);

        return view('pages/live',['data'=>$data,'lg'=>$lg]);
    }

    public function collect(){
        $collects = Collects::where('status',1)->orderBy('created_at','desc')->paginate(4);
        return view('pages/collect',['collects'=>$collects]);
    }

    public function singlecollect($id){
        $collect = Collects::find($id);
        return view('pages/single-collect',['collect'=>$collect]);
    }

    public function livematch($id){
        $match = LiveMatch::find($id);
        return view('pages/live-match',['match'=>$match]);
    }

}
