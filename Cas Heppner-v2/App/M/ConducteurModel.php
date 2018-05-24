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

    /**
     * @return string
     */
    public static function getTable()
    {
        return self::$_table;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }



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
