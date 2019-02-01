<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Responsable extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email')); 
        $this->load->model('m_responsable');
    }

    public function index()
    {
          $data['error'] = ""; 
         $this->load->view('include/head');
         $this->load->view('login.php', $data);

    }


    public function signin()
    {
        $this->form_validation->set_rules('text_login','Login','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');

   
        $data= array(
            'responsable_login'=>$this->input->post('text_login'),
            'responsable_pw'=>$this->input->post('password')
        );

        if($this->form_validation->run() == false){  
        
          $data['error'] = ""; 
         $this->load->view('include/head');
         $this->load->view('login.php', $data);
        }else{
            $data_session=array();
            if( ($data_session=$this->m_responsable->verif_connexion($data) ) != false){
                $this->session->set_userdata($data_session);
                redirect('c_certificate');
            }else{
               $data['error']="Login or Password Error !";
                $this->load->view('include/head');
                $this->load->view('login', $data);
               }
        }   
    }

    public function signout()
    {
       $this->session->sess_destroy();
        redirect('C_responsable');

    }

      public function reset_pw()
    {
       $this->load->view('include/head');
       $this->load->view('reset_pw');
    }

    public function updateResponsable()
    {
        $this->load->view('include/head');
          $this->load->view('include/header');
           $responsable = $this->m_responsable->readResponsable2();
       $this->load->view('responsable/form_responsable_v', $responsable);
       $this->load->view('include/footer');
  
    }


public function validFormUpdateResponsable(){
      $this->form_validation->set_rules('text_fname','fname','required');
      $this->form_validation->set_rules('text_lname','lname','required');
      $this->form_validation->set_rules('text_email','email','required');
      $this->form_validation->set_rules('text_login','department','required');
      $this->form_validation->set_rules('text_pw','password','required');
       

        $data= array(
            'responsable_fname' =>$this->input->post('text_fname'),
            'responsable_lname'=>$this->input->post('text_lname'),
             'responsable_email' =>$this->input->post('text_email'),
            'responsable_login'=>$this->input->post('text_login'),
            'responsable_pw'=>$this->input->post('text_pw'),

        );

       if($this->form_validation->run() == False){
             $this->load->view('include/head');
          $this->load->view('include/header');
           $responsable = $this->m_responsable->readResponsable();
       $this->load->view('responsable/form_responsable_v', $responsable);
  
        }
        else
        {
           $this->m_responsable->updateResponsable($data);
           redirect('C_responsable');
       }
}

}