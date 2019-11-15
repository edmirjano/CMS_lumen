<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\PostsModel;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function all(Request $request){
        if ($request->has('kategoria')) {
            $cat = $request->input('kategoria');
            $posts = PostsModel::where([['category', '=', $cat]])->simplePaginate(10);
            return response()->json($posts);
        } else {
            $d = PostsModel::paginate(10);
            return response()->json($d);
        }
    }

    //
}
