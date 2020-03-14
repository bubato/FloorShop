<div class="card">
    <div class="card-body">
        <h4 class="card-title">Danh sách sản phẩm</h4>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Ảnh
                        </th>
                        <th>
                            Tên sản phẩm
                        </th>
                        <th>
                            Mã 
                        </th>
                        <th>
                            Thuộc loại
                        </th>
                        <th>
                            Thao tác
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $this->db->select('id, name, image, codehash, id_type');
                        $query = $this->db->get('table_product'); 
                        $render = $query->result_array();
                        foreach ($render as $key => $value) {
                          $value['image'] = explode("...", $value['image'])[0];
                          echo '<tr id="item-sp-'.$value["id"].'">
                                    <td class="py-1">
                                        <img src="'.$value["image"].'" alt="image">
                                    </td>
                                    <td>
                                        '.$value["name"].'
                                    </td>
                                    <td>
                                        '.$value["codehash"].'
                                    </td>
                                    <td>
                                        '.$value["id_type"].'
                                    </td>
                                    <td>
                                         <!--<a><i class="ti-pencil-alt text-primary pr-3 hover"></i></a>-->
                                         <a onclick="DeleteProduct('.$value["id"].')"><i class="ti-trash text-danger hover"></i></a>
                                    </td>
                                </tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
function DeleteProduct(id) {
    var xmlhttp = new XMLHttpRequest();
    var formData = new FormData(); 
    formData.append('id', id);
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('item-sp-' + id).remove();
        alert(this.responseText);
      }
    };
    xmlhttp.open("POST", "Product/DeleteProduct", true);
    xmlhttp.send(formData);    
}
</script>