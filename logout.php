<?php
session_start();
session_destroy();
header("Location: http://localhost/education/login.php");
exit();
?>