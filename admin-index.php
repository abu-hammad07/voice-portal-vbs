<?php
session_start();
include_once 'include/database.php';

$obj = new Database();


if (isset($_GET['activeDeactiveID'])) {
    // Sanitize the incoming ID to prevent SQL injection
    $activeDeactiveID = mysqli_real_escape_string($obj->getMysqli(), $_GET['activeDeactiveID']);

    // Retrieve the current status value
    $obj->select('users', 'uID, status', null, "uID = '{$activeDeactiveID}'");
    $result = $obj->getResult();
    $currentStatusValue = $result[0]['status'];

    // Determine the new status value (toggle between 1 and 0)
    // switch ($currentStatusValue) {
    //     case '1':
    //         $newStatusValue = 0;
    //         break;
    //     case '0':
    //         $newStatusValue = 1;
    //         break;
    // }
    $newStatusValue = match ($currentStatusValue) {
        '1' => 0,
        '0' => 1,
    };


    // Create an array with the new status value
    $updateData = [
        "status" => $newStatusValue
    ];

    // Update the status in the 'users' table
    $obj->update('users', $updateData, "uID = '{$activeDeactiveID}'");

    // Set a session message to confirm the update
    $_SESSION['submit_success'] = 'User status updated successfully';
    // Redirect back to the users management page
    header('Location: users-management.php');
    exit();
}
