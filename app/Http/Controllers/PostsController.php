<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
    //     $post = DB::select("SELECT * FROM posts WHERE id= :id;",
    // [
    //     'id' => 3
    // ]);
    $posts = DB::table("posts")
    -> where('id','=',5);
    // ->delete();
    // ->update([
    //     'title' => 'Manh Tran Tien',
    //     'body' => 'A new post of Manh Tran said to Nhung hot gril and very rich ( money )',
    // ]);
                            // ->insert([
                            //     'title' => 'Manh tran',
                            //     'body' => 'A new post of Manh Tran said to Nhung hot gril'
                            // ]);
                            // ->min('id');
                            // ->whereNotNull("body")
                            // ->latest();
                            // ->orderBy('id', 'desc');
                                // ->where("created_at", ">",now()->subDay())
                                // ->orWhere('id', '>',0)
                                // ->get();
        DD($posts);
        // return view('posts.index');
    }
}
