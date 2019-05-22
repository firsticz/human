<?php
class FoodModel extends CI_Model
{
    public function checkLogin($id, $pass){
		$sql ="SELECT * FROM user where username = '".$id."' and password = '".$pass."' ";
		// var_dump($sql);
		$query = $this->db->query($sql);
		$result = false;
		if($query){
			foreach ($query->result() as $row ) {
				if($row->password == $pass){
					$_SESSION['login'] = 1;
					$_SESSION['userid'] = $row->userid;
					$_SESSION['username'] = $row->username; 	
					$result = true;			
				}
			}
        }
        // var_dump($result);
		return $result;
    }


    public function getfood()
    {
        $sql = "SELECT * FROM food";
		$query = $this->db->query($sql);
		return $query;
		}
		
		public function getdrink()
    {
        $sql = "SELECT * FROM drink";
		$query = $this->db->query($sql);
		return $query;
    }
}