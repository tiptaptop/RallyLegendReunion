<?php

namespace App\Http\Controllers;

use App\Repositories\EvenementRepository;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    protected $evenementRepository; 

    protected $nbrPerPage = 4;

    public function __construct(EvenementRepository $evenementRepository)
    {
        $this->evenementRepository = $evenementRepository;
    }

    public function index()
    {
        $evenement = $this->evenementRepository->getPaginate($this->nbrPerPage);
        $links = $evenement->render();

        return view('evenement.index', compact('evenement', 'links'));
    }
}
