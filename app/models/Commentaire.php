<?php

namespace Store\Models;

class Commentaire extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idcommentaire;

    /**
     *
     * @var integer
     */
    public $id_post;

    /**
     *
     * @var integer
     */
    public $id_utilisateur;

    /**
     *
     * @var string
     */
    public $commentaire;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rallyLegend");
        $this->setSource("commentaire");
        $this->belongsTo('id_post', 'Store\Models\Poste', 'idposte', ['alias' => 'Poste']);
        $this->belongsTo('id_utilisateur', 'Store\Models\Utilisateur', 'idutilisateur', ['alias' => 'Utilisateur']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'commentaire';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Commentaire[]|Commentaire|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Commentaire|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
