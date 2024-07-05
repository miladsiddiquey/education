<?php include "../navbar/navbar.php";?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <a href="./add_partner.php" class="btn btn-primary mr-2">Add Partner & admission</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Paragraph </th>
                            <th> Image </th>
                            <th> Action </th>
                          </tr>
                          </thead>
                          <?php 
                    include "../../../database/database.php";
                    $obj = new Database();
                    
                    $obj->select('partner_admission', '*', null, null, null, null);
                    $result = $obj->getResult();
                    foreach ($result as $row) {
                  ?>
                        <tbody>
                          <tr>
                            <td> <?php echo $row['id']; ?> </td>
                            <td><?php echo substr($row['paragraph'],0,60); ?> </td>
                            <td> <img src="<?php echo "../../../uploade-images/" .$row['image']; ?>" style = "width: 35px; height: 35px; border-radius: 0;" alt=""> </td>
                            <td> 
                            <a href="./edit_partner.php?id=<?php echo $row['id'];?>" style="font-size: 20px; padding-right: 10px;"><i class="mdi mdi-lead-pencil"></i></a>
                            <a onclick="return confirm('Are you sure!')" href="./delate_partner.php?id=<?php echo $row['id'];?>" style="font-size: 20px; padding-left: 10px;"><i class="mdi mdi-delete"></i></a>
                            </td>
                          </tr>
                        </tbody>
                        <?php } ?>
                      </table>
                    </div>
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