<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Store\Models\Utilisateur;

class UtilisateurController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for utilisateur
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, '\Store\Models\Utilisateur', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "idutilisateur";

        $utilisateur = Utilisateur::find($parameters);
        if (count($utilisateur) == 0) {
            $this->flash->notice("The search did not find any utilisateur");

            $this->dispatcher->forward([
                "controller" => "utilisateur",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $utilisateur,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a utilisateur
     *
     * @param string $idutilisateur
     */
    public function editAction($idutilisateur)
    {
        if (!$this->request->isPost()) {

            $utilisateur = Utilisateur::findFirstByidutilisateur($idutilisateur);
            if (!$utilisateur) {
                $this->flash->error("utilisateur was not found");

                $this->dispatcher->forward([
                    'controller' => "utilisateur",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->idutilisateur = $utilisateur->idutilisateur;

            $this->tag->setDefault("idutilisateur", $utilisateur->idutilisateur);
            $this->tag->setDefault("nom", $utilisateur->nom);
            $this->tag->setDefault("prenom", $utilisateur->prenom);
            $this->tag->setDefault("statut", $utilisateur->statut);
            $this->tag->setDefault("mail", $utilisateur->mail);
            $this->tag->setDefault("pseudo", $utilisateur->pseudo);
            $this->tag->setDefault("signature", $utilisateur->signature);
            $this->tag->setDefault("motDePasse", $utilisateur->motDePasse);
            $this->tag->setDefault("photo", $utilisateur->photo);
            $this->tag->setDefault("id_voiture", $utilisateur->id_voiture);
            
        }
    }

    /**
     * Creates a new utilisateur
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "utilisateur",
                'action' => 'index'
            ]);

            return;
        }

        $utilisateur = new Utilisateur();
        $utilisateur->idutilisateur = $this->request->getPost("idutilisateur");
        $utilisateur->nom = $this->request->getPost("nom");
        $utilisateur->prenom = $this->request->getPost("prenom");
        $utilisateur->statut = $this->request->getPost("statut");
        $utilisateur->mail = $this->request->getPost("mail");
        $utilisateur->pseudo = $this->request->getPost("pseudo");
        $utilisateur->signature = $this->request->getPost("signature");
        $utilisateur->motDePasse = $this->request->getPost("motDePasse");
        $utilisateur->photo = $this->request->getPost("photo");
        $utilisateur->idVoiture = $this->request->getPost("id_voiture");
        

        if (!$utilisateur->save()) {
            foreach ($utilisateur->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "utilisateur",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("utilisateur was created successfully");

        $this->dispatcher->forward([
            'controller' => "utilisateur",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a utilisateur edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "utilisateur",
                'action' => 'index'
            ]);

            return;
        }

        $idutilisateur = $this->request->getPost("idutilisateur");
        $utilisateur = Utilisateur::findFirstByidutilisateur($idutilisateur);

        if (!$utilisateur) {
            $this->flash->error("utilisateur does not exist " . $idutilisateur);

            $this->dispatcher->forward([
                'controller' => "utilisateur",
                'action' => 'index'
            ]);

            return;
        }

        $utilisateur->idutilisateur = $this->request->getPost("idutilisateur");
        $utilisateur->nom = $this->request->getPost("nom");
        $utilisateur->prenom = $this->request->getPost("prenom");
        $utilisateur->statut = $this->request->getPost("statut");
        $utilisateur->mail = $this->request->getPost("mail");
        $utilisateur->pseudo = $this->request->getPost("pseudo");
        $utilisateur->signature = $this->request->getPost("signature");
        $utilisateur->motDePasse = $this->request->getPost("motDePasse");
        $utilisateur->photo = $this->request->getPost("photo");
        $utilisateur->idVoiture = $this->request->getPost("id_voiture");
        

        if (!$utilisateur->save()) {

            foreach ($utilisateur->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "utilisateur",
                'action' => 'edit',
                'params' => [$utilisateur->idutilisateur]
            ]);

            return;
        }

        $this->flash->success("utilisateur was updated successfully");

        $this->dispatcher->forward([
            'controller' => "utilisateur",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a utilisateur
     *
     * @param string $idutilisateur
     */
    public function deleteAction($idutilisateur)
    {
        $utilisateur = Utilisateur::findFirstByidutilisateur($idutilisateur);
        if (!$utilisateur) {
            $this->flash->error("utilisateur was not found");

            $this->dispatcher->forward([
                'controller' => "utilisateur",
                'action' => 'index'
            ]);

            return;
        }

        if (!$utilisateur->delete()) {

            foreach ($utilisateur->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "utilisateur",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("utilisateur was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "utilisateur",
            'action' => "index"
        ]);
    }

}
