<?php
	class M_Student extends CI_Model{

		public function createStudent($data){
	        return $this->db->insert("student", $data);
	    }

		public function readStudents(){
					$this->db->select('*');
	        $this->db->from('student st');
	        $this->db->join('speciality sp', 'st.speciality_id=sp.speciality_id');
	         $q= $this->db->get();
		return $q->result();
		}

			public function readStudentById($id){
				 return $this->db->get_where('student', array('student_id' => $id), 1, 0)->row_array();
		}


			public function readStudentByName($name){
					$this->db->select('*');
	        $this->db->from('student st');
	        $this->db->join('speciality sp', 'st.speciality_id=sp.speciality_id');
	         $this->db->join('school sc', 'st.school_id=sc.school_id');
	          $this->db->where("student_fname", $name);
	         $q= $this->db->get();
		return $q->result_array();
		}



			public function readStudentByName2($name){
					$this->db->select('*');
	        $this->db->from('student st');
	        $this->db->join('speciality sp', 'st.speciality_id=sp.speciality_id');
	         $this->db->join('school sc', 'st.school_id=sc.school_id');
	          $this->db->where("student_fname", $name);
	         $q= $this->db->get();
		return $q->row_array();
		}



		public function updateStudentById($data){
				$this->db->where("student_id",$data['student_id']);
       	return 	$this->db->update("student", $data);
		}

		public function deleteStudentById($id){
		   	//	$impid = implode(", ", $id);
	     //return    $this->db->delete("department", array("num_department" => $id));*/

	     $this->db->where_in('student_id', $id);
		return $this->db->delete('student');
	    }

	    public function deleteStudents(){

	return 	$this->db->empty_table('student');
	    }




	}

?>	