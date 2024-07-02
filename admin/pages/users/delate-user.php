<?php
include "../../../database/database.php";
$obj = new Database();

$id = (int)$_GET['id'];
if ($id > 0) {
    
    $obj->select('admin_user', '*', null, "id='$id'", null, null);
    $result = $obj->getResult();

    if ($result && count($result) > 0) {
        $row = $result[0];

        $deleteQuery = "DELETE FROM admin_user WHERE id='$id'";

        // Delete the record from the database
        $deleteResult = $obj->delete('admin_user', "id='$id'");

        if ($deleteResult) {

            ?>
            <script>
                alert("Data deleted successfully");
                window.open('http://localhost/education/admin/pages/users/list-user.php', '_self');
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
