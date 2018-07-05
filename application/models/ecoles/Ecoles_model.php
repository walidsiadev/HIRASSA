<?php

class Ecoles_model extends CI_Model
{
    /**
     * fonction qui retourne touts les ligne de la table Y et assosiation avec la table X...
     * @returne Mixte 
     */
    function getAllEcole (){
        $q = $this->db->query('select * FROM ecoles e,villes v,prefectures p WHERE e.v_id = v.v_id AND e.prfct_id = p.prfct_id;');
        return $q;
    }
    /**
     * fonction qui supprime une ecole dans la base
     * @returne bool
     */
    function deletecole ($id){
        $this->db->where('eco_id',$id);
        if($this->db->delete('ecoles')){
            return true;
        }
        return false;
    }
    /**
     * fonction qui Ajoute une ecole dans la table 
     * @returne void
     */
    function addNewEcole (){
        $data = array(
            'eco_nom' => $this->input->post('eco_nom'),
            'v_id' => $this->input->post('v_id'),
            'prfct_id' => $this->input->post('prfct_id'),
        );
        $this->db->insert('ecoles',$data);
    }
        /**
     * fonction qui retourne la ligne de la table porte le méme id 
     * @returne Mixte 
     */
    function getAllEcoleWhere ($id){
        $q = $this->db->get_where('ecoles',array('eco_id' =>$id));
        return $q->result();
    }
    /**
     * fonction qui retourne la ligne de la table porte le méme id 
     * @returne Mixte 
     */
    function UpdateEchole ($id,$data){
        $this->db->where('eco_id',$id);
        $this->db->update('ecoles',$data);
        return true;
    }
    /**
     * function qui retourne tout les information a utiliser dans la liste des utres table 
     * @return mixte
     */
    function getListforEcole(){
        $q = $this->db->query('SELECT * FROM ecoles ;');
        return $q;
    }
    /**
     * fonction qui retourne le nbr des ligne sur la table
     * @returne Mixte 
     */
    function countEcole (){
        $num = $this->db->count_all_results('ecoles');
        return $num;
    }
    
}
