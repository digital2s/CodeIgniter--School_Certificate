<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Student extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email')); 
        $this->load->model('m_student');
        $this->load->model('m_speciality');
    }
    public function index()
    {
       $this->load->view('include/head');
           $this->load->view('include/header');
        $data['students']=$this->m_student->readStudents();
          $data['error'] = "";
           $data['specialities']=$this->m_speciality->readSpecialitiesDropdown();
          
             $this->load->view('student/tableStudents_v', $data);
          
               
         $this->load->view('include/footer');
    }


    public function createStudent(){
        $this->form_validation->set_rules('text_fname','Student First Name','required');
        $this->form_validation->set_rules('text_lname','Student Last Name','required');    
       $this->form_validation->set_rules('text_staff_member_fname','Stuff Member First Name','required'); 
       $this->form_validation->set_rules('text_staff_member_lname','Stuff Member Last Name','required');
        if (empty($_FILES['file_picture']['name'])) {
            $this->form_validation->set_rules('file_picture','Student picture','required');
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
        $data['students']=$this->m_student->readStudents();
             $this->load->view('student/tableStudents_v', $data);
          
               
         $this->load->view('include/footer');
        } else{

     
             
          
             if (!$this->upload->do_upload('file_picture')) {

                       $this->load->view('include/head');
           $this->load->view('include/header');
        $data['students']=$this->m_student->readStudents();
           $data['error'] = $this->upload->display_errors();
             $this->load->view('student/tableStudents_v', $data);
          
               
         $this->load->view('include/footer');
            }else{


               
           // $this->upload->do_upload('file_picture');
             $data_2 = array('upload_data' => $this->upload->data());

        $data= array(
            'student_fname'=>$this->input->post('text_fname'),
            'student_lname'=>$this->input->post('text_lname'),
             'student_degree'=>$this->input->post('select_year'),
            'speciality_id'=> $this->input->post('select_speciality'),
             'school_id'=> 4,
              'staff_member_fname' => $this->input->post('text_staff_member_fname'),
              'staff_member_lname' => $this->input->post('text_staff_member_lname'),
              'student_img' => $data_2['upload_data']['file_name']
  
        );


           $this->m_student->createStudent($data);
           redirect('c_student');
       }}
    }

    public function updateStudent($id){
       $this->load->view('include/head');
           $this->load->view('include/header');
         
          $data=$this->m_student->readStudentById($id);
            $data['specialities']=$this->m_speciality->readSpecialitiesDropdown();
             $data['students']=$this->m_student->readStudents();
          $data['error'] = "";
           $data['specialities']=$this->m_speciality->readSpecialitiesDropdown();
   
        $this->load->view('student/formStudent_v', $data);
              $this->load->view('include/footer');
    }

    public function validFormUpdateStudent(){
            $this->form_validation->set_rules('text_fname','Student First Name','required');
        $this->form_validation->set_rules('text_lname','Student Last Name','required');    
       $this->form_validation->set_rules('text_staff_member_fname','Stuff Member First Name','required'); 
       $this->form_validation->set_rules('text_staff_member_lname','Stuff Member Last Name','required');
       $this->form_validation->set_rules('text_picture','Picture','required');

      
       
$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

     



       if($this->form_validation->run() == False){
           $this->load->view('include/head');
           $this->load->view('include/header');
         
          $data=$this->m_student->readStudentById($id);
       
        $this->load->view('student/formStudent_v');
              $this->load->view('include/footer');
        } else{

     
             
        
        $data= array(
          'student_id'=>$this->input->post('hidden_id'),
            'student_fname'=>$this->input->post('text_fname'),
            'student_lname'=>$this->input->post('text_lname'),
                 'student_img' => $this->input->post('text_picture'),
             'student_degree'=>$this->input->post('select_year'),
            'speciality_id'=> $this->input->post('select_speciality'),
              'staff_member_fname' => $this->input->post('text_staff_member_fname'),
              'staff_member_lname' => $this->input->post('text_staff_member_lname')
         
  
        );



           $this->m_student->updateStudentById($data);
         redirect('c_student');
       }
    }

      public function deleteStudent($id=""){

          if ($id=="") {
            $this->m_student->deleteStudents();
          }else{
            $this->m_student->deleteStudentById($id);
          }
        redirect('c_student');
    }
}