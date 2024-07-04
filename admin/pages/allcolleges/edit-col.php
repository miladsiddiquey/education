<?php
include '../../config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT * FROM allcolleges WHERE id='$id'";
    $data = mysqli_query($con, $select);
    $row = mysqli_fetch_array($data);
} else {
    echo "ID parameter is missing";
    exit; // Stop further execution if ID is not set
}
?>
<?php include "../navbar/navbar.php";?>
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
                                    <h4 class="card-title">Destination Post</h4>
                                    <p class="card-description"> Basic form elements </p>
                                    <!-- post form -->
                                    <form class="forms-sample" action="edit-col.php?id=<?php echo $row['id'] ?>"
                                        method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputName1"
                                                value="<?php echo $row['title'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Paragraph</label>
                                            <input type="text" name="paragraph" class="form-control"
                                                id="exampleInputEmail3" value="<?php echo $row['paragraph'] ?>">
                                        </div>
                                        <div class="form-group">
                            <label >Category</label>
                            <div class="col-sm-3">
                              <select class="form-control" name="category" >
                                <option value="college">College</option>
                                <option value="university">University</option>
                                <option value="province">Province</option>
                              </select>
                            </div>
                          </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Image</label>
                                            <input type="file" name="image" class="form-control" id="exampleInputEmail3"
                                                value="<?php echo $row['image'] ?>">
                                            <input type="hidden" name="old_image" class="form-control"
                                                id="exampleInputEmail3" value="<?php echo $row['image'] ?>">
                                            <img src="<?php echo "../../../uploade-images/" .$row['image']; ?>"
                                                style="width: 35px; height: 35px; border-radius: 0;" alt="">
                                        </div>

                                        <button type="submit" name="update-btn"
                                            class="btn btn-primary mr-2">Update</button>

                                    </form>
                                    <?php
if(isset($_POST['update-btn'])){
  include "../../config.php";
  $title =mysqli_real_escape_string($con, $_POST['title']);
  $para =mysqli_real_escape_string($con, $_POST['paragraph']);
  $category =mysqli_real_escape_string($con, $_POST['category']);
  $filename = $_FILES['image']['name'];
  $old_image = $_POST['old_image'];
  $tempfile = $_FILES['image']['tmp_name'];
  $folder = "../../../uploade-images/".$filename;

  if($filename !=''){
    $update_filename = $filename;
  }else{
    $update_filename = $old_image;
  }
  
  $sql = "UPDATE allcolleges SET title = '$title', paragraph = '$para', category = '$category', image = '$update_filename' WHERE id = '$id' ";
  $result  =mysqli_query($con, $sql);
  

  if($result){
    if($_FILES['image']['name'] !=''){
      move_uploaded_file($_FILES['image']['tmp_name'],"../../../uploade-images/".$_FILES['image']['name']);
      unlink("../../../uploade-images/".$old_image);
    }
    ?>
                                    <script>
                                    alert("data Update successfully");
                                    window.open(
                                        'http://localhost/education/admin/pages/allcolleges/list-col.php',
                                        '_self');
                                    </script>
                                    <?php
}else{
    ?>
                                    <script>
                                    alert("Please try again");
                                    </script>
                                    <?php
}

}
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.php -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                                admin templates</a> from Bootstrapdash.com</span>
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