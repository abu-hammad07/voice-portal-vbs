<?php
session_start();
include_once 'database.php';
$obj = new Database();

if (isset($_GET['delete-user'])) {
    $uID = mysqli_real_escape_string($obj->getMysqli(), $_GET['delete-user']);
    $obj->delete('users', "uID = '{$uID}'");
    $_SESSION['uID_success'] = 'User deleted successfully';
    header('Location: ../users-management');
    exit();
}