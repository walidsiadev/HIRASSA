<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class controleur principale pour les action de navigation sur l'application 
 */

class Prefect extends CI_Controller
{

    public function Add()
    {
        $this->load->model('prefectures/Prefectures_model');
        if ($this->input->post('save')) {
            $this->Prefectures_model->addNewprefect();
            $data['ok'] = 'ajouté avec succès';
            $this->template_lib->load_template('prefect/prefect_add','HIRASSA | Ajouter Prefecture',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('prefect/prefect_add','HIRASSA | Ajouter Prefecture',$data);
        }
    }
    public function Delete()
    {
        $id = $this->uri->segment(3);
        $this->load->model('prefectures/Prefectures_model');
        if ($this->Prefectures_model->deleteprefect($id)) {
           redirect('Pages/Prefect');
        }
    }
    public function Update()
    {
        $id = $this->uri->segment(3);
        $this->load->model('prefectures/Prefectures_model');
        $data['prefect'] = $this->Prefectures_model->getAllprefectWhere($id);
        if ($this->input->post('Update')) {
            $data['prefect'] = null;
            $upd = array(
                'prfct_nom' => $this->input->post('prfct_nom')
            );
            $this->Prefectures_model->UpdatePrefect($id,$upd);
            $data['ok'] = 'Prefecture a été modifier avec succès';
            $data['prefect'] = $this->Prefectures_model->getAllprefectWhere($id);
            $this->template_lib->load_template('prefect/prefect_update','HIRASSA | Modifier Prefecture',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('prefect/prefect_update','HIRASSA | Modifier Prefecture',$data);
        }
    }
}
