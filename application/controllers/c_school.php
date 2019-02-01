<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_School extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email')); 
        $this->load->model('m_school');
    }
    public function index()
    {
       $this->load->view('include/head');
           $this->load->view('include/header');
           if (($data=$this->m_school->readSchool())==true) {
             $this->load->view('school/tableSchool_v', $data);
           }else{
            $data['error'] = "";
        $this->load->view('school/formSchool_v', $data);
           }
               
         $this->load->view('include/footer');
    }


    public function validFormAddSchool(){
        $this->form_validation->set_rules('text_school','School Name','required');
        $this->form_validation->set_rules('text_city','School City','required');    
       $this->form_validation->set_rules('number_year1','School Year','required'); 
       $this->form_validation->set_rules('number_year2','School Year','required');
        if (empty($_FILES['file_logo']['name'])) {
            $this->form_validation->set_rules('file_logo','School Logo','required');
        }
      
       
$this->form_validation->set_error_delimiters('<span class="error text-danger">', '</span>');

        $config = array(
            'upload_path' => "./assets/images/",
            'allowed_types' => "*",
            
        );

       $this->load->library('upload', $config);




       if($this->form_validation->run() == False){
           $this->load->view('include/head');
           $this->load->view('include/header');
           $data['error'] = "";
        $this->load->view('school/formSchool_v', $data);
         $this->load->view('include/footer');
        } else{

        if (!$this->upload->do_upload('file_logo')) {
         $this->load->view('include/head');
           $this->load->view('include/header');
           $data['error'] = $this->upload->display_errors();;
        $this->load->view('school/formSchool_v', $data);
         $this->load->view('include/footer');
            }else{
                    $data_2 = array('upload_data' => $this->upload->data());
        $data= array(
            'school_name'=>$this->input->post('text_school'),
            'school_city'=>$this->input->post('text_city'),
            'school_logo'=>  $data_2['upload_data']['file_name'],
             'school_year'=>$this->input->post('number_year1') ."/". $this->input->post('number_year2')
           
        );


           $this->m_school->createSchool($data);
           redirect('c_school');
       }}
    }

    public function updateSchool(){
        $this->form_validation->set_rules('text_school','School Name','required');
        $this->form_validation->set_rules('text_city','School City','required');    
      
       
      $this->form_validation->set_error_delimiters('<span  class="error  text-danger">', '</span>');



       if($this->form_validation->run() == False){
           $this->load->view('include/head');
           $this->load->view('include/header');
         
          $data=$this->m_school->readSchool();
        $this->load->view('school/formSchool_v', $data);
              $this->load->view('include/footer');
        } else{
        $data= array(
            'school_name'=>$this->input->post('text_school'),
            'school_city'=>$this->input->post('text_city'),
        );
           $this->m_school->updateSchool($data);
           redirect('c_school');
          
       }
    }

 
      public function deleteSchool(){

            $this->m_school->deleteSchool();
        redirect('c_school');
    }
}