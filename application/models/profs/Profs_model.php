<?php

class Profs_model extends CI_Model
{
    /**
     * fonction qui retourne touts les ligne de la table profs et assosiation avec la table matieres
     * @returne Mixte 
     */
    function getAllprofs (){
        $q = $this->db->query('select * from hirassa_bd.profs a, hirassa_bd.matieres b where a.mt_id = b.mt_id;');
        return $q;
    }
}
