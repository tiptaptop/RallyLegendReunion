<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Store\Models\Evenement;

class EvenementController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for evenement
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, '\Store\Models\Evenement', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "idevenement";

        $evenement = Evenement::find($parameters);
        if (count($evenement) == 0) {
            $this->flash->notice("The search did not find any evenement");

            $this->dispatcher->forward([
                "controller" => "evenement",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $evenement,
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
     * Edits a evenement
     *
     * @param string $idevenement
     */
    public function editAction($idevenement)
    {
        if (!$this->request->isPost()) {

            $evenement = Evenement::findFirstByidevenement($idevenement);
            if (!$evenement) {
                $this->flash->error("evenement was not found");

                $this->dispatcher->forward([
                    'controller' => "evenement",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->idevenement = $evenement->idevenement;

            $this->tag->setDefault("idevenement", $evenement->idevenement);
            $this->tag->setDefault("date", $evenement->date);
            $this->tag->setDefault("place", $evenement->place);
            $this->tag->setDefault("restriction", $evenement->restriction);
            $this->tag->setDefault("descriptif", $evenement->descriptif);
            
        }
    }

    /**
     * Creates a new evenement
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "evenement",
                'action' => 'index'
            ]);

            return;
        }

        $evenement = new Evenement();
        $evenement->idevenement = $this->request->getPost("idevenement");
        $evenement->date = $this->request->getPost("date");
        $evenement->place = $this->request->getPost("place");
        $evenement->restriction = $this->request->getPost("restriction");
        $evenement->descriptif = $this->request->getPost("descriptif");
        

        if (!$evenement->save()) {
            foreach ($evenement->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "evenement",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("evenement was created successfully");

        $this->dispatcher->forward([
            'controller' => "evenement",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a evenement edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "evenement",
                'action' => 'index'
            ]);

            return;
        }

        $idevenement = $this->request->getPost("idevenement");
        $evenement = Evenement::findFirstByidevenement($idevenement);

        if (!$evenement) {
            $this->flash->error("evenement does not exist " . $idevenement);

            $this->dispatcher->forward([
                'controller' => "evenement",
                'action' => 'index'
            ]);

            return;
        }

        $evenement->idevenement = $this->request->getPost("idevenement");
        $evenement->date = $this->request->getPost("date");
        $evenement->place = $this->request->getPost("place");
        $evenement->restriction = $this->request->getPost("restriction");
        $evenement->descriptif = $this->request->getPost("descriptif");
        

        if (!$evenement->save()) {

            foreach ($evenement->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "evenement",
                'action' => 'edit',
                'params' => [$evenement->idevenement]
            ]);

            return;
        }

        $this->flash->success("evenement was updated successfully");

        $this->dispatcher->forward([
            'controller' => "evenement",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a evenement
     *
     * @param string $idevenement
     */
    public function deleteAction($idevenement)
    {
        $evenement = Evenement::findFirstByidevenement($idevenement);
        if (!$evenement) {
            $this->flash->error("evenement was not found");

            $this->dispatcher->forward([
                'controller' => "evenement",
                'action' => 'index'
            ]);

            return;
        }

        if (!$evenement->delete()) {

            foreach ($evenement->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "evenement",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("evenement was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "evenement",
            'action' => "index"
        ]);
    }

}
