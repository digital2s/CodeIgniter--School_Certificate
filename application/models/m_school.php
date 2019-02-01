<?php
	class M_School extends CI_Model{

		public function createSchool($data){
	        return $this->db->insert("school", $data);
	    }

		public function readSchool(){
				$q=$this->db->get('school');
				       if($q->num_rows() > 0){
				return $q->row();  // _array
			}else{
				return false;
			}
		}

	


		public function updateSchool($data){
       		return $this->db->update("school", $data);
		}

		public function deleteSchool(){
		   return $this->db->empty_table('school');
	    }




	}

?>	