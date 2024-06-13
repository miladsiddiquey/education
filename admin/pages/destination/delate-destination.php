<?php
include '../../config.php';
$id=$_GET['id'];
$query = "DELETE FROM destinationpost WHERE id = '$id'";
$data =mysqli_query($con,$query);

if($data){
    ?>
    <script>
    alert("data delated successfully")
    window.open('http://localhost/education/admin/pages/destination/list-destination.php','_self');
    </script>
    <?php
}else{
    ?>
    <script>
    alert("Please try again")
    </script>
    <?php
}

?>

