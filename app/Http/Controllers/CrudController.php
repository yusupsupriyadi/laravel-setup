<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('crud.index', compact('post'));
    }
}
