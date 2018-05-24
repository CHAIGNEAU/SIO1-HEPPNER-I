<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class TrajetModel extends Object
{
    protected static $_table='trajet';

    public $id;
    public $devis_id;
    public $vehicule_id;
    public $conducteur_id;
    public $dateDepart;
    public $dateArrivee;

    /**
     * @return
     * ceci calcul le nombre de conducteurs actuellement en déplacement
     */
public static function getConducteurNonLibre(){
    $somme=0;
    $deplacements=self::getAll();
    foreach ($deplacements as $deplacements){
        if(is_null($deplacements->getDateArrivee())){
            $somme++;
        }

    }
    return $somme;


}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDevisId()
    {
        return $this->devis_id;
    }

    /**
     * @param mixed $devis_id
     */
    public function setDevisId($devis_id)
    {
        $this->devis_id = $devis_id;
    }

    /**
     * @return mixed
     */
    public function getVehiculeId()
    {
        return $this->vehicule_id;
    }

    /**
     * @param mixed $vehicule_id
     */
    public function setVehiculeId($vehicule_id)
    {
        $this->vehicule_id = $vehicule_id;
    }

    /**
     * @return mixed
     */
    public function getConducteurId()
    {
        return $this->conducteur_id;
    }

    /**
     * @param mixed $conducteur_id
     */
    public function setConducteurId($conducteur_id)
    {
        $this->conducteur_id = $conducteur_id;
    }

    /**
     * @return mixed
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * @param mixed $dateDepart
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;
    }

    /**
     * @return mixed
     */
    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }

    /**
     * @param mixed $dateArrivee
     */
    public function setDateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;
    }



}
