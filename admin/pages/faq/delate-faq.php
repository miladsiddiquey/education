<?php
include '../../config.php';

$id = $_GET['id']; // Ensure the id is an integer for security
if ($id > 0) {
        // Delete the record from the database
        $deleteQuery = "DELETE FROM `question` WHERE id = '$id'";
        $deleteResult = mysqli_query($con, $deleteQuery);

        if ($deleteResult) {

            ?>
            <script>
                alert("Data deleted successfully");
                window.open('http://localhost/education/admin/pages/faq/list-faq.php', '_self');
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Error deleting data. Please try again.");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Record not found.");
        </script>
        <?php
    }



?>


