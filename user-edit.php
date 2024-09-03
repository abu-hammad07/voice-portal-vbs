<?php
include_once 'include/database.php';

$obj = new Database();

include_once 'include/header.php';
include_once 'include/sidebar.php';
?>


<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Edit User</h4>
                        <p class="text-muted card-sub-title">Edit existing system user</p>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['uID'])) {

                            // Sanitize the uID to prevent SQL injection
                            $uID = mysqli_real_escape_string($obj->getMysqli(), $_GET['uID']);

                            // Define the JOIN and column selection
                            $join = "role on users.roleID = role.roleID LEFT JOIN custom_access ON users.uID = custom_access.uID";
                            $colName = "users.uID, users.username, users.full_name, role.role_name, custom_access.*";

                            // Execute the select query
                            $obj->select('users', $colName, $join, "users.uID = '$uID'", null, null);
                            $result = $obj->getResult();

                            // Check if the user exists
                            if (count($result) > 0) {
                                $user = $result[0];
                            } else {
                                $_SESSION['error'] = "User not found.";
                                header("Location: users-management.php");
                                exit();
                            }

                        } else {
                            $_SESSION['error'] = "Something went wrong. Please try again later.";
                            header("Location: users-management.php");
                            exit();
                        }
                        // echo '<pre>';
                        // print_r($user);
                        // echo '</pre>'; 
                        ?>
                        <form action="include/update-data.php" method="POST" class="row g-3 needs-validation custom-input" novalidate="">
                            <input class="form-control" type="text" name="uID" hidden value="<?php echo htmlspecialchars($user['uID']); ?>">
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="fullName">Full Name</label>
                                <input class="form-control" id="fullName" type="text"
                                    placeholder="Enter full name" required name="fullName"
                                    value="<?php echo htmlspecialchars($user['full_name']); ?>">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="username">Username</label>
                                <input class="form-control" id="username" type="text"
                                    placeholder="Enter username" required name="username"
                                    value="<?php echo htmlspecialchars($user['username']); ?>">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" id="password" type="password" name="password"
                                    placeholder="Enter password">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="roleID">User role</label>
                                <select class="form-select" id="roleID" name="roleID" required>
                                    <option value="">---- Select User Role ----</option>
                                    <option value="1" <?php echo $user['role_name'] == 'Administrator' ? 'selected' : ''; ?>>Administrator</option>
                                    <option value="2" <?php echo $user['role_name'] == 'Cmapaign manager' ? 'selected' : ''; ?>>Cmapaign manager</option>
                                    <option value="3" <?php echo $user['role_name'] == 'Report manager' ? 'selected' : ''; ?>>Report manager</option>
                                    <option value="4" <?php echo $user['role_name'] == 'Campaign & report manager' ? 'selected' : ''; ?>>Campaign & report manager</option>
                                </select>
                                <div class="invalid-tooltip">Please select a valid state.</div>
                            </div>
                            <div class="col-12">
                                <h4>Customize access</h4>
                                <div class="row mt-2">
                                    <div class="col-md-4 col-12">
                                        <label class="form-label">Campaign Management</label>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="campaign" name="campaign" value="Campaign" 
                                                        <?php echo isset($user['campaign']) && !empty($user['campaign']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="campaign">Campaign</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="addCampaign" name="addCampaign" value="Add New Campaign" 
                                                        <?php echo isset($user['addNewCampaign']) && !empty($user['addNewCampaign']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="addCampaign">Add New
                                                Campaign</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="addSimpleCampaign" name="addSimpleCampaign" value="Add Simple Campaign" 
                                                    <?php echo isset($user['addSimpleCampaign']) && !empty($user['addSimpleCampaign']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="addSimpleCampaign">Add Simple
                                                Campaign</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="cloneCampaign" name="cloneCampaign" value="Clone Campaign"
                                                    <?php echo isset($user['cloneCampaign']) && !empty($user['cloneCampaign']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="cloneCampaign">Clone
                                                Campaign</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label class="form-label">System Settings</label>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="globalSettings" name="globalSettings" value="Global Settings"
                                                    <?php echo isset($user['globalSettings']) && !empty($user['globalSettings']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="globalSettings">Global
                                                Settings</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="dncrManagement" name="dncrManagement" value="DNCR Management"
                                                    <?php echo isset($user['dncrManagement']) && !empty($user['dncrManagement']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="dncrManagement">DNCR
                                                Management</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="productsManagement"name="productsManagement" value="Products Management"
                                                    <?php echo isset($user['productsManagement']) && !empty($user['productsManagement']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="productsManagement">Products
                                                Management</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="promptsSettings" name="promptsSettings" value="Prompts/Audio Files Settings" 
                                                        <?php echo isset($user['promptsAudioFilesSettings']) && !empty($user['promptsAudioFilesSettings']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="promptsSettings">Prompts/Audio
                                                Files Settings</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="numberMsisdnsList"name="numberMsisdnsList" value="Number/Msisdns List Settings"
                                                        <?php echo isset($user['numberMsisdnsListSettings']) && !empty($user['numberMsisdnsListSettings']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="numberMsisdnsList">Number/Msisdns
                                                List
                                                Settings</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label class="form-label">Reports</label>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="campaignSummaryReport"name="campaignSummaryReport" value="Campaign Summary Report"
                                                        <?php echo isset($user['campaignSummaryReport']) && !empty($user['campaignSummaryReport']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="campaignSummaryReport">Campaign
                                                Summary Report</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="throughputReport" name="throughputReport"value="Throughput Report"
                                                        <?php echo isset($user['throughputReport']) && !empty($user['throughputReport']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="throughputReport">Throughput
                                                Report</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="dtmfCollectionReport"name="dtmfCollectionReport" value="DTMF Collection Report"
                                                        <?php echo isset($user['dtmfCollectionReport']) && !empty($user['dtmfCollectionReport']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="dtmfCollectionReport">DTMF
                                                Collection Report</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="subscriberHistory"name="subscriberHistory" value="Subscriber History"
                                                        <?php echo isset($user['subscriberHistory']) && !empty($user['subscriberHistory']) ? 'checked' : ''; ?>>
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="subscriberHistory">Subscriber
                                                History</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="btn-group">
                                    <button class="btn btn-primary me-2" type="submit" name="update-user">Update User</button>
                                    <a href="users-management" class="btn btn-outline-primary me-2">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



<?php include_once 'include/footer.php' ?>