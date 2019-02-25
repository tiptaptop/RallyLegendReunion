<?php

namespace App\Repositories; 

use App\Posts;

class PostRepository
{
    protected $posts; 
    
    public function __construct(Posts $post)
    {
        $this->post = $post;
    }

    public function queryWithUserAndTags()
    {
        return $this->post->with('user', 'tags')->orderBy('posts.created_at', 'desc');
    }

    public function getWithUserAndTagsPaginate($n)
    {
        return $this->queryWithUserAndTags()->paginate($n);
    }

    public function getWithUserAndTagsForTagPaginate($tag, $n)
    {
        return $this->queryWithUserAndTags->whereHas('tags', function($q) use ($tag){
            $q->where('tags.tag_url', $tag);
        })->paginate($n);
    }

    public function getPaginate($n)
    {
        return $this->post->with('user')->orderBy('posts.created_at', 'desc')->paginate($n);
    }

    public function store($inputs)
    {
        $this->post->create($inputs);
    }

    public function destroy($id)
    {
        $post = $this->post->findOrFail($id)->delete();
        $post->tags()->detach();
        $post->delete();

    }
}



?>