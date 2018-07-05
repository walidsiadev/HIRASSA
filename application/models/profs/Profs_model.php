<?php

class Profs_model extends CI_Model
{
    /**
     * fonction qui retourne touts les ligne de la table Y et assosiation avec la table X
     * @returne Mixte 
     */
    function getAllprofs (){
        $q = $this->db->query('select * from hirassa_bd.profs a, hirassa_bd.matieres b where a.mt_id = b.mt_id;');
        return $q;
    }
     /**
     * fonction qui Ajoute un professeurs dans la table 
     * @returne void
     */
    function addNewprofs (){
        $data = array(
            'prof_matr' => $this->input->post('prof_matr'),
            'prof_nom' => $this->input->post('prof_nom'),
            'prof_prenom' => $this->input->post('prof_prenom'),
            'prof_email' => $this->input->post('prof_email'),
            'mt_id' => $this->input->post('mt_id')
        );
        $this->db->insert('profs',$data);
    }
    /**
     * fonction qui supprime un professeurs dans la base 
     * @returne bool
     */
    function deleteprofs ($id){
        $this->db->where('prof_id',$id);
        if($this->db->delete('profs')){
            return true;
        }
        return false;
    }
    /**
     * fonction qui retourne la ligne de la table porte le méme id 
     * @returne Mixte 
     */
    function getAllprofsWhere ($id){
        $q = $this->db->get_where('profs',array('prof_id' =>$id));
        return $q->result();
    }
    /**
     * fonction qui retourne la ligne de la table porte le méme id 
     * @returne Mixte 
     */
    function UpdateProf ($id,$data){
        $this->db->where('prof_id',$id);
        $this->db->update('profs',$data);
        return true;
    }
    /**
     * fonction qui retourne le nbr des ligne sur la table
     * @returne Mixte 
     */
    function countProfs (){
        $num = $this->db->count_all_results('profs');
        return $num;
    }
}
