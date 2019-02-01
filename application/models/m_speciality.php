<?php
	class M_Speciality extends CI_Model{

		public function createSpeciality($data){
	        return $this->db->insert("speciality", $data);
	    }

		public function readSpecialities(){
				$q=$this->db->get('speciality');
		return $q->result();
		}

				public function readSpecialityById($id){
				 return $this->db->get_where('speciality', array('speciality_id' => $id))->row();
		}

	 public   function readSpecialitiesDropdown(){
        $result = $this->db->from("speciality")->order_by('speciality_id')->get();
        $specialityd = [];
      //  $speciality[''] = 'Select speciality';
            foreach($result->result_array() as $row){
                $specialityd[$row['speciality_id']] = $row['speciality_label'];
            }
        
        return $specialityd;
    }



		public function updateSpecialityById($data){
				$this->db->where("speciality_id", $data['speciality_id']);
       		return $this->db->update("speciality", $data);
		}

		public function deleteSpecialityById($id){
		// $impid = implode(", ", $id);
		// var_dump($id);
	     //return    $this->db->delete("department", array("num_department" => $id));*/

	     $this->db->where_in('speciality_id', $id);
	return 	$this->db->delete('speciality');
	    }




	}

?>	