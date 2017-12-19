<?php
	class Retrive_data_model extends CI_Model {

		function validateAdminLogin(){
			$username =  $this->input->post("username");
			$pass = $this->input->post("password");

			$sql = "SELECT * FROM admin WHERE username ='$username' AND password = '$pass'";
			if(($this->db->query($sql)->num_rows())>0){
				return true;
			}
			else 
				return false;
		}

		function insertNotice(){
			$noticename = $this->input->post('noticename');
			$noticebody = $this->input->post('noticebody');

			$sql = "INSERT INTO notice (name, body) VALUES ('$noticename','$noticebody')";
			$this->db->query($sql);
		}

		function retriveAllNotice(){
			$get="SELECT * FROM notice";
			$query = $this->db->query($get);
	   	    return $query->result_array();
		}

		function retriveSingleNotice($id){
			$get="SELECT * FROM notice WHERE id='$id'";
			$query = $this->db->query($get);
	   	    return $query->result_array();
		}
	}
?>