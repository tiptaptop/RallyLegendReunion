<?php

namespace Store\Models;

class Evenement extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idevenement;

    /**
     *
     * @var string
     */
    public $date;

    /**
     *
     * @var integer
     */
    public $place;

    /**
     *
     * @var integer
     */
    public $restriction;

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
        $this->setSource("evenement");
        $this->hasMany('idevenement', 'Store\Models\Photo', 'id_evenement', ['alias' => 'Photo']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'evenement';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Evenement[]|Evenement|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Evenement|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
