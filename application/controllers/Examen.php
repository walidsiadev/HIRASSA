<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Class controleur principale pour les action de navigation sur l'application 
 */
class Examen extends CI_Controller
{
    public function Add()
    {
        $this->load->model('examens/Examens_model');
        $this->load->model('matieres/Matieres_model');
        $matier = $this->Matieres_model->getAllmatieres();
        if ($this->input->post('save')) {
            $this->Examens_model->addNewexamens();
            $data['matier'] = $matier;
            $data['ok'] = 'Ajouté avec succès';
            $this->template_lib->load_template('Exam/exam_add','HIRASSA | Planifier L\'Examen',$data);
        }
        else {
            $data['matier'] = $matier;
            $data['ok'] = null;
            $this->template_lib->load_template('Exam/exam_add','HIRASSA | Planifier L\'Examen',$data);
        }
    }
    public function Delete()
    {
        $id = $this->uri->segment(3);
        $this->load->model('examens/Examens_model');
        if ($this->Examens_model->deleteexamens($id)) {
           redirect('Pages/Exam');
        }
    }
    public function Update()
    {
        $id = $this->uri->segment(3);
        $this->load->model('examens/Examens_model');
        $this->load->model('matieres/Matieres_model');
        $matier = $this->Matieres_model->getAllmatieres();
        $data['matier']= $matier;
        $data['exam'] = $this->Examens_model->getAllexamensWhere($id);
        if ($this->input->post('Update')) {
            $data['exam'] = null;
            $upd = array(
                'ex_date' => $this->input->post('ex_date'),
                'ex_dure' => $this->input->post('ex_dure'),
                'mt_id' => $this->input->post('mt_id'),
                'ex_niv' => $this->input->post('ex_niv')
            );
            $this->Examens_model->Updateexamens($id,$upd);
            $data['ok'] = 'Examen a été modifier avec succès';
            $data['exam'] = $this->Examens_model->getAllexamensWhere($id);
            $this->template_lib->load_template('Exam/exam_update','HIRASSA | Modifier La Planifier L\'Examen',$data);
        }
        else {
            $data['ok'] = null;
            $this->template_lib->load_template('Exam/exam_update','HIRASSA | Modifier La Planifier L\'Examen',$data);
        }
    }
}