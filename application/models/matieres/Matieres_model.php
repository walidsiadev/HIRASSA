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

        /**
     * fonction qui retourne la ligne de la table porte le méme id 
     * @returne Mixte 
     */
    /* function getAllvilWhere ($id){
        $q = $this->db->get_where('villes',array('v_id' =>$id));
        return $q->result(); */



}
function getAllmatiereWhere ($id){
    $q = $this->db->get_where('matieres',array('mt_id' =>$id));
    return $q->result();


    
}
  /**
     * fonction de modification des villes
     * @returne Mixte 
     */
    function Updatematiere ($id,$data){
        $this->db->where('mt_id',$id);
        $this->db->update('matieres',$data);
        return true;
    }
}
