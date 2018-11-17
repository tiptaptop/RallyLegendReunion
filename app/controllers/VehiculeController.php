<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Store\Models\Vehicule;

class VehiculeController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for vehicule
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, '\Store\Models\Vehicule', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "idvoiture";

        $vehicule = Vehicule::find($parameters);
        if (count($vehicule) == 0) {
            $this->flash->notice("The search did not find any vehicule");

            $this->dispatcher->forward([
                "controller" => "vehicule",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $vehicule,
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
     * Edits a vehicule
     *
     * @param string $idvoiture
     */
    public function editAction($idvoiture)
    {
        if (!$this->request->isPost()) {

            $vehicule = Vehicule::findFirstByidvoiture($idvoiture);
            if (!$vehicule) {
                $this->flash->error("vehicule was not found");

                $this->dispatcher->forward([
                    'controller' => "vehicule",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->idvoiture = $vehicule->idvoiture;

            $this->tag->setDefault("idvoiture", $vehicule->idvoiture);
            $this->tag->setDefault("annee", $vehicule->annee);
            $this->tag->setDefault("marque", $vehicule->marque);
            $this->tag->setDefault("modele", $vehicule->modele);
            $this->tag->setDefault("nombreDeRoues", $vehicule->nombreDeRoues);
            
        }
    }

    /**
     * Creates a new vehicule
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "vehicule",
                'action' => 'index'
            ]);

            return;
        }

        $vehicule = new Vehicule();
        $vehicule->idvoiture = $this->request->getPost("idvoiture");
        $vehicule->annee = $this->request->getPost("annee");
        $vehicule->marque = $this->request->getPost("marque");
        $vehicule->modele = $this->request->getPost("modele");
        $vehicule->nombreDeRoues = $this->request->getPost("nombreDeRoues");
        

        if (!$vehicule->save()) {
            foreach ($vehicule->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "vehicule",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("vehicule was created successfully");

        $this->dispatcher->forward([
            'controller' => "vehicule",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a vehicule edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "vehicule",
                'action' => 'index'
            ]);

            return;
        }

        $idvoiture = $this->request->getPost("idvoiture");
        $vehicule = Vehicule::findFirstByidvoiture($idvoiture);

        if (!$vehicule) {
            $this->flash->error("vehicule does not exist " . $idvoiture);

            $this->dispatcher->forward([
                'controller' => "vehicule",
                'action' => 'index'
            ]);

            return;
        }

        $vehicule->idvoiture = $this->request->getPost("idvoiture");
        $vehicule->annee = $this->request->getPost("annee");
        $vehicule->marque = $this->request->getPost("marque");
        $vehicule->modele = $this->request->getPost("modele");
        $vehicule->nombreDeRoues = $this->request->getPost("nombreDeRoues");
        

        if (!$vehicule->save()) {

            foreach ($vehicule->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "vehicule",
                'action' => 'edit',
                'params' => [$vehicule->idvoiture]
            ]);

            return;
        }

        $this->flash->success("vehicule was updated successfully");

        $this->dispatcher->forward([
            'controller' => "vehicule",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a vehicule
     *
     * @param string $idvoiture
     */
    public function deleteAction($idvoiture)
    {
        $vehicule = Vehicule::findFirstByidvoiture($idvoiture);
        if (!$vehicule) {
            $this->flash->error("vehicule was not found");

            $this->dispatcher->forward([
                'controller' => "vehicule",
                'action' => 'index'
            ]);

            return;
        }

        if (!$vehicule->delete()) {

            foreach ($vehicule->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "vehicule",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("vehicule was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "vehicule",
            'action' => "index"
        ]);
    }

}
