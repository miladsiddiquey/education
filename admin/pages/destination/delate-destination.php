<?php
include "../../../database/database.php";
$obj = new Database();

$id = (int)$_GET['id'];
if ($id > 0) {
    
    $obj->select('destinationpost', '*', null, "id='$id'", null, null);
    $result = $obj->getResult();

    if ($result && count($result) > 0) {
        $row = $result[0];
        $image = $row['image'];

        $deleteQuery = "DELETE FROM destinationpost WHERE id='$id'";

        // Delete the record from the database
        $deleteResult = $obj->delete('destinationpost', "id='$id'");

        if ($deleteResult) {
            // Delete the image file from the server
            if (file_exists("../../../uploade-images/".$image)) {
                unlink("../../../uploade-images/".$image);
            }
            ?>
            <script>
                alert("Data deleted successfully");
                window.open('http://localhost/education/admin/pages/destination/list-destination.php', '_self');
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
