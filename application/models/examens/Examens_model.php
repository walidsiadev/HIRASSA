<?php

class Examens_model extends CI_Model
{
    /**
    * fonction qui retourne touts les ligne de la table examens
    * @returne Mixte
    */
    public function getAllexamens()
    {
        $q = $this->db->query('SELECT * FROM examens,matieres WHERE examens.mt_id = matieres.mt_id');
        return $q;
    }
    /**
    * fonction qui Ajoute une examens dans la table examens
    * @returne void
    */
    public function addNewexamens()
    {
        $data = array(
            'ex_date' => $this->input->post('ex_date'),
            'ex_dure' => $this->input->post('ex_dure'),
            'mt_id' => $this->input->post('mt_id'),
            'ex_niv' => $this->input->post('ex_niv')
        );
        $this->db->insert('examens', $data);
    }
    /**
     * fonction qui supprime une examens dans la table examens
     * @returne bool
     */
    public function deleteexamens($id)
    {
        $this->db->where('ex_id', $id);
        if ($this->db->delete('examens')) {
            return true;
        }
        return false;
    }
    /**
     * fonction qui retourne la ligne de la table porte le méme id
     * @returne Mixte
     */
    public function getAllexamensWhere($id)
    {
        $q = $this->db->get_where('examens', array('ex_id' =>$id));
        return $q->result();
    }
    /**
     * fonction de modification des examens
     * @returne Mixte
     */
    public function Updateexamens($id, $data)
    {
        $this->db->where('ex_id', $id);
        $this->db->update('examens', $data);
        return true;
    }
    /**
     * fonction qui retourne le nbr des ligne sur la table
     * @returne Mixte 
     */
    function countExam (){
        $num = $this->db->count_all_results('examens');
        return $num;
    }
}
