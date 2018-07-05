<?php

class Salles_model extends CI_Model
{
    /**
    * fonction qui retourne touts les ligne de la table matieres
    * @returne Mixte
    */
    public function getAllsalles()
    {
        $q = $this->db->query('SELECT * FROM salles,ecoles WHERE salles.eco_id = ecoles.eco_id');
        return $q;
    }
    /**
    * fonction qui Ajoute une salles dans la table salles
    * @returne void
    */
    public function addNewsalles()
    {
        $data = array(
            'sal_num' => $this->input->post('sal_num'),
            'sal_cap' => $this->input->post('sal_cap'),
            'eco_id' => $this->input->post('eco_id')
        );
        $this->db->insert('salles', $data);
    }
    /**
     * fonction qui supprime une salles dans la table salles
     * @returne bool
     */
    public function deletesalles($id)
    {
        $this->db->where('sal_id', $id);
        if ($this->db->delete('salles')) {
            return true;
        }
        return false;
    }
    /**
     * fonction qui retourne la ligne de la table porte le méme id
     * @returne Mixte
     */
    public function getAllsallesWhere($id)
    {
        $q = $this->db->get_where('salles', array('sal_id' =>$id));
        return $q->result();
    }
    /**
     * fonction de modification des salles
     * @returne Mixte
     */
    public function Updatesalles($id, $data)
    {
        $this->db->where('sal_id', $id);
        $this->db->update('salles', $data);
        return true;
    }
    /**
     * fonction qui retourne le nbr des ligne sur la table
     * @returne Mixte 
     */
    function countSalle (){
        $num = $this->db->count_all_results('salles');
        return $num;
    }
}
