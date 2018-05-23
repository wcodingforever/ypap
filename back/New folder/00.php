<?php
$json = '{"Name":"Julie"}';
$obj = json_decode($json);

echo $obj->Name;
?>