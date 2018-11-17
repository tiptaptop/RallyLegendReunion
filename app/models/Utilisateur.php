<?php

namespace Store\Models;

class Utilisateur extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idutilisateur;

    /**
     *
     * @var string
     */
    public $nom;

    /**
     *
     * @var string
     */
    public $prenom;

    /**
     *
     * @var string
     */
    public $statut;

    /**
     *
     * @var string
     */
    public $mail;

    /**
     *
     * @var string
     */
    public $pseudo;

    /**
     *
     * @var string
     */
    public $signature;

    /**
     *
     * @var string
     */
    public $motDePasse;

    /**
     *
     * @var string
     */
    public $photo;

    /**
     *
     * @var integer
     */
    public $id_voiture;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rallyLegend");
        $this->setSource("utilisateur");
        $this->hasMany('idutilisateur', 'Store\Models\Commentaire', 'id_utilisateur', ['alias' => 'Commentaire']);
        $this->hasMany('idutilisateur', 'Store\Models\Photo', 'id_utilisateur', ['alias' => 'Photo']);
        $this->hasMany('idutilisateur', 'Store\Models\Photo', 'id_pilote', ['alias' => 'Photo']);
        $this->hasMany('idutilisateur', 'Store\Models\Vehicule', 'idvoiture', ['alias' => 'Vehicule']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'utilisateur';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Utilisateur[]|Utilisateur|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Utilisateur|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
