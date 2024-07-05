<?php
include "../navbar/navbar.php";
include "../../../database/database.php";

$obj = new Database();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the specific record for the given ID
    $obj->select('destinationpost', '*', null, "id=$id", null, null);
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

if (isset($_POST['update_btn'])) {
    $title = $_POST['title'];
    $para = $_POST['paragraph'];
    $filename = $_FILES['image']['name'];
    $tempfile = $_FILES['image']['tmp_name'];
    $folder = "../../../uploade-images/" . $filename;

    $update_data = [
        'title' => $title,
        'paragraph' => $para,
    ];

    // Only add image to update data if a file is uploaded
    if (!empty($filename)) {
        $update_data['image'] = $filename;
    }

    $obj->update('destinationpost', $update_data, "id=$id");
    $result = $obj->getResult();

    if ($result) {
        if (!empty($filename)) {
            move_uploaded_file($tempfile, $folder);
        }
        ?>
        <script>
            alert("Data updated successfully");
            window.open('http://localhost/education/admin/pages/destination/list-destination.php', '_self');
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
                                    <h4 class="card-title">Destination Post</h4>
                                    <p class="card-description"> Basic form elements </p>
                                    <!-- post form -->
                                    <form class="forms-sample" action="edit-destination.php?id=<?php echo $row['id'] ?>"
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
                                            <label for="exampleInputEmail3">Paragraph</label>
                                            <input type="file" name="image" class="form-control" id="exampleInputEmail3"
                                                value="<?php echo $row['image'] ?>">
                                            <input type="hidden" name="old_image" class="form-control"
                                                id="exampleInputEmail3" value="<?php echo $row['image'] ?>">
                                            <img src="<?php echo "../../../uploade-images/" .$row['image']; ?>"
                                                style="width: 35px; height: 35px; border-radius: 0;" alt="">
                                        </div>

                                        <button type="submit" name="update_btn"
                                            class="btn btn-primary mr-2">Update</button>

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