<?php
include "./database/database.php";
$obj = new Database();
$show = false;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $obj->insert('contact_info', [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message
    ]);
    $result = $obj->getResult();

    if ($result) {
        $show = true;
    } else {
        $error = $obj->getResult();
      
    }
}
?>