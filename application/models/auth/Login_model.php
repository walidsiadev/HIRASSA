<?php

class Login_model extends CI_Model
{

	function login($u,$p){
		$login=$this->db->get_where('users',array('u_nom' => $u ,'u_pass'=> $p));
		if(count($login->result()>=0)){
			foreach ($login->result() as $key) {
				$sas['username']= $key->u_nom;
				$sas['u_email	']= $key->u_email;
				$this->session->set_userdata($sas);	
			}
			redirect(base_url().'Pages');
		}else {
			redirect(base_url().'Login');
		}
	
	}
	function can_login($username, $password)  
      {  
           $this->db->where('u_nom', $username);  
           $this->db->where('u_pass', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  

}