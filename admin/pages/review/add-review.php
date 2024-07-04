<?php
include "../navbar/navbar.php";
include "../../../database/database.php";

$obj = new Database();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description']; 
    $stars = $_POST['stars']; 
    $filename = $_FILES['image']['name'];
    $tempfile = $_FILES['image']['tmp_name'];
    $folder = "../../../uploade-images/" . $filename;

    $obj->insert('review', [
        'name' => $name,
        'description' => $description,
        'stars' => $stars,
        'image' => $filename
    ]);
    $result = $obj->getResult();

    if ($result) {
        move_uploaded_file($tempfile, $folder);
        ?>
        <script>
            alert("Data added successfully");
            window.open('http://localhost/education/admin/pages/review/list-review.php', '_self');
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
              <h3 class="page-title"> Form elements </h3>
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
                    <h4 class="card-title">Client Review</h4>
                    <p class="card-description"> Basic form elements </p>
                    <!-- post form -->

                    <form class="forms-sample" action="add-review.php" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="exampleInputName1">Full Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Description</label>
                        <textarea type="text" name="description" class="form-control" id="exampleInputEmail3"  rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Stars</label>
                        <input type="number" name="stars"  maxlength="1" class="form-control" id="exampleInputName1" placeholder="Stars">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputEmail3" placeholder="Paragraph">
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
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
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