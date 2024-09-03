<?php
session_start();
include_once 'database.php';
$obj = new Database();

if (isset($_POST['update-user'])) {
    function insertUser($postData, $created_by)
    {
        $obj = new Database();

        // Sanitize and retrieve form data
        $uID = mysqli_real_escape_string($obj->getMysqli(), $postData['uID']);
        $fullName = mysqli_real_escape_string($obj->getMysqli(), $postData['fullName']);
        $username = mysqli_real_escape_string($obj->getMysqli(), $postData['username']);
        $password = mysqli_real_escape_string($obj->getMysqli(), $postData['password']);
        $roleID = mysqli_real_escape_string($obj->getMysqli(), $postData['roleID']);
        $created_date = date('Y-m-d H:i:s');
        // password hashing
        $password = password_hash($password, PASSWORD_BCRYPT);

        // check if password is empty
        if (empty($password)) {
            $usersValue = [
                "full_name" => $fullName,
                "username" => $username,
                "roleID" => $roleID,
                "created_by" => $created_by,
                "created_date" => $created_date
            ];

            if ($obj->update('users', $usersValue, "uID = '{$uID}'")) {
                return $obj->getUserId($username);
            } else {
                return false;
            }
        }

        // Insert user data
        $usersValue = [
            "full_name" => $fullName,
            "username" => $username,
            "password" => $password,
            "roleID" => $roleID,
            "created_by" => $created_by,
            "created_date" => $created_date
        ];

        if ($obj->update('users', $usersValue, "uID = '{$uID}'")) {
            return $obj->getUserId($username);
        } else {
            return false;
        }
    }

    function insertCustomAccess($uID, $postData, $created_by)
    {
        $obj = new Database();
        $created_date = date('Y-m-d H:i:s');

        // Use isset() to check if each POST variable is set
        $campaign = isset($postData['campaign']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['campaign']) : null;
        $addCampaign = isset($postData['addCampaign']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['addCampaign']) : null;
        $addSimpleCampaign = isset($postData['addSimpleCampaign']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['addSimpleCampaign']) : null;
        $cloneCampaign = isset($postData['cloneCampaign']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['cloneCampaign']) : null;
        $globalSettings = isset($postData['globalSettings']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['globalSettings']) : null;
        $dncrManagement = isset($postData['dncrManagement']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['dncrManagement']) : null;
        $productsManagement = isset($postData['productsManagement']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['productsManagement']) : null;
        $promptsSettings = isset($postData['promptsSettings']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['promptsSettings']) : null;
        $numberMsisdnsList = isset($postData['numberMsisdnsList']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['numberMsisdnsList']) : null;
        $campaignSummaryReport = isset($postData['campaignSummaryReport']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['campaignSummaryReport']) : null;
        $throughputReport = isset($postData['throughputReport']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['throughputReport']) : null;
        $dtmfCollectionReport = isset($postData['dtmfCollectionReport']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['dtmfCollectionReport']) : null;
        $subscriberHistory = isset($postData['subscriberHistory']) ? mysqli_real_escape_string($obj->getMysqli(), $postData['subscriberHistory']) : null;

        // Insert custom access data
        $customeAccessValue = [
            // "uID" => $uID,
            "campaign" => $campaign,
            "addNewCampaign" => $addCampaign,
            "addSimpleCampaign" => $addSimpleCampaign,
            "cloneCampaign" => $cloneCampaign,
            "globalSettings" => $globalSettings,
            "dncrManagement" => $dncrManagement,
            "productsManagement" => $productsManagement,
            "promptsAudioFilesSettings" => $promptsSettings,
            "numberMsisdnsListSettings" => $numberMsisdnsList,
            "campaignSummaryReport" => $campaignSummaryReport,
            "throughputReport" => $throughputReport,
            "dtmfCollectionReport" => $dtmfCollectionReport,
            "subscriberHistory" => $subscriberHistory,
            "created_by" => $created_by,
            "created_date" => $created_date
        ];

        return $obj->update('custom_access', $customeAccessValue, "uID = '{$uID}'");
    }

    // Main Execution
    $created_by = 'admin';
    $uID = insertUser($_POST, $created_by);

    // get fullName
    $fullName = $_POST['fullName'];

    if ($uID !== false) {
        if (insertCustomAccess($uID, $_POST, $created_by)) {
            $_SESSION['uID_success'] = " user Updated Successfully '{$fullName}'";
            header('location: ../users-management');
            exit();
        } else {
            $_SESSION['uID_error'] = " Failed to add custom access for '{$fullName}'";
            header('location: ../users-management');
            exit();
        }
    } else {
        $_SESSION['uID_error'] = " Failed to add user '{$fullName}'";
        header('location: ../users-management');
        exit();
    }
}


