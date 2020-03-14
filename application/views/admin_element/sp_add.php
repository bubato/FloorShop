<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Thêm sản phẩm mới</h4>
      <?php echo form_open_multipart('upload/add_product');?>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleInputName1">Tên sản phẩm</label>
            <input name="name_sp" type="text" class="form-control" id="exampleInputName1">
          </div>                  
          <div class="form-group col-6">
            <label for="exampleInputName1">Mã sản phẩm</label>
            <input name="code_sp" type="text" class="form-control" id="exampleInputName1">
          </div> 
          <div class="form-group col-6">
              <label for="exampleSelectGender">Chọn ảnh mô tả sản phẩm (Nếu chọn nhiều ảnh giữ Ctrl và chọn nhiều ảnh)</label><br>
              <input name="imgs_describe[]" type="file" id="imgs_describe" required multiple >     
          </div>
          <div class="form-group col-6">
              <label for="exampleSelectGender">Chọn ảnh mặt cắt sản phẩm</label><br>
              <input name="imgs_slice[]" type="file" id="imgs_slice" required multiple >     
          </div>
          <div class="form-group col-6">
            <label for="exampleInputPassword4">Kích thước(KT)</label>
            <input name="size_sp" type="text" class="form-control">
          </div>
          <div class="form-group col-6">
            <label for="exampleInputPassword4">Độ dài thanh</label>
            <input name="length_sp" type="text" class="form-control">
          </div>
          <div class="form-group col-2">
            <label for="exampleInputPassword4">Chất liệu</label>
            <input name="material_sp" type="text" class="form-control">
          </div> 
          <div class="form-group col-2">
            <label for="exampleInputCity1">Chất lượng</label>
            <select name="rate_sp" class="form-control">
              <option value='1'>1 sao</option>
              <option value='2'>2 sao</option>
              <option value='3'>3 sao</option>
              <option value='4'>4 sao</option>
              <option value='5'>5 sao</option>
            </select>
          </div>                   
          <div class="form-group col-2">
            <label for="exampleInputCity1">Trạng thái</label>
            <select name="status_sp" class="form-control">
              <option>Còn hàng</option>
              <option>Hết hàng</option>
              <option>Sắp có hàng</option>
              <option>Ngừng kinh doanh</option>
              <option>Đang cập nhật</option>
            </select>
          </div>
          <div class="form-group col-6">
            <label for="exampleInputCity1">Loại mặt hàng</label>
            <select name="type_sp" class="form-control">
              <?php
                $this->db->select('id, name');
                $query = $this->db->get('table_product_type'); 
                $render = $query->result_array();
                foreach ($render as $key => $value) {
                  echo '<option>'.$value["name"].'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group col-6">
            <label for="exampleTextarea1">Ứng dụng</label>
            <textarea name="application_sp" class="form-control" rows="4"></textarea>
          </div>
          <div class="form-group col-6">
            <label for="exampleTextarea1">Ghi chú</label>
            <textarea name="note_sp" class="form-control" rows="4"></textarea>
          </div>
          <div class="form-group col-12">
            <label for="exampleTextarea1">Mô tả chi tiết</label>
            <textarea name="detail_sp" id="editor" cols="30" rows="10"></textarea>
          </div>                
          <button type="submit" class="btn btn-primary ml-3">Lưu</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace('editor', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});

</script>       