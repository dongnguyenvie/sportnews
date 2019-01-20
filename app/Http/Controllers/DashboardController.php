<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Collector;
use App\Collects;
use App\Advertisement;
use Illuminate\Support\Facades\DB;
use App\Charts\SampleChart;
use App\Categories;
use Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $collectors = Collector::all();
        $collects = Collects::all();
        $users = User::all();
        $ad_total = Advertisement::all()->sum('price');
        $latest_post = Post::orderBy('created_at','desc')->orderBy('created_at','desc')->take(3)->get();
        $latest_collects = Collects::orderBy('created_at','desc')->orderBy('created_at','desc')->take(3)->get();

        $categories = Categories::all();
        $cate = [];
        $count_post = [];
        $colors = ['#6ed3cf','#9068be','#7dce94','#e62739','#c9af98','#ed8a63','#845007','#feda6a','#d4d4dc','#393f4d'];



        foreach ($categories as $categorie) {
            $counter = Post::where('categories_id',$categorie->id)->count();
            //$rand_color = '#' . dechex(rand(0x000000, 0xFFFFFF));
            array_push($cate,$categorie->name);
            array_push($count_post,$counter);
            //array_push($color,$rand_color);
        }



        $chart = new SampleChart;
        $chart->labels($cate);
        $chart->dataset('Posts', 'pie', $count_post)->color($colors);


        if(Auth::user()->level == 1){
            return view('admin/dashboard/dasboard',['posts'=>$posts,'users'=>$users,'collectors'=>$collectors,
                                                'collects'=>$collects,'ad_total'=>$ad_total,'latest_post'=>$latest_post,
                                                'latest_collects'=>$latest_collects,'chart'=>$chart]);
        }else{
            $posts = Post::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
            return view('admin/post/list_post',['posts'=>$posts]);
        }

    }

}
