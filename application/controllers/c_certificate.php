<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Certificate extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string', 'date'));
        $this->load->library(array('session','form_validation','email')); 
        $this->load->model('m_student');
        $this->load->model('m_responsable');
        $this->load->model('m_school');
    }
    public function index()
    {
       $this->load->view('include/head');
           $this->load->view('include/header');
              $data['students']=$this->m_student->readStudents();
      $this->load->view('certificate/main_v', $data);
         $this->load->view('include/footer');

    }

     public function readCertificate(){
     //  $name=$this->input->post('datalist_student');
          $name=$this->input->post('json_student');

     /*   $this->load->view('include/head');
          $this->load->view('include/header');*/
       
        $data['s']=$this->m_student->readStudentByName($name);
        $data['responsable']=$this->m_responsable->readResponsable();
                         
      //  $this->load->view('certificate/v_certificate', $data);
      //  $this->load->view('include/footer');*/

      echo json_encode($data);


          
     }


     public function generatePDF(){
      
     
         $name=$this->input->post('datalist_student');

        //this the the PDF filename that user will get to download
        $pdfFilePath = $name."_certificate.pdf";
        //load mPDF library
        $this->load->library('m_pdf');
              $this->load->view('include/head');
                          $data['s']=$this->m_student->readStudentByName2($name);
                             $data['responsable']=$this->m_responsable->readResponsable2();
                            $data['school']=$this->m_school->readSchool();
      $html=  $this->load->view('certificate/v_certificate', $data, true);
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
          $this->m_pdf->pdf->Output($pdfFilePath, "D");  
     }

}