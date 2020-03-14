<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Thêm loại sản phẩm mới</h4>
      <?php echo form_open_multipart('upload/add_product_type');?>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleInputName1">Tên loại sản phẩm</label>
            <input name="name_type" type="text" class="form-control" id="exampleInputName1">
          </div>                  
          <div class="form-group col-6">
              <label for="exampleSelectGender">Chọn ảnh mô tả loại sản phẩm(loại ảnh ngang)</label><br>
              <input name="imgs_describe_type[]" type="file" id="imgs_describe_type" required multiple >     
          </div>
          <div class="form-group col-12">
            <label for="exampleTextarea1">Mô tả chi tiết</label>
            <textarea name="detail_type" id="editor_type" cols="30" rows="10"></textarea>
          </div>  
          <div class="form-group col-12">
            <label for="exampleTextarea1">Ghi chú</label>
            <textarea name="note_type" class="form-control" rows="4"></textarea>
          </div>              
          <button type="submit" target="_blank" class="btn btn-primary ml-3">Lưu</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace('editor_type', {
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