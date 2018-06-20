<?php

class Prefectures_model extends CI_Model
{
    /**
     * fonction permet de selectioner les perefecture
     */
    function getallprefect(){
        $q = $this->db->query('SELECT * FROM prefectures');
        return $q;
    }
    /**
     * fonction qui Ajoute une prefecture dans la table 
     * @returne void
     */
    function addNewprefect (){
        $data = array(
            'prfct_nom' => $this->input->post('prfct_nom')
        );
        $this->db->insert('prefectures',$data);
    }
    /**
     * fonction qui supprime une prefecture dans la table 
     * @returne bool
     */
    function deleteprefect ($id){
        $this->db->where('prfct_id',$id);
        if($this->db->delete('prefectures')){
            return true;
        }
        return false;
    }
    /**
     * fonction qui retourne la ligne de la table porte le méme id 
     * @returne Mixte 
     */
    function getAllprefectWhere ($id){
        $q = $this->db->get_where('prefectures',array('prfct_id' =>$id));
        return $q->result();
    }
    /**
     * fonction qui retourne la ligne de la table porte le méme id 
     * @returne Mixte 
     */
    function UpdatePrefect ($id,$data){
        $this->db->where('prfct_id',$id);
        $this->db->update('prefectures',$data);
        return true;
    }
}
