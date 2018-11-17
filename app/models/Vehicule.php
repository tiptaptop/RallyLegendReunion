<?php

namespace Store\Models;

class Vehicule extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idvoiture;

    /**
     *
     * @var string
     */
    public $annee;

    /**
     *
     * @var string
     */
    public $marque;

    /**
     *
     * @var string
     */
    public $modele;

    /**
     *
     * @var integer
     */
    public $nombreDeRoues;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rallyLegend");
        $this->setSource("vehicule");
        $this->hasMany('idvoiture', 'Store\Models\Photo', 'id_voiture', ['alias' => 'Photo']);
        $this->belongsTo('idvoiture', 'Store\Models\Utilisateur', 'idutilisateur', ['alias' => 'Utilisateur']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'vehicule';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Vehicule[]|Vehicule|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Vehicule|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
