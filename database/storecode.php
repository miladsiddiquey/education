<?php
include "database.php";
$obj = new Database();

$name = $_POST['jamal'];
$class = $_POST['five'];
$address = $_POST['sylhet'];

// insert data
$obj->insert('student', ['name' =>' $name', 'class'=>'$class', 'address'=>'$address']);
echo "insert result is: ";
print_r($obj->getResult());

//update
// $obj->update('client', ['name' =>'milad siddiquey', 'address'=>'bangladesh'],'id="5"');
// echo "update result is: ";
// print_r($obj->getResult());

//delate
// $obj->delate('client','id="6"');
// echo "update result is: ";
// print_r($obj->getResult());

//select

// $obj->select('client','*',null,null,null,null);
// echo "select result is: ";
// print_r($obj->getResult());

?>