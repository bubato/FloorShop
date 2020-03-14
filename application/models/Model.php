<?php
class Model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    //insert new data
    public function order_summary_insert($data,$tbl){
        $query = $this->db->insert($tbl,$data);
    }    

    public function get_data($table, $select, $num = null, $sort = null){
        $this->db->select($select);
        if ($num && $sort) {
        	$this->db->limit($num, $sort);
        }
        $query=$this->db->get($table);
        return $query->result_array();          
    }  
}
?>