<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class DemandeTransportModel extends Object
{
    protected static $_table='demandeTransport';

    public $id;
    public $client_id;
    public $villeDepart;
    public $villeArrivee;
    public $distance;
    public $duree;
    public $typeMarchandise_id;
    public $volume;
    public $poids;
    public $dateDemande;
    public $dateLimite;


    public static function getTrajetPlusLong()
    {
        $query = self::query('SELECT MAX(distance) FROM demandeTransport',[0]);
        foreach ($query[0] as $data);

        return $data;
    }
}
