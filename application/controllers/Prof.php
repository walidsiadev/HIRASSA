<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class controleur principale pour les action de navigation sur l'application 
 */

class Prof extends CI_Controller
{

    public function Add()
    {
        $this->load->model('profs/Profs_model');
        $this->load->model('matieres/Matieres_model');
        $data['matieres'] = $this->Matieres_model->getAllmatieres();
        if ($this->input->post('save')) {
            $this->Profs_model->addNewprofs();
            $data['matieres'] = $this->Matieres_model->getAllmatieres();
            $data['ok'] = 'ajouté avec succès';
            $this->template_lib->load_template('prof/prof_add','HIRASSA | Ajouter Professeur',$data);
        }
        else {
            $data['matieres'] = $this->Matieres_model->getAllmatieres();
            $data['ok'] = null;
            $this->template_lib->load_template('prof/prof_add','HIRASSA | Ajouter Professeur',$data);
        }
    }
    public function Delete()
    {
        $id = $this->uri->segment(3);
        $this->load->model('profs/Profs_model');
        if ($this->Profs_model->deleteprofs($id)) {
           redirect('Pages/Prof');
        }
    }
    public function Update()
    {
        $id = $this->uri->segment(3);
        $this->load->model('profs/Profs_model');
        $this->load->model('matieres/Matieres_model');
        $data['matieres'] = $this->Matieres_model->getAllmatieres();
        $data['profs'] = $this->Profs_model->getAllprofsWhere($id);
        if ($this->input->post('Update')) {
            $data['profs'] = null;
            $upd = array(
                'prof_matr' => $this->input->post('prof_matr'),
                'prof_nom' => $this->input->post('prof_nom'),
                'prof_prenom' => $this->input->post('prof_prenom'),
                'prof_email' => $this->input->post('prof_email'),
                'mt_id' => $this->input->post('mt_id')
            );
            $this->Profs_model->UpdateProf($id,$upd);
            $data['ok'] = 'Professuer a été modifier avec succès';
            $data['profs'] = $this->Profs_model->getAllprofsWhere($id);
            $this->template_lib->load_template('prof/prof_update','HIRASSA | Modifier Professeur',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('prof/prof_update','HIRASSA | Modifier Professeur',$data);
        }
    }
}
