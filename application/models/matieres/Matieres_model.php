<?php

class Matieres_model extends CI_Model
{
    /**
     * fonction qui retourne touts les ligne de la table matieres
     * @returne Mixte 
     */
    function getAllmatieres (){
        $q = $this->db->query('select * from matieres');
        return $q;
    }
    
}
