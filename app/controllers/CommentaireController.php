<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Store\Models\Commentaire;

class CommentaireController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for commentaire
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, '\Store\Models\Commentaire', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "idcommentaire";

        $commentaire = Commentaire::find($parameters);
        if (count($commentaire) == 0) {
            $this->flash->notice("The search did not find any commentaire");

            $this->dispatcher->forward([
                "controller" => "commentaire",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $commentaire,
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
     * Edits a commentaire
     *
     * @param string $idcommentaire
     */
    public function editAction($idcommentaire)
    {
        if (!$this->request->isPost()) {

            $commentaire = Commentaire::findFirstByidcommentaire($idcommentaire);
            if (!$commentaire) {
                $this->flash->error("commentaire was not found");

                $this->dispatcher->forward([
                    'controller' => "commentaire",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->idcommentaire = $commentaire->idcommentaire;

            $this->tag->setDefault("idcommentaire", $commentaire->idcommentaire);
            $this->tag->setDefault("id_post", $commentaire->id_post);
            $this->tag->setDefault("id_utilisateur", $commentaire->id_utilisateur);
            $this->tag->setDefault("commentaire", $commentaire->commentaire);
            
        }
    }

    /**
     * Creates a new commentaire
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "commentaire",
                'action' => 'index'
            ]);

            return;
        }

        $commentaire = new Commentaire();
        $commentaire->idcommentaire = $this->request->getPost("idcommentaire");
        $commentaire->idPost = $this->request->getPost("id_post");
        $commentaire->idUtilisateur = $this->request->getPost("id_utilisateur");
        $commentaire->commentaire = $this->request->getPost("commentaire");
        

        if (!$commentaire->save()) {
            foreach ($commentaire->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "commentaire",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("commentaire was created successfully");

        $this->dispatcher->forward([
            'controller' => "commentaire",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a commentaire edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "commentaire",
                'action' => 'index'
            ]);

            return;
        }

        $idcommentaire = $this->request->getPost("idcommentaire");
        $commentaire = Commentaire::findFirstByidcommentaire($idcommentaire);

        if (!$commentaire) {
            $this->flash->error("commentaire does not exist " . $idcommentaire);

            $this->dispatcher->forward([
                'controller' => "commentaire",
                'action' => 'index'
            ]);

            return;
        }

        $commentaire->idcommentaire = $this->request->getPost("idcommentaire");
        $commentaire->idPost = $this->request->getPost("id_post");
        $commentaire->idUtilisateur = $this->request->getPost("id_utilisateur");
        $commentaire->commentaire = $this->request->getPost("commentaire");
        

        if (!$commentaire->save()) {

            foreach ($commentaire->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "commentaire",
                'action' => 'edit',
                'params' => [$commentaire->idcommentaire]
            ]);

            return;
        }

        $this->flash->success("commentaire was updated successfully");

        $this->dispatcher->forward([
            'controller' => "commentaire",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a commentaire
     *
     * @param string $idcommentaire
     */
    public function deleteAction($idcommentaire)
    {
        $commentaire = Commentaire::findFirstByidcommentaire($idcommentaire);
        if (!$commentaire) {
            $this->flash->error("commentaire was not found");

            $this->dispatcher->forward([
                'controller' => "commentaire",
                'action' => 'index'
            ]);

            return;
        }

        if (!$commentaire->delete()) {

            foreach ($commentaire->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "commentaire",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("commentaire was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "commentaire",
            'action' => "index"
        ]);
    }

}
