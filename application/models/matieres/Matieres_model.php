<?php

class Matieres_model extends CI_Model
{
    /**
     * fonction qui retourne touts les ligne de la table matieres
     * @returne Mixte 
     */
    function getAllmatieres (){
        $q = $this->db->query('SELECT * FROM matieres');
        return $q;
    }
    /**
    * fonction qui Ajoute une ville dans la table 
    * @returne void
    */
    function addNewmatiers (){
        $data = array(
            'mt_nom' => $this->input->post('mt_nom')
        );
        $this->db->insert('matieres',$data);
    }
    /**
     * fonction qui supprime une ville dans la table ville
     * @returne bool
     */
    function deletematiere ($id){
        $this->db->where('mt_id',$id);
        if($this->db->delete('matieres')){
            return true;
        }
        return false;
}


    
}
