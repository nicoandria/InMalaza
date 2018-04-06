<?php

class Model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
    public function findQuery($queryString){
        $this->load->database();
        try{
            $query = $this->db->query($queryString);
            $result = $query->result();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
        finally{
            $this->db->close();
        }
    }

    public function find($colonne,$table,$condition){
        $queryString = "Select " .$colonne. "from " .$table. " " .$condition ;
        $result = $this->findQuery($queryString);
        return $result;
    }

    public function delete($table,$condition){
        $this->load->database();
        try{
            $queryString = "Delete from " .$table. " " .$condition ;
            $this->db->query($queryString);
            return true;
        } catch (Exception $e) {
            throw $e;
        }
        finally{
            $this->db->close();
        }
    }

    public function update($table,$update,$condition){
        $this->load->database();
        try {
            $queryString = 'Update '.$table.' SET '.$update.' where '.$condition;
            $this->db->query($queryString);
            return true;
        } catch (Exception $e) {
            throw $e;
        }
        finally{
            $this->db->close();
        }
    }
    public function save($table,$insertion){
        $this->load->database();
        try {
            $queryString = 'Insert into '.$table.' values ('.$insertion.')';
            $this->db->query($queryString);
            return true;
        } catch (Exception $e) {
            throw $e;
        }
        finally{
            $this->db->close();
        }
    }
}