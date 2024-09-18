<?php
session_start();
include_once 'database.php';
$obj = new Database();

if (isset($_POST['add-user'])) {
    function insertUser($postData, $created_by)
    {
        $obj = new Database();

        // Sanitize and retrieve form data
        $fullName = mysqli_real_escape_string($obj->getMysqli(), $postData['fullName']);
        $username = mysqli_real_escape_string($obj->getMysqli(), $postData['username']);
        $password = mysqli_real_escape_string($obj->getMysqli(), $postData['password']);
        $roleID = mysqli_real_escape_string($obj->getMysqli(), $postData['roleID']);
        $created_date = date('Y-m-d H:i:s');
        // password hashing
        $password = password_hash($password, PASSWORD_BCRYPT);

        // check unique username
        $obj->select('users', 'uID', null, "username = '{$username}'");
        $result = $obj->getResult();
        if (count($result) > 0) {
            $_SESSION['submit_error'] = 'Username already exists, Please choose a different username ($username).';
            header('Location: ../user-add.php');
            exit();
        }

        // Insert user data
        $usersValue = [
            "full_name" => $fullName,
            "username" => $username,
            "password" => $password,
            "roleID" => $roleID,
            "status" => 1,
            "created_by" => $created_by,
            "created_date" => $created_date
        ];

        if ($obj->insert('users', $usersValue)) {
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
            "uID" => $uID,
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

        return $obj->insert('custom_access', $customeAccessValue);
    }

    // Main Execution
    $created_by = 'admin';
    $uID = insertUser($_POST, $created_by);

    // get fullName
    $fullName = $_POST['fullName'];

    if ($uID !== false) {
        if (insertCustomAccess($uID, $_POST, $created_by)) {
            $_SESSION['submit_success'] = " New user added Successfully '{$fullName}'";
            header('location: ../user-add');
            exit();
        } else {
            $_SESSION['submit_error'] = " Failed to add custom access for '{$fullName}'";
            header('location: ../user-add.php');
            exit();
        }
    } else {
        $_SESSION['submit_error'] = " Failed to add user '{$fullName}'";
        header('location: ../user-add.php');
        exit();
    }
}



if (isset($_POST['saveVoiceBroadcast'])) {

    function insertUser($postData, $createdBy)
    {
        $obj = new Database();
        $mysqli = $obj->getMysqli();

        // Array of fields to process
        $fields = [
            'recipients',
            'sender',
            'speechMessage',
            'language',
            'voice',
            'speechRate',
            'uploadFile',
            'timeZone',
            'communicationStartDate',
            'communicationEndDate',
            'deliveryStartTime',
            'deliveryEndTime',
            'deliveryDay',
            'enableDeliveryReports',
            'pushDeliveryReports',
            'dataPayload',
            'timeUnit',
            'numberOfMessages',
            'period',
            'callRetry',
            'recordCall',
            'detectAnsweringMachine',
            'pauseAndCallDuration',
            'interactionCodesDTMF',
            'createdAt',
            'createdBy'
        ];

        // Initialize an array to store sanitized values
        $usersValue = [];
        foreach ($fields as $field) {
            // Use null if field is missing
            $usersValue[$field] = isset($_POST[$field]) ? mysqli_real_escape_string($mysqli, $_POST[$field]) : null;
        }

        $createdAt = date('Y-m-d H:i:s'); // Capture current date and time

        // Insert into the voiceBroadcast table
        return $obj->insert('voiceBroadcast', $usersValue);
    }

    // Main Execution
    $createdBy = 'admin';  // The admin user responsible for the creation

    // Call the insertUser function and check if the operation was successful
    if (insertUser($postData, $createdBy)) {
        $_SESSION['submit_success'] = "Voice Broadcast Added";
    } else {
        $_SESSION['submit_error'] = "Failed to add Voice broadcast.";
    }

    // Redirect to broadcast page after execution
    header('location: ../broadcast.php');
    exit();
}





if (isset($_POST['saveWhatsappBroadcast'])) {

    $mysqli = $obj->getMysqli();

    // Array of fields to process
    $fields = [
        'recipients',
        'sender',
        'speechMessage',
        'language',
        'voice',
        'speechRate',
        'failoverSMS',
        'timeZone',
        'communicationStartDate',
        'communicationEndDate',
        'deliveryStartTime',
        'deliveryEndTime',
        'shortenURL',
        'chooseDomain',
        'trackURLClicks',
        'deliveryReportAPI',
        'pushDeliveryReports',
        'dataPayload',
        'timeUnit',
        'numberOfMessages',
        'period',
        'createdAt',
        'createdBy'
    ];

    // Initialize an array to store sanitized values
    $usersValue = [];
    foreach ($fields as $field) {
        // Use null if field is missing
        $usersValue[$field] = isset($_POST[$field]) ? mysqli_real_escape_string($mysqli, $_POST[$field]) : null;
    }


    // Capture current date and time for createdAt
    $usersValue['createdAt'] = date('Y-m-d H:i:s');
    $usersValue['createdBy'] = 'admin';

    function uploadFile($fileInputName)
    {
        $target_dir = "../uploads/";
        $extension = pathinfo($_FILES[$fileInputName]["name"], PATHINFO_EXTENSION);
        $new_filename = uniqid() . '.' . $extension;
        $target_file = $target_dir . $new_filename;
        move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file);
        return $target_file;
    }

    // upload file
    $usersValue['specificDNCRFile'] = uploadFile('specificDNCRFile');
    $usersValue['updatedFile'] = uploadFile('updatedFile');

    $result = $obj->insert('whatsappBroadcast', $usersValue);

    // Call the insertUser function and check if the operation was successful
    if ($result) {
        $_SESSION['submit_success'] = "Whatsapp Broadcast Added";
        // Redirect to broadcast page after execution
        header('location: ../broadcast.php');
        exit();
    } else {
        $_SESSION['submit_error'] = "Failed to add Whatsapp broadcast.";
        // Redirect to broadcast page after execution
        header('location: ../broadcast.php');
        exit();
    }

}





