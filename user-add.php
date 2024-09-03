<?php
session_start();
include_once 'include/database.php';

$obj = new Database();


include_once 'include/header.php';
include_once 'include/sidebar.php';
?>


<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <?php
        if (isset(($_SESSION['submit_success']))) {
            echo '
                <div class="alert alert-light-success light alert-dismissible fade show txt-success border-left-success mb-4"
                    role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-square">
                        <polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <p>Submit Successfully: ' . $_SESSION['submit_success'] . '</p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION['submit_success']);
        }
        if (isset($_SESSION['submit_error'])) {
            echo '
                <div class="alert alert-light-dark light alert-dismissible fade show txt-dark border-left-dark" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-help-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    <p>Submit Failed: ' . $_SESSION['submit_error'] . '</p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION['uID_error']);
        }
        ?>

        <div class="row">

            <div class="col-xl-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Add User</h4>
                        <p class="text-muted card-sub-title">Add new system user</p>
                    </div>
                    <div class="card-body">
                        <form action="include/insert-data.php" method="POST"
                            class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="fullName">Full Name</label>
                                <input class="form-control" id="fullName" type="text" name="fullName"
                                    placeholder="Enter full name" required>
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="username">Username</label>
                                <input class="form-control" id="username" type="text" name="username"
                                    placeholder="Enter username" required>
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" id="password" type="password" name="password"
                                    placeholder="Enter password" required>
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="roleID">User role</label>
                                <select class="form-select" id="roleID" name="roleID" required>
                                    <option value="">---- Select User Role ----</option>
                                    <?php
                                    $obj->select('role');
                                    $result = $obj->getResult();
                                    foreach ($result as $row) {
                                        echo '<option value="' . $row['roleID'] . '">' . $row['role_name'] . '</option>';
                                    }

                                    ?>
                                </select>
                                <div class="invalid-tooltip">Please select a valid state.</div>
                            </div>
                            <!-- <div class="col-md-6 col-12">
                                <label class="form-label" for="staus">User role</label>
                                <select class="form-select" id="staus" name="staus" required>
                                    <option value="">---- Select User Status ----</option>
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                                <div class="invalid-tooltip">Please select a valid state.</div>
                            </div> -->
                            <div class="col-12">
                                <h4>Customize access</h4>
                                <div class="row mt-2">
                                    <div class="col-md-4 col-12">
                                        <label class="form-label">Camapign Management</label>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="campaign" name="campaign"
                                                        value="Campaign">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="campaign">Campaign</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="addCampaign" name="addCampaign"
                                                        value="Add New Campaign">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="addCampaign">Add New
                                                Campaign</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="addSimpleCampaign"
                                                        name="addSimpleCampaign" value="Add Simple Campaign">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="addSimpleCampaign">Add Simple
                                                Campaign</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="cloneCampaign" name="cloneCampaign"
                                                        value="Clone Campaign">
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
                                                    <input type="checkbox" id="globalSettings" name="globalSettings"
                                                        value="Global Settings">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="globalSettings">Global
                                                Settings</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="dncrManagement" name="dncrManagement"
                                                        value="DNCR Management">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="dncrManagement">DNCR
                                                Management</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="productsManagement"
                                                        name="productsManagement" value="Products Management">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="productsManagement">Products
                                                Management</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="promptsSettings" name="promptsSettings"
                                                        value="Prompts/Audio Files Settings">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="promptsSettings">Prompts/Audio
                                                Files Settings</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="numberMsisdnsList"
                                                        name="numberMsisdnsList" value="Number/Msisdns List Settings">
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
                                                    <input type="checkbox" id="campaignSummaryReport"
                                                        name="campaignSummaryReport" value="Campaign Summary Report">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="campaignSummaryReport">Campaign
                                                Summary Report</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="throughputReport" name="throughputReport"
                                                        value="Throughput Report">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="throughputReport">Throughput
                                                Report</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="dtmfCollectionReport"
                                                        name="dtmfCollectionReport" value="DTMF Collection Report">
                                                    <span class="switch-state bg-success"></span>
                                                </label>
                                            </div>
                                            <label class="col-form-label m-l-10" for="dtmfCollectionReport">DTMF
                                                Collection Report</label>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <div class="text-end icon-state switch-outline">
                                                <label class="switch mb-0">
                                                    <input type="checkbox" id="subscriberHistory"
                                                        name="subscriberHistory" value="Subscriber History">
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
                                    <button class="btn btn-primary me-2" type="submit" name="add-user">Add User</button>
                                    <a href="users-management" class="btn btn-outline-primary me-2"
                                        type="submit">Cancel</a>
                                </div>
                            </div>

                            <!-- <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 box-col-4">
                                <div class="card height-equal">
                                    <div class="card-header">
                                        <h4>Position Top End</h4>
                                        <p class="f-m-light mt-1">Use <code> "position: top-end"</code> in javascript,
                                            you set the alert's
                                            position.</p>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="icon-more-alt"></i></li>
                                                <li><i class="view-html fa fa-code"></i></li>
                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                <li><i class="icofont icofont-error close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-success sweet-15" type="button"
                                            onclick="_gaq.push(['_trackEvent', 'sweet-15']);">Click it! </button>
                                        <div class="code-box-copy">
                                            <button class="code-box-copy__btn btn-clipboard"
                                                data-clipboard-target="#sweet-p-te" title="Copy"><i
                                                    class="icofont icofont-copy-alt"></i></button>
                                            <pre
                                                class="theme-scrollbar"><code class="language-html" id="sweet-p-te">&lt;button class="btn btn-success sweet-15" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-15']);"&gt;Click it! &lt;/button&gt; </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



<?php include_once 'include/footer.php' ?>