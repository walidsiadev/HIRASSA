<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class controleur principale pour les action de navigation sur l'application 
 */

class Ecole extends CI_Controller
{

    public function Add()
    {
        $this->load->model('ecoles/Ecoles_model');
        $this->load->model('villes/Villes_model');
        $data['ville'] = $this->Villes_model->getAllVille();
        $this->load->model('prefectures/Prefectures_model');
        $data['pref'] = $this->Prefectures_model->getallprefect();
        if ($this->input->post('save')) {
            $this->Ecoles_model->addNewEcole();
            $data['ville'] = $this->Villes_model->getAllVille();
            $data['pref'] = $this->Prefectures_model->getallprefect();
            $data['ok'] = 'ajouté avec succès';
            $this->template_lib->load_template('ecole/ecole_add','HIRASSA | Ajouter L\'École',$data);
        }
        else {
            $data['ville'] = $this->Villes_model->getAllVille();
            $data['pref'] = $this->Prefectures_model->getallprefect();
            $data['ok'] = null;
            $this->template_lib->load_template('ecole/ecole_add','HIRASSA | Ajouter L\'École',$data);
        }
    }
    public function Delete()
    {
        $id = $this->uri->segment(3);
        $this->load->model('ecoles/Ecoles_model');
        if ($this->Ecoles_model->deletecole($id)) {
           redirect('Pages/Ecole');
        }
    }
    public function Update()
    {
        $id = $this->uri->segment(3);
        $this->load->model('villes/Villes_model');
        $data['ville'] = $this->Villes_model->getAllVille();
        $this->load->model('prefectures/Prefectures_model');
        $data['pref'] = $this->Prefectures_model->getallprefect();
        $this->load->model('ecoles/Ecoles_model');
        $data['ecole'] = $this->Ecoles_model->getAllEcoleWhere($id);
        if ($this->input->post('Update')) {
            $data['ecole'] = null;
            $upd = array(
                'eco_nom' => $this->input->post('eco_nom'),
                'v_id' => $this->input->post('v_id'),
                'prfct_id' => $this->input->post('prfct_id')
            );
            $this->Ecoles_model->UpdateEchole($id,$upd);
            $data['ok'] = 'L\'École a été modifier avec succès';
            $data['ecole'] = $this->Ecoles_model->getAllEcoleWhere($id);
            $this->template_lib->load_template('ecole/ecole_update','HIRASSA | Modifier L\'École',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('ecole/ecole_update','HIRASSA | Modifier L\'École',$data);
        }
    }
}
