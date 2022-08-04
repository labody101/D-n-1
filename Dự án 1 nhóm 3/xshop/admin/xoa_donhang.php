<?php
include 'headeradmin.php';
include '../pdo/pdo.php';

$id = $_GET['id'];
$sql = "DELETE from bill where id = $id";
pdo_execute($sql);
header('location: ql_donhang.php');

?>