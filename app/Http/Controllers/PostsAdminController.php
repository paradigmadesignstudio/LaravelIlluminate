<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;

class PostsAdminController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {

        //$posts = $this->post->all();//para listar todos os registros
        $posts = $this->post->paginate(3);//para fazer a paginação de um determinado numero de posts
        return view('admin.posts.index', compact('posts'));
    }

    public function create(){
        return view('admin.posts.create');
    }
}
