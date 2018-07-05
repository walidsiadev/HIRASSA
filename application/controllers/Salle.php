<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Class controleur principale pour les action de navigation sur l'application 
 */
class Salle extends CI_Controller
{
    public function Add()
    {
        $this->load->model('salles/Salles_model');
        $this->load->model('ecoles/Ecoles_model');
        $ecole = $this->Ecoles_model->getListforEcole();
        if ($this->input->post('save')) {
            $this->Salles_model->addNewsalles();
            $data['ecole'] = $ecole;
            $data['ok'] = 'ajouté avec succès';
            $this->template_lib->load_template('Salle/salle_add','HIRASSA | Ajouter Une Salle',$data);
        }
        else {
            $data['ecole'] = $ecole;
            $data['ok'] = null;
            $this->template_lib->load_template('Salle/salle_add','HIRASSA | Ajouter Une Salle',$data);
        }
    }
    public function Delete()
    {
        $id = $this->uri->segment(3);
        $this->load->model('salles/Salles_model');
        if ($this->Salles_model->deletesalles($id)) {
           redirect('Pages/Salle');
        }
    }
    public function Update()
    {
        $id = $this->uri->segment(3);
        $this->load->model('salles/Salles_model');
        $this->load->model('ecoles/Ecoles_model');
        $ecole = $this->Ecoles_model->getListforEcole();
        $data['ecole']= $ecole;
        $data['salles'] = $this->Salles_model->getAllsallesWhere($id);
        if ($this->input->post('Update')) {
            $data['salles'] = null;
            $upd = array(
                'sal_num' => $this->input->post('sal_num'),
                'sal_cap' => $this->input->post('sal_cap'),
                'eco_id' => $this->input->post('eco_id')
            );
            $this->Salles_model->Updatesalles($id,$upd);
            $data['ok'] = 'matiere a été modifier avec succès';
            $data['salles'] = $this->Salles_model->getAllsallesWhere($id);
            $this->template_lib->load_template('Salle/salle_update','HIRASSA | Modifier une Salle',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('Salle/salle_update','HIRASSA | Modifier une Salle',$data);
        }
    }
}