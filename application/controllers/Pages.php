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
        $data['title'] = 'Bienvenue sur HIRASSA';
        /**
        *hade darori idare
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('main/home');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
    }
    
    public function prof()
    {
        $data['title'] = 'HIRASSA | Professeur';
        /**
        *hade 3 darori idaro
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('prof/prof_v');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
    }

    public function Exam()
    {
        $data['title'] = 'HIRASSA | Les Examens & Planification';
        /**
        *hade 3 darori idaro
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('Exam/exam_v');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
    }

    public function Ecole()
    {
        $data['title'] = 'HIRASSA | L\'École';
        /**
        *hade 3 darori idaro
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('Ecole/ecole_v');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
	}
	
	public function Prefect()
    {
        $data['title'] = 'HIRASSA | La Préfecture';
        /**
        *hade 3 darori idaro
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('Prefect/prefect_v');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
	}
	
	public function Villes()
    {
        $data['title'] = 'HIRASSA | Les Villes';
        /**
        *hade 3 darori idaro
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('Villes/villes_v');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
	}

	public function Salle()
    {
        $data['title'] = 'HIRASSA | Les Salles';
        /**
        *hade 3 darori idaro
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('Salle/salle_v');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
	}
	
	public function Matieres()
    {
        $data['title'] = 'HIRASSA | les Matières';
        /**
        *hade 3 darori idaro
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('Matieres/matieres_v');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
	}

	public function Admin()
    {
        $data['title'] = 'HIRASSA | les Admins';
        /**
        *hade 3 darori idaro
        */
        $this->load->view('main/header', $data);
        /**
        *hade howa cours diale app hena ghedema
        */
        $this->load->view('Admin/admins_v');
        /**
        *hade darori idare
        */
        $this->load->view('main/footer');
	}
}
