<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    protected $postRepostitory;

    protected $nbrPerPage = 4; 

    public function __construct(PostRepository $postRepostitory)
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('admin', ['only' => 'destroy']);
        $this->postRepository = $postRepostitory;
    }

    public function index()
    {
        $posts = $this->postRepository->getPaginate($this->nbrPerPage);
        $links = $posts->render(); 

        return view ('posts.liste', compact('posts', 'links'));
    }

    public function create()
    {
        return view('posts.add');
    }

    public function store(PostRequest $request)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

        $this->postRepository->store($inputs);

        return redirect(route('post.index'));
    }

    public function destroy($id)
    {
        $this->postRepository->destroy($id);

        return redirect()->back();
    }    
    
}
