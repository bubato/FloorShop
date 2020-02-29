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

}
?>