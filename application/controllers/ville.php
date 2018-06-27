<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class controleur principale pour les action de navigation sur l'application 
 */

class ville extends CI_Controller
{

    public function Add()
    {
        $this->load->model('villes/Villes_model');
        if ($this->input->post('save')) {
            $this->Villes_model->addNewville();
            $data['ok'] = 'ajouté avec succès';
            $this->template_lib->load_template('Villes/villes_add','HIRASSA | Ajouter ville',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('Villes/villes_add','HIRASSA | Ajouter ville',$data);
        }
    }
    public function Delete()
    {
        $id = $this->uri->segment(3);
        $this->load->model('villes/Villes_model');
        if ($this->Villes_model->deleteville($id)) {
           redirect('Pages/Villes');
        }
    }
    public function Update()
    {
        $id = $this->uri->segment(3);
        $this->load->model('villes/Villes_model');
        $data['ville'] = $this->Villes_model->getAllvilWhere($id);
        if ($this->input->post('Update')) {
            $data['ville'] = null;
            $upd = array(
                'v_nom' => $this->input->post('v_nom')
            );
            $this->Villes_model->Updateville($id,$upd);
            $data['ok'] = 'ville a été modifier avec succès';
            $data['ville'] = $this->Villes_model->getAllvilWhere($id);
            $this->template_lib->load_template('Villes/villes_update','HIRASSA | Modifier la Ville',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('Villes/villes_update','HIRASSA | Modifier la Ville',$data);
        }
    }
}
