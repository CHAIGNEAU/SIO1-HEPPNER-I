<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class CategorieModel extends Object
{
    protected static $_table='categorie';

    public $id;
    public $libelle;
    public $permis_did;



    /**
     * @return mixed
     */
    public function nbVehicules(){
        $modeles = ModeleModel::find(['categorie_id'=>$this->id]);
        $nb = 0;
        foreach ($modeles as $modele){
            $nb+=$modele->getNbVehicules();
        }
        return $nb;
    }

    public function getLibelle(){
        return $this->libelle;
    }




}