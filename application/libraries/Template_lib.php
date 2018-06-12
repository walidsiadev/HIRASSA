<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class pour chargé la template de l'application
 */
class Template_lib{

    var $mci;
    /**
     * constructeur de la classe
     */
    public function __construct()
    {
        $this->mci =& get_instance();
    }

    /**
     * la fonction de chargement de la Template avec le param
     * @param page String;
     * @param title String;
     * @param data Array; 
     */
    public function load_template($page='main/home',$title='Bienvenue sur HIRASSA',$data_array=array(NULL)) {
        $data['title'] = $title;
        $this->mci->load->view('main/header', $data);
        $this->mci->load->view($page,$data_array);
        $this->mci->load->view('main/footer');
    }
}