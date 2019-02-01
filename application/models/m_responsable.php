<?php
	class M_Responsable extends CI_Model{
		public function verif_connexion($data)
    	{
	        $sql = "SELECT *
	                FROM responsable
	                WHERE responsable_login=\"".$data['responsable_login']."\"
	                AND responsable_pw=\"".$data['responsable_pw']."\"";

	        $query=$this->db->query($sql);
	        if($query->num_rows()==1)
	        {
	            $row=$query->result_array();
	            $data_resultat=$row[0];
	            return $data_resultat;
	        }
	        else
	            return false;
    	}

    	public function readResponsable(){
				 return $this->db->get('responsable')->result_array();
		}

		 	public function readResponsable2(){
				 return $this->db->get('responsable')->row();
		}

		public function updateResponsable($data){
       		return $this->db->update("responsable", $data);
		}
	}