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

    /**
     * @return int
     * recupère toutes les données de la table conducteur.
     * pour chaque conducteur il verifie que les données conducteurs_id correspond aux données id de chaque conducteur.
     */
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
