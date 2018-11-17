<?php

namespace Store\Models;

class Photo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idphoto;

    /**
     *
     * @var integer
     */
    public $id_utilisateur;

    /**
     *
     * @var string
     */
    public $date;

    /**
     *
     * @var string
     */
    public $lieu;

    /**
     *
     * @var integer
     */
    public $id_voiture;

    /**
     *
     * @var integer
     */
    public $id_evenement;

    /**
     *
     * @var integer
     */
    public $id_pilote;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rallyLegend");
        $this->setSource("photo");
        $this->belongsTo('id_evenement', 'Store\Models\Evenement', 'idevenement', ['alias' => 'Evenement']);
        $this->belongsTo('id_utilisateur', 'Store\Models\Utilisateur', 'idutilisateur', ['alias' => 'Utilisateur']);
        $this->belongsTo('id_voiture', 'Store\Models\Vehicule', 'idvoiture', ['alias' => 'Vehicule']);
        $this->belongsTo('id_pilote', 'Store\Models\Utilisateur', 'idutilisateur', ['alias' => 'Utilisateur']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'photo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Photo[]|Photo|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Photo|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
