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
  public function to_slug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
  }
  public function add_product(){
      $this->load->helper('url');
      $this->load->Model("model");    
      $data = array(
        'name' => $this->input->post('name_sp'),
        'codehash' => $this->input->post('code_sp'),
        'slug' => $this->to_slug($this->input->post('name_sp')),
        'rate' => (int)$this->input->post('rate_sp'),
        'image' => $this->upload_('imgs_describe'),
        'other_image' => $this->upload_('imgs_slice'),
        'size' => $this->input->post('size_sp'),
        'length' => $this->input->post('length_sp'),
        'material' => $this->input->post('material_sp'),
        'status' => $this->input->post('status_sp'),
        'id_type' => /*$this->input->post('type_sp')*/ 1,
        'application' => $this->input->post('application_sp'),
        'detail' => $this->input->post('detail_sp'),
        'note' => $this->input->post('note_sp')
      );
      $this->model->order_summary_insert($data,'table_product');
      echo "Thêm sản phẩm mới thành công";
  } 
  public function add_product_type(){
      $this->load->helper('url');
      $this->load->Model("model");    
      $data = array(
        'name' => $this->input->post('name_type'),
        'slug' => $this->to_slug($this->input->post('name_type')),
        'image' => $this->upload_('imgs_describe_type'),
        'detail' => $this->input->post('detail_type'),
        'note' => $this->input->post('note_type')
      );
      $this->model->order_summary_insert($data,'table_product_type');
      echo "Thêm loại sản phẩm mới thành công";
  }

}