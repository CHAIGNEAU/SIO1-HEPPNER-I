<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class DevisModel extends Object
{
    protected static $_table='devis';

    public $id;
    public $demandeTransport_id;
    public $montant;
    public $dateEnvoi;
    public $dateArriveePrevue;
    public $valide;

    public static function getDevisValide(){

        return self::count(['valide'=>0]);
    }

    public static function getChiffreAffaireJour(){


    }
}