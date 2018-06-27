<?php

class Villes_model extends CI_Model
{
    /**
     * foction qui selection les villes
     */
    function getallvil(){
        $q = $this->db->query('SELECT * FROM villes');
        return $q;
    }

    /**
    * fonction qui Ajoute une ville dans la table 
    * @returne void
    */
    function addNewville (){
        $data = array(
            'v_nom' => $this->input->post('v_nom')
        );
        $this->db->insert('villes',$data);
    }

     /**
     * fonction qui supprime une ville dans la table ville
     * @returne bool
     */
    function deleteville ($id){
        $this->db->where('v_id',$id);
        if($this->db->delete('villes')){
            return true;
        }
        return false;
}

    /**
     * fonction qui retourne la ligne de la table porte le méme id 
     * @returne Mixte 
     */
    function getAllvilWhere ($id){
            $q = $this->db->get_where('villes',array('v_id' =>$id));
            return $q->result();
    }
    
    /**
     * fonction de modification des villes
     * @returne Mixte 
     */
    function Updateville ($id,$data){
        $this->db->where('v_id',$id);
        $this->db->update('villes',$data);
        return true;
    }
}