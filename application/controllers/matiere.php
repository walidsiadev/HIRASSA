<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class controleur principale pour les action de navigation sur l'application 
 */

class matiere extends CI_Controller
{

    public function Add()
    {
        $this->load->model('matieres/Matieres_model');
        if ($this->input->post('save')) {
            $this->Matieres_model->addNewmatiers();
            $data['ok'] = 'ajouté avec succès';
            $this->template_lib->load_template('Matieres/matieres_add','HIRASSA | Ajouter matiere',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('Matieres/matieres_add','HIRASSA | Ajouter matiere',$data);
        }
    }
    public function Delete()
    {
        $id = $this->uri->segment(3);
        $this->load->model('matieres/Matieres_model');
        if ($this->Matieres_model->deletematieres($id)) {
           redirect('Pages/matieres');
        }
    }
    public function Update()
    {
        $id = $this->uri->segment(3);
        $this->load->model('matieres/Matieres_model');
        $data['matiere'] = $this->Matieres_model->getAllmatiereWhere($id);
        if ($this->input->post('Update')) {
            $data['matiere'] = null;
            $upd = array(
                'mt_nom' => $this->input->post('mt_nom')
            );
            $this->Matieres_model->Updatematiere($id,$upd);
            $data['ok'] = 'matiere a été modifier avec succès';
            $data['matiere'] = $this->Matieres_model->getAllmatiereWhere($id);
            $this->template_lib->load_template('Matieres/matieres_update','HIRASSA | Modifier la matiere',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('Matieres/matieres_update','HIRASSA | Modifier la matiere',$data);
        }
    }
}
