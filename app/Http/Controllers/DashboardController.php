<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){


        $allPost = Post:: query()->get();

        $posts = array();
        foreach($allPost as $post){
            $posts[]=array(

                'id'=> $post->id,
                'status'=> $post->status ??'',
                'photo'=> $post->photo ??'',
                'likes'=> count (json_decode($post->likes))?? 0,
                'shares'=> count (json_decode($post->shares))?? 0,
                'comments'=> $post->comments??'',
                'user'=>User::find($post->user_id),
                'created_at'=> date("F j, Y, g:i a" , strtotime($post->created_at)),
            );
        }


        return view('dashboard', compact('posts'));
    }
}
