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
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" onclick="openTab('_sp_add')">Thêm sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" onclick="openTab('_sp_edit')">Chỉnh sửa sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" onclick="openTab('_sp_del')">Xóa sản phẩm</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel" id="main_panel">
         <div id="tab_dashboard" style="display:none">
             <?php $this->load->view("admin_element/dashboard")?>
         </div>
         <div id="tab_sp_add">
             <?php $this->load->view("admin_element/sp_add")?>
         </div>
         <div id="tab_sp_edit"></div>
         <div id="tab_sp_del"></div>
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
  <!-- End custom js for this page-->
  <script type="text/javascript">
      const listTab = ["tab_dashboard", "tab_sp_add", "tab_sp_edit", "tab_sp_del"];
      function openTab(tab) {
          listTab.forEach(Item => {
            Id(Item).style.display = "none";
          });
          Id("tab" + tab).style.display = "block";
      }

      function Id(text) {
          return document.getElementById(text);
      }    
  </script>
</body>

</html>

