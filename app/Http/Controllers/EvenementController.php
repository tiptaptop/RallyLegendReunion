<?php

namespace App\Http\Controllers;

use App\Repositories\EvenementRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class EvenementController extends Controller
{
    protected $evenementRepository; 

    protected $nbrPerPage = 4;

    public function __construct(EvenementRepository $evenementRepository)
    {
        $this->middleware('auth', ['except' => ['index', 'indexTag','myevent']]);
        $this->middleware('admin', ['only' => 'destroy']);
        $this->evenementRepository = $evenementRepository;
    }

    public function index()
    {
        $evenement = $this->evenementRepository->getPaginate($this->nbrPerPage);
        $links = $evenement->render(); 

        return view('evenement.index', compact('evenement', 'links'));
    }

public function myevent( $idevent ){
    var_dump($idevent);
    $evenement = $this->evenementRepository->getPaginate($this->nbrPerPage);
    $links = $evenement->render(); 

    return view('evenement.myevent', compact('evenement', 'links'));

}

    public function create()
    {
        return view('evenement.add');
    }

    public function store(PostRequest $request, TagRepository $tagRepository)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

        $post = $this->evenementRepository->store($inputs);

        if(isset($inputs['tags']))
        {
            $tagRepository->store($post, $inputs['tags']);
        }

        return redirect(route('post.index'));
    }

    public function destroy($id)
    {
        $this->evenementRepository->destroy($id);

        return redirect()->back();
    }    

    public function indexTag($tag)
    {
        $evenement = $this->evenementRepository->getWithUserAndTagsForTagPaginate($tag, $this->nbrPerPage);
        $links = $evenement->render(); 

        return view('evenement.liste', compact('evenement', 'links'))->with('info', 'Résultats pour la recherche du mot-clé : ' . $tag);
    }

   
}
