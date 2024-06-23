<?php
include '../../config.php';

$id = $_GET['id']; // Ensure the id is an integer for security
if ($id > 0) {
    // Retrieve the image filename
    $query = "SELECT image FROM `client-review` WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];

        // Delete the record from the database
        $deleteQuery = "DELETE FROM `client-review` WHERE id = '$id'";
        $deleteResult = mysqli_query($con, $deleteQuery);

        if ($deleteResult) {
            // Delete the image file from the server
            if (file_exists("../../../uploade-images/".$image)) {
                unlink("../../../uploade-images/".$image);
            }
            ?>
            <script>
                alert("Data deleted successfully");
                window.open('http://localhost/education/admin/pages/review/list-review.php', '_self');
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
} else {
    ?>
    <script>
        alert("Invalid ID.");
    </script>
    <?php
}
?>


