<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sàn Gỗ Tuấn Anh Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style_admin.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="img/favicon.png" />
  <style type="text/css">
    .hover{
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php $this->load->view("admin_element/header")?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <!--<li class="nav-item">
            <a class="nav-link" onclick="openTab('_dashboard')">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Bảng điều khiển</span>
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" onclick="openTab('_setting_home')">
              <i class="ti-wand menu-icon"></i>
              <span class="menu-title">Cài đặt trang chủ</span>
            </a>
              </li> <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Loại Sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" onclick="openTab('_type_list')">Danh sách loại sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" onclick="openTab('_type_add')">Thêm loại sản phẩm</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-type" aria-expanded="false" aria-controls="ui-type">
              <i class="ti-package menu-icon"></i>
              <span class="menu-title">Sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-type">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" onclick="openTab('_sp_list')">Danh sách sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" onclick="openTab('_sp_add')">Thêm sản phẩm</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- setting direct tab in ui.js-->
      <div class="main-panel" id="main_panel">
         <div id="tab_dashboard" style="display:none">
             <?php $this->load->view("admin_element/dashboard")?>
         </div>
         <div id="tab_setting_home" style="display:none">
             <?php $this->load->view("admin_element/setting_home")?>
         </div>
         <div id="tab_sp_add" style="display:none">
             <?php $this->load->view("admin_element/sp_add")?>
         </div>
         <div id="tab_sp_list" style="display:none">
             <?php $this->load->view("admin_element/sp_list")?>
         </div>
         <div id="tab_sp_edit" style="display:none">1</div>
         <div id="tab_sp_del" style="display:none">2</div>
         <div id="tab_type_add" style="display:block">
           <?php $this->load->view("admin_element/lsp_add")?>
         </div>
         <div id="tab_type_list" style="display:none">
             <?php $this->load->view("admin_element/lsp_list")?>
         </div>
         <div id="tab_type_edit" style="display:none">3</div>
         <div id="tab_type_del" style="display:none">4</div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/admin/off-canvas.js"></script>
  <script src="js/admin/hoverable-collapse.js"></script>
  <script src="js/admin/template.js"></script>
  <script src="js/admin/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/admin/dashboard.js"></script>
  <script src="js/admin/ui.js"></script>
</body>

</html>