if (isset($_POST['submitNewCampaign'])) {
    // Assuming $obj is a database instance
    // $obj = new database();

    $mysqli = $obj->getMysqli();

    // Array of fields to process
    $fields = [
        'campaign_title',
        'priority',
        'product',
        'category',
        'shortcode',
        'retries',
        'retryScenario',
        'entryInterval',
        'contactPolicy',
        'skipDNCR',
        'globalDNCR',
        'specificDNCR',
        'specificDNCRList',
        'level1SkipDTMF',
        'level1DTMF',
        'level1Keyword',
        'level1ShortCode',
        'level1APIURL',
        'level1CDR',
        'level1PromptUseExisting',
        'level1PromptFile',
        'level1ThankYouPromptUse',
        'level1ThankYouPromptFile',
        'level2SkipDTMF',
        'level2DTMF',
        'level2Keyword',
        'level2ShortCode',
        'level2APIURL',
        'level2CDR',
        'level2PromptUseExisting',
        'level2PromptFile',
        'level2ThankYouPromptUse',
        'level2ThankYouPromptFile',
        'level3SkipDTMF',
        'level3DTMF',
        'level3Keyword',
        'level3ShortCode',
        'level3APIURL',
        'level3CDR',
        'level3PromptUseExisting',
        'level3PromptFile',
        'level3ThankYouPromptUse',
        'level3ThankYouPromptFile',
        'createdAt',
        'createdBy'
    ];

    // Initialize an array to store sanitized values
    $usersValue = [];
    foreach ($fields as $field) {
        // Use null if the field is missing, and sanitize input
        $usersValue[$field] = isset($_POST[$field]) ? mysqli_real_escape_string($mysqli, $_POST[$field]) : null;
    }

    // Capture current date and time for createdAt
    $usersValue['createdAt'] = date('Y-m-d H:i:s');
    $usersValue['createdBy'] = 'admin';

    function uploadFile($fileInputName)
    {
        $target_dir = "../uploads/";
        $extension = pathinfo($_FILES[$fileInputName]["name"], PATHINFO_EXTENSION);
        $new_filename = uniqid() . '.' . $extension;
        $target_file = $target_dir . $new_filename;
        move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file);
        return $target_file;
    }

    // upload file
    $usersValue['specificDNCRList'] = uploadFile('specificDNCRList');
    $usersValue['level1PromptFile'] = uploadFile('level1PromptFile');
    $usersValue['level1ThankYouPromptFile'] = uploadFile('level1ThankYouPromptFile');
    $usersValue['level2PromptFile'] = uploadFile('level2PromptFile');
    $usersValue['level2ThankYouPromptFile'] = uploadFile('level2ThankYouPromptFile');
    $usersValue['level3PromptFile'] = uploadFile('level3PromptFile');
    $usersValue['level3ThankYouPromptFile'] = uploadFile('level3ThankYouPromptFile');


    // Insert the data into the new_campaign table
    $result = $obj->insert('new_campaign', $usersValue);

    // Check if the operation was successful and set session message
    if ($result) {
        $_SESSION['submit_success'] = "Campaign added successfully.";
        // Redirect to the campaigns page after execution
        header('Location: ../campaigns.php');
        exit();
    } else {
        $_SESSION['submit_error'] = "Failed to add campaign.";
        // Redirect to the campaigns page after execution
        header('Location: ../campaigns.php');
        exit();
    }


}





