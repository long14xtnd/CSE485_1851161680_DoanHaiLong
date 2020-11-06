<?php

include 'config.php';

$id = $_GET['id'];

$q = " DELETE FROM `list_users` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:dingtea-admin.php');

?>