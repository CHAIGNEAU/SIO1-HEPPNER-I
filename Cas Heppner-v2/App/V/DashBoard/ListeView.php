<?php

namespace App\V\DashBoard;

use App\M\ConducteurModel;
use App\M\DepartementModel;
use App\M\RegionModel;
use App\M\VehiculeModel;

class  ListeView extends \Core\View {
    /**
     * ListeView constructor.
     * @param $title
     */
    public function __construct()
    {
        $this->setFile('DashBoard/listeTemplate.php');

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return 'Tableau de bord';
    }
    /**
     * @return mixed
     */
    public function getNbDepartements()
    {
        return count(DepartementModel::getAll());
    }

    public function getNbRegions()
    {
        return count(RegionModel::getAll());
    }

    public function getNbAll($annee)
    {
        return 0;
    }
    public function getConducteursLibre()
    {
       return ConducteurModel::getAll();
    }
    public function getNbVehicules(){
        $tableau = VehiculeModel::getNbVehiculesParCategorie();
        return $tableau;
    }
    public function getCAJ(){

        return \App\M\DevisModel::getCAJour();
    }

    public function getCAM(){

        return \App\M\DevisModel::getCAMois();
    }


}