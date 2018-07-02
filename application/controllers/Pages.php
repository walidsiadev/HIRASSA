<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class controleur principale pour les action de navigation sur l'application 
 */

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $data = null;
        $this->template_lib->load_template('main/home','Bienvenue sur HIRASSA',$data);
    }
    
    public function prof()
    {
        $this->load->model('profs/Profs_model');
        $data['profs'] = $this->Profs_model->getAllprofs();
        $this->template_lib->load_template('prof/prof_v','HIRASSA | Professeur',$data);
    }

    public function Exam()
    {
        $data = null;
        $this->template_lib->load_template('Exam/exam_v','HIRASSA | Les Examens & Planification',$data);
    }

    public function Ecole()
    {
        $data = null;
        $this->template_lib->load_template('Ecole/ecole_v','HIRASSA | L\'École',$data);
	}
	
	public function Prefect()
    {
        $this->load->model('prefectures/Prefectures_model');
        $data['prefect'] = $this->Prefectures_model->getallprefect();
        $this->template_lib->load_template('Prefect/prefect_v','HIRASSA | La Préfecture',$data);
	}
	
	public function Villes()
    {
        $this->load->model('villes/Villes_model');
        $data['vill'] = $this->Villes_model->getallvil();
        $this->template_lib->load_template('Villes/villes_v','HIRASSA | Les Villes',$data);
	}

	public function Salle()
    {
        $data = null;
        $this->template_lib->load_template('Salle/salle_v','HIRASSA | Les Salles',$data);
	}
	
	public function Matieres()
    {
        $this->load->model('matieres/Matieres_model');
        $data['matier'] = $this->Matieres_model->getAllmatieres();
        $this->template_lib->load_template('Matieres/matieres_v','HIRASSA | les Matières',$data);
	}

	public function Admin()
    {
        $data = null;
        $this->template_lib->load_template('Admin/admins_v','HIRASSA | les Admins',$data);
	}
}
