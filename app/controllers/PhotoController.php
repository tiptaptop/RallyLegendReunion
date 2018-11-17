<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Store\Models\Photo;

class PhotoController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for photo
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, '\Store\Models\Photo', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "idphoto";

        $photo = Photo::find($parameters);
        if (count($photo) == 0) {
            $this->flash->notice("The search did not find any photo");

            $this->dispatcher->forward([
                "controller" => "photo",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $photo,
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
     * Edits a photo
     *
     * @param string $idphoto
     */
    public function editAction($idphoto)
    {
        if (!$this->request->isPost()) {

            $photo = Photo::findFirstByidphoto($idphoto);
            if (!$photo) {
                $this->flash->error("photo was not found");

                $this->dispatcher->forward([
                    'controller' => "photo",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->idphoto = $photo->idphoto;

            $this->tag->setDefault("idphoto", $photo->idphoto);
            $this->tag->setDefault("id_utilisateur", $photo->id_utilisateur);
            $this->tag->setDefault("date", $photo->date);
            $this->tag->setDefault("lieu", $photo->lieu);
            $this->tag->setDefault("id_voiture", $photo->id_voiture);
            $this->tag->setDefault("id_evenement", $photo->id_evenement);
            $this->tag->setDefault("id_pilote", $photo->id_pilote);
            
        }
    }

    /**
     * Creates a new photo
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "photo",
                'action' => 'index'
            ]);

            return;
        }

        $photo = new Photo();
        $photo->idphoto = $this->request->getPost("idphoto");
        $photo->idUtilisateur = $this->request->getPost("id_utilisateur");
        $photo->date = $this->request->getPost("date");
        $photo->lieu = $this->request->getPost("lieu");
        $photo->idVoiture = $this->request->getPost("id_voiture");
        $photo->idEvenement = $this->request->getPost("id_evenement");
        $photo->idPilote = $this->request->getPost("id_pilote");
        

        if (!$photo->save()) {
            foreach ($photo->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "photo",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("photo was created successfully");

        $this->dispatcher->forward([
            'controller' => "photo",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a photo edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "photo",
                'action' => 'index'
            ]);

            return;
        }

        $idphoto = $this->request->getPost("idphoto");
        $photo = Photo::findFirstByidphoto($idphoto);

        if (!$photo) {
            $this->flash->error("photo does not exist " . $idphoto);

            $this->dispatcher->forward([
                'controller' => "photo",
                'action' => 'index'
            ]);

            return;
        }

        $photo->idphoto = $this->request->getPost("idphoto");
        $photo->idUtilisateur = $this->request->getPost("id_utilisateur");
        $photo->date = $this->request->getPost("date");
        $photo->lieu = $this->request->getPost("lieu");
        $photo->idVoiture = $this->request->getPost("id_voiture");
        $photo->idEvenement = $this->request->getPost("id_evenement");
        $photo->idPilote = $this->request->getPost("id_pilote");
        

        if (!$photo->save()) {

            foreach ($photo->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "photo",
                'action' => 'edit',
                'params' => [$photo->idphoto]
            ]);

            return;
        }

        $this->flash->success("photo was updated successfully");

        $this->dispatcher->forward([
            'controller' => "photo",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a photo
     *
     * @param string $idphoto
     */
    public function deleteAction($idphoto)
    {
        $photo = Photo::findFirstByidphoto($idphoto);
        if (!$photo) {
            $this->flash->error("photo was not found");

            $this->dispatcher->forward([
                'controller' => "photo",
                'action' => 'index'
            ]);

            return;
        }

        if (!$photo->delete()) {

            foreach ($photo->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "photo",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("photo was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "photo",
            'action' => "index"
        ]);
    }

}
