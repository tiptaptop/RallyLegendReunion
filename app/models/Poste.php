<?php

namespace Store\Models;

class Poste extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idposte;

    /**
     *
     * @var integer
     */
    public $id_utilisateur;

    /**
     *
     * @var integer
     */
    public $id_vehicule;

    /**
     *
     * @var string
     */
    public $descriptif;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rallyLegend");
        $this->setSource("poste");
        $this->hasMany('idposte', 'Store\Models\Commentaire', 'id_post', ['alias' => 'Commentaire']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'poste';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Poste[]|Poste|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Poste|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
