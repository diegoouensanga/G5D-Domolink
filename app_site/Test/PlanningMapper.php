<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 09/12/2018
 * Time: 17:35
 */

class PlanningMapper
{
    private static $instance;

    private function __construct()
    {}

    public static function getInstance(){
        if (!isset(selt::$instance)){
            $c = __CLASS__ ;
            self::$instance = new $c;
        }
        return self::$instance;
    }

    public function genererPlanningCellule($cours){
        $contenuCellule = '<br>'.$cours->getAlphaFormateurs()->getPrenomFormateur().'</b><br />'
            .$cours->getAlphaNiveaux()->getLibelleNiveau();
        $planningContent = new PlanningCellule($cours->getJour(),
            $cours ->getHeureDebut(),
            $cours ->getHeureFin(),
            $cours ->getAphaNiveaux()->getCodeCouleur(),
            $contenuCellule);
        return $planningContent;
    }

    public function __clone(){
        trigger_error('Le clônage n\'est pas autorisé.', E_USER_ERROR);
    }
}