if (isset($_POST['submitSimpleCampaign'])) {
    // Assuming $obj is a database instance
    // $obj = new database();

    $mysqli = $obj->getMysqli();

    // Array of fields to process
    $fields = [
        'campaignTitle',
        'priority',
        'shortcode',
        'retries',
        'retryScenario',
        'entryInterval',
        'contactPolicy',
        'skipDNCR',
        'skipSpecificDNCR',
        'specificDNCRFile',
        'filePrompt',
        'updatedFile',
        'createdAt',
        'createdBy'
    ];

    // Initialize an array to store sanitized values
    $usersValue = [];
    foreach ($fields as $field) {
        // Use null if the field is missing, and sanitize input
        $usersValue[$field] = isset($_POST[$field]) ? mysqli_real_escape_string($mysqli, $_POST[$field]) : null;
    }

    // Capture current date and time for createdAt
    $usersValue['createdAt'] = date('Y-m-d H:i:s');
    $usersValue['createdBy'] = 'admin';

    // function uploadFile($fileInputName)
    // {
    //     $target_dir = "../uploads/";
    //     $target_file = $target_dir . basename($_FILES[$fileInputName]["name"]);
    //     move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file);
    //     return $target_file;
    // }
    function uploadFile($fileInputName)
    {
        $target_dir = "../uploads/";
        $extension = pathinfo($_FILES[$fileInputName]["name"], PATHINFO_EXTENSION);
        $new_filename = uniqid() . '.' . $extension;
        $target_file = $target_dir . $new_filename;
        move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file);
        return $target_file;
    }

    // upload file
    $usersValue['specificDNCRFile'] = uploadFile('specificDNCRFile');
    $usersValue['updatedFile'] = uploadFile('updatedFile');

    // Insert the data into the new_campaign table
    $result = $obj->insert('simple_cmapaign', $usersValue);

    // Check if the operation was successful and set session message
    if ($result) {
        $_SESSION['submit_success'] = "Campaign added successfully.";
        // Redirect to the campaigns page after execution
        header('Location: ../campaigns.php');
        exit();
    } else {
        $_SESSION['submit_error'] = "Failed to add campaign.";
        // Redirect to the campaigns page after execution
        header('Location: ../campaigns.php');
        exit();
    }


}


