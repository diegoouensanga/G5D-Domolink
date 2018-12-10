<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 09/12/2018
 * Time: 16:00
 */

class Planning
{
    private $jourFr = Array(1 => 'Lundi', 2 => 'Mardi', 3 => 'Mercredi', 4 => 'Jeudi', 5 => 'Vendredi', 6 => 'Samedi', 7 => 'Dimanche');
    private $jourdebut;
    private $jourfin;
    private $heuredebut;
    private $heurefin;
    private $pas;

    function __construct($jourdebut, $jourfin, $heuredebut, $heurefin, $pas)
    {
        this.$jourdebut = $jourdebut;
        this.$jourfin = $jourfin;
        this.$heuredebut = $heuredebut;
        this.$heurefin = $heurefin;
        this.$pas = $pas;
    }

    function Afficher(){

    }
}