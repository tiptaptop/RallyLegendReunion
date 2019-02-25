<?php

namespace App\Repositories;

class EvenementRepository extends ResourceRepository
{
    public function __construct(Evenement $evenement)
    {
        $this->model = $evenement;
    }
}

?>