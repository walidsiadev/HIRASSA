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
}
/**
* fonction qui Ajoute une ville dans la table 
* @returne void
*/
function addNewville (){
   $data = array(
       
       'v_nom' => $this->input->post('v_nom'),
       
       
   );
   $this->db->insert('villes',$data);
}
{
     /**
     * fonction qui supprime une ville dans la table ville
     * @returne bool
     */
    function deleteville ($id){
        $this->db->where('prfct_id',$id);
        if($this->db->delete('prefectures')){
            return true;
        }
        return false;
}