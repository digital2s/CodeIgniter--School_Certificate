<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Speciality extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email')); 
        $this->load->model('m_speciality');
    }
    public function index()
    {
       $this->load->view('include/head');
           $this->load->view('include/header');
           $data['specialities']=$this->m_speciality->readSpecialities();
             $this->load->view('speciality/tableSpeciality_v', $data);
          
         $this->load->view('include/footer');
    }

  

    public function createSpeciality(){
        $this->form_validation->set_rules('text_speciality','Speciality Label','required');
       
      
       
$this->form_validation->set_error_delimiters('<span class="error  text-danger">', '</span>');

    



       if($this->form_validation->run() == False){
           $this->load->view('include/head');
           $this->load->view('include/header');
          $data['specialities']=$this->m_speciality->readSpecialities();
        $this->load->view('speciality/tableSpeciality_v', $data);
         $this->load->view('include/footer');
        } else{

        $data= array(
            'speciality_label'=>$this->input->post('text_speciality'),
        );


           $this->m_speciality->createSpeciality($data);
           redirect('c_speciality');
       }
    }

    public function updateSpeciality($id){
       $this->load->view('include/head');
           $this->load->view('include/header');
         
          $data['speciality']=$this->m_speciality->readSpecialityById($id);
           $data['specialities']=$this->m_speciality->readSpecialities();
  
        $this->load->view('speciality/formSpeciality_v', $data);
              $this->load->view('include/footer');
    }

    public function validFormUpdateSpeciality(){
              $this->form_validation->set_rules('text_speciality','Speciality Label','required');

       
$this->form_validation->set_error_delimiters('<span class="error">', '</span>');


       if($this->form_validation->run() == False){
           $this->load->view('include/head');
           $this->load->view('include/header');
         
          $data=$this->m_speciality->readSpecialityById($id);
  
        $this->load->view('speciality/formSpeciality_v', $data);
              $this->load->view('include/footer');
        } else{

            

        $data= array(
             'speciality_id'=>$this->input->post('hidden_id'),
            'speciality_label'=>$this->input->post('text_speciality'),

        );


           $this->m_speciality->updateSpecialityById($data);
           redirect('c_speciality');
       }
    }

      public function deleteSpeciality(){

  
            $id=$this->input->post('checkbox_speciality');
     

            $this->m_speciality->deleteSpecialityById($id);
        redirect('c_speciality');
    }
}