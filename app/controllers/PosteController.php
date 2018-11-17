<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Store\Models\Poste;

class PosteController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for poste
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, '\Store\Models\Poste', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "idposte";

        $poste = Poste::find($parameters);
        if (count($poste) == 0) {
            $this->flash->notice("The search did not find any poste");

            $this->dispatcher->forward([
                "controller" => "poste",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $poste,
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
     * Edits a poste
     *
     * @param string $idposte
     */
    public function editAction($idposte)
    {
        if (!$this->request->isPost()) {

            $poste = Poste::findFirstByidposte($idposte);
            if (!$poste) {
                $this->flash->error("poste was not found");

                $this->dispatcher->forward([
                    'controller' => "poste",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->idposte = $poste->idposte;

            $this->tag->setDefault("idposte", $poste->idposte);
            $this->tag->setDefault("id_utilisateur", $poste->id_utilisateur);
            $this->tag->setDefault("id_vehicule", $poste->id_vehicule);
            $this->tag->setDefault("descriptif", $poste->descriptif);
            
        }
    }

    /**
     * Creates a new poste
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "poste",
                'action' => 'index'
            ]);

            return;
        }

        $poste = new Poste();
        $poste->idposte = $this->request->getPost("idposte");
        $poste->idUtilisateur = $this->request->getPost("id_utilisateur");
        $poste->idVehicule = $this->request->getPost("id_vehicule");
        $poste->descriptif = $this->request->getPost("descriptif");
        

        if (!$poste->save()) {
            foreach ($poste->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "poste",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("poste was created successfully");

        $this->dispatcher->forward([
            'controller' => "poste",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a poste edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "poste",
                'action' => 'index'
            ]);

            return;
        }

        $idposte = $this->request->getPost("idposte");
        $poste = Poste::findFirstByidposte($idposte);

        if (!$poste) {
            $this->flash->error("poste does not exist " . $idposte);

            $this->dispatcher->forward([
                'controller' => "poste",
                'action' => 'index'
            ]);

            return;
        }

        $poste->idposte = $this->request->getPost("idposte");
        $poste->idUtilisateur = $this->request->getPost("id_utilisateur");
        $poste->idVehicule = $this->request->getPost("id_vehicule");
        $poste->descriptif = $this->request->getPost("descriptif");
        

        if (!$poste->save()) {

            foreach ($poste->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "poste",
                'action' => 'edit',
                'params' => [$poste->idposte]
            ]);

            return;
        }

        $this->flash->success("poste was updated successfully");

        $this->dispatcher->forward([
            'controller' => "poste",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a poste
     *
     * @param string $idposte
     */
    public function deleteAction($idposte)
    {
        $poste = Poste::findFirstByidposte($idposte);
        if (!$poste) {
            $this->flash->error("poste was not found");

            $this->dispatcher->forward([
                'controller' => "poste",
                'action' => 'index'
            ]);

            return;
        }

        if (!$poste->delete()) {

            foreach ($poste->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "poste",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("poste was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "poste",
            'action' => "index"
        ]);
    }

}
