<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
	public function DeleteProduct()
	{   
		if ($this->db->delete('table_product', array('id' => $this->input->post('id')))) {
			echo 'Xóa thành công';
		} else {
			echo 'Xóa thất bại';
		}
	}
}	