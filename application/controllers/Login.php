<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class controleur principale pour les action de navigation sur l'application 
 */

class Login extends CI_Controller
{

    public function Index(){
        $data['title'] = 'HIRASSA | Login';
        $this->load->view('auth/login_v',$data);
    }        
    
    public function loginAction(){
        $this->load->model('auth/Login_model');
        $u=$this->input->post('username');
        $p=$this->input->post('username');
        $this->Login_model->login($u,$P);

    } 
    //********************** */
          function login_validation()  
          {  
               $this->load->library('form_validation');
               $this->load->library('session'); 
               $this->form_validation->set_rules('username', 'username', 'required');  
               $this->form_validation->set_rules('password', 'password', 'required');  
               if($this->form_validation->run())  
               {  
                    //true  
                    $username = $this->input->post('username');  
                    $password = $this->input->post('password');  
                    //model function  
                    $this->load->model('auth/Login_model');  
                    if($this->Login_model->can_login($username, $password))  
                    {  
                         $session_data = array(  
                              'username'     =>     $username  
                         );  
                         $this->session->set_userdata($session_data);  
                         redirect(base_url() . 'Pages');  
                    }  
                    else  
                    {  
                         $this->session->set_flashdata('error', 'Invalid Username and Password');  
                         redirect(base_url() . 'Login');  
                    }  
               }  
               else  
               {  
                    //false  
                    $this->login();  
               }  
          }  
          function enter(){  
               if($this->session->userdata('username') != '')  
               {  
                    echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
                    echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';  
               }  
               else  
               {  
                    redirect(base_url() . 'main/login');  
               }  
          }  
          function logout()  
          {  
            $this->load->library('session');
            $this->session->unset_userdata('username');  
            redirect(base_url() . '/login');  
          }
}
