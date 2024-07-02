<?php
include "../navbar/navbar.php";
include "../../../database/database.php";

$obj = new Database();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the specific record for the given ID
    $obj->select('admin_user', '*', null, "id=$id", null, null);
    $result = $obj->getResult();
    if (count($result) > 0) {
        $row = $result[0];
    } else {
        echo "No record found for the given ID";
        exit;
    }
} else {
    echo "ID parameter is missing";
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $update_data = [
        'username' => $username,
        'email' => $email,
        'password' => $password
    ];



    $obj->update('admin_user', $update_data, "id=$id");
    $result = $obj->getResult();

    if ($result) {
        ?>
        <script>
            alert("Data updated successfully");
            window.open('http://localhost/education/admin/pages/users/list-user.php', '_self');
        </script>
        <?php
    } else {
        $error = $obj->getResult();
        ?>
        <script>
            alert("Please try again. Error: <?php echo json_encode($error); ?>");
        </script>
        <?php
    }
}
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Form elements</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form elements</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Top University</h4>
            <p class="card-description">Basic form elements</p>
            <form class="forms-sample" action="edit-user.php?id=<?php echo $row['id']; ?>" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Username</label>
                        <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control col-sm-6" id="exampleInputName1" placeholder="username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control col-sm-6" id="exampleInputName1" placeholder="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="text" name="password" value="<?php echo $row['password']; ?>" class="form-control col-sm-6" id="exampleInputName1" placeholder="password">
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.php -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../../assets/vendors/select2/select2.min.js"></script>
<script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
<script src="../../assets/js/settings.js"></script>
<script src="../../assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../../assets/js/file-upload.js"></script>
<script src="../../assets/js/typeahead.js"></script>
<script src="../../assets/js/select2.js"></script>
<!-- End custom js for this page -->
</body>
</html>
