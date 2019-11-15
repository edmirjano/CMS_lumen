<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\CatModel;

class CategoryController extends Controller
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
    public function all(){
        return response()->json(CatModel::paginate(10));
    }

    //
}
