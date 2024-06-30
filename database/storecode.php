<?php
include "database.php";
$obj = new Database();

// insert data
// $obj->insert('client', ['name' =>'milad siddiquey', 'address'=>'bangladesh']);
// echo "insert result is: ";
// print_r($obj->getResult());

//update
// $obj->update('client', ['name' =>'milad siddiquey', 'address'=>'bangladesh'],'id="5"');
// echo "update result is: ";
// print_r($obj->getResult());

//delate
// $obj->delate('client','id="6"');
// echo "update result is: ";
// print_r($obj->getResult());

//select

$obj->select('client','*',null,null,null,null);
echo "select result is: ";
print_r($obj->getResult());

?>