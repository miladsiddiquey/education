<?php
include "../navbar/navbar.php";
include "../../../database/database.php";

$obj = new Database();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $para = $_POST['paragraph'];
    $global_ranking = $_POST['global_ranking'];
    $university_name = $_POST['university_name'];
    $student_no = $_POST['student_no'];
    $courses_no = $_POST['courses_no'];
    $filename = $_FILES['image']['name'];
    $tempfile = $_FILES['image']['tmp_name'];
    $folder = "../../../uploade-images/" . $filename;

    $obj->insert('top_university', [
        'title' => $title,
        'paragraph' => $para,
        'global_ranking' => $global_ranking,
        'university_name' => $university_name,
        'student_no' => $student_no,
        'courses_no' => $courses_no,
        'image' => $filename
    ]);
    $result = $obj->getResult();

    if ($result) {
        move_uploaded_file($tempfile, $folder);
        ?>
        <script>
            alert("Data added successfully");
            window.open('http://localhost/education/admin/pages/university/list-university.php', '_self');
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
                    <h4 class="card-title">Top University</h4>
                    <p class="card-description"> Basic form elements </p>

                   <form class="forms-sample" action="add-university.php" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Paragraph</label>
                        <textarea type="text" name="paragraph" class="form-control" id="exampleInputEmail3"  rows="5"></textarea>
                      </div>

                      <div class="d-flex justify-content-between">
                      <div class="form-group">
                        <label for="exampleInputName1">Global Ranking</label>
                        <input type="text" name="global_ranking" class="form-control" id="exampleInputName1" placeholder="Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">University</label>
                        <input type="text" name="university_name" class="form-control" id="exampleInputName1" placeholder="University Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">No. of Students</label>
                        <input type="text" name="student_no" class="form-control" id="exampleInputName1" placeholder="Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">No. of Courses</label>
                        <input type="text" name="courses_no" class="form-control" id="exampleInputName1" placeholder="Number">
                      </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">image</label>
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