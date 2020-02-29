<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
    private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] =  APPPATH. '../uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']      = 1000000;
        $config['overwrite']     = TRUE;
    
        return $config;
    }	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		

	}
  public function upload_($input) {
      $this->load->library('upload');
      $files = $_FILES;
      $cpt = count($_FILES[$input]['name']);
      $img = '';
      for($i=0; $i<$cpt; $i++)
      {           
          $_FILES[$input]['name']= $files[$input]['name'][$i];
          $_FILES[$input]['type']= $files[$input]['type'][$i];
          $_FILES[$input]['tmp_name']= $files[$input]['tmp_name'][$i];
          $_FILES[$input]['error']= $files[$input]['error'][$i];
          $_FILES[$input]['size']= $files[$input]['size'][$i];    
          $img .= 'uploads/'.$files[$input]['name'][$i].'...';
          $this->upload->initialize($this->set_upload_options());
          $this->upload->do_upload($input);
      }   
      return $img;
  }
	public function file_add(){
      /*$this->upload_('imgs_describe');
      $this->upload_('imgs_slice');*/
      $this->load->helper('url');
      $this->load->Model("model");    
      $data = array(
        'sp_name'=>$this->input->post('name_sp'),
        'sp_cost_sale'=>$this->input->post('code_sp'),
        'sp_cost_deal'=>$this->upload_('imgs_describe'),
        'sp_time_deal'=>$this->upload_('imgs_slice'),
        'sp_isnew'=>$this->input->post('size_sp'),
        'sp_size_length'=>$this->input->post('length_sp'),
        'sp_size_weight'=>$this->input->post('material_sp'),
        'sp_size_height'=>$this->input->post('status_sp'),
        'sp_from'=>$this->input->post('type_sp'),
        'sp_description'=>$this->input->post('application_sp'),
        'sp_detail'=>$this->input->post('detail_sp')
      );
      print_r($data);
      //$this->model->order_summary_insert($data,'sp_category');
      echo "Thêm sản phẩm mới thành công";
	}	

}