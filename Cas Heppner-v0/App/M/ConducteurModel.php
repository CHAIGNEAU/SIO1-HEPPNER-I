<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class ConducteurModel extends Object
{
    protected static $_table='conducteur';

    public $id;
    public $nom;
    public $prenom;
    public $dateEmbauche;
    public $dateNaissance;
    public $dateSortie;

    public static function getConducteursLibre(){

        $totalConducteurs = 0;
        $conducteur = self::getAll();

        foreach ($conducteur as $oneConducteurs) {
            if ($oneConducteurs == TrajetModel::find(['conducteur_id'=> $oneConducteurs->id])){

            }
            else{
                $totalConducteurs++;
            }
        }
        return $totalConducteurs;
    }
    public static function getConducteursNonLibre(){
        $totalConducteurs = 0;
        $conducteur = self::getAll();

        foreach ($conducteur as $oneConducteurs){
            if ($oneConducteurs == TrajetModel::find(['conducteur_id'=> $oneConducteurs->id])){

            }
            else{
                $totalConducteurs++;
            }
        }

        return TrajetModel::getConducteurNonLibre();
    }

}
