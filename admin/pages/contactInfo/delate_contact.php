<?php
include "../../../database/database.php";
$obj = new Database();

$id = (int)$_GET['id'];
if ($id > 0) {
    
    $obj->select('contact_info', '*', null, "id='$id'", null, null);
    $result = $obj->getResult();

    if ($result && count($result) > 0) {
        $row = $result[0];
        $image = $row['image'];

        $deleteQuery = "DELETE FROM contact_info WHERE id='$id'";

        // Delete the record from the database
        $deleteResult = $obj->delete('contact_info', "id='$id'");

        if ($deleteResult) {

      
            ?>
            <script>
                alert("Data deleted successfully");
                window.open('http://localhost/education/admin/pages/contactInfo/list_contact.php', '_self');
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
