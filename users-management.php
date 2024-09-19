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
        if (isset(($_SESSION['uID_success']))) {
            echo '
                <div class="alert alert-light-success light alert-dismissible fade show txt-success border-left-success mb-4"
                    role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-square">
                        <polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <p>' . $_SESSION['uID_success'] . '</p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION['uID_success']);
        }
        if (isset($_SESSION['uID_error'])) {
            echo '
                    <div class="alert alert-light-dark light alert-dismissible fade show txt-dark border-left-dark" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-help-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <p>' . $_SESSION['uID_error'] . '</p>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            unset($_SESSION['uID_error']);
        }
        ?>
        <?php include_once "_message.php" ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Users</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="csv text-end">
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="CSV Download">
                                        <i class="icofont icofont-file-exe text-danger fs-3"></i>
                                        <!-- <i class="icofont icofont-file-pdf text-danger fs-4"></i> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="dt-ext table-responsive theme-scrollbar">
                                <table class="display" id="keytable">
                                    <thead class="table-light text-uppercase fw-bold">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">User Type</th>
                                            <th scope="col">User Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <?php
                                        // Set the parameters for your query
                                        $join = "role on users.roleID = role.roleID";
                                        $colName = "users.uID, users.username, role.role_name, users.status";
                                        $order = "uID DESC";
                                        $limit = 10;

                                        // Execute the select query
                                        $obj->select('users', $colName, $join, null, $order, $limit);
                                        $result = $obj->getResult();

                                        $count = 1;
                                        // Loop through the result and generate table rows dynamically
                                        foreach ($result as $row) {
                                            echo '
                                                <tr>
                                                    <th scope="row">' . $count++ . '</th>
                                                    <td>' . htmlspecialchars($row['username']) . '</td>
                                                    <td>' . htmlspecialchars($row['role_name']) . '</td>
                                                    <td>' . ($row['status'] == 1 ? 'Enable' : 'Disable') . '</td>
                                                    <td>
                                                        <ul class="action">
                                                            <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="' . ($row['status'] == 1 ? 'Disable' : 'Enable') . '">
                                                                <a href="admin-index.php?activeDeactiveID=' . $row['uID'] . '" class="text-' . ($row['status'] == 1 ? 'danger' : 'success') . '">
                                                                    <i class="icofont icofont-ui-block fs-5"></i>
                                                                </a>
                                                            </li>
                                                            <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Edit">
                                                                <a href="user-edit.php?uID=' . $row['uID'] . '" class="text-success">
                                                                    <i class="icon-pencil-alt fs-5"></i>
                                                                </a>
                                                            </li>
                                                            <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete">
                                                                <a href="admin-index.php?deleteID=' . $row['uID'] . '" class="text-danger">
                                                                    <i class="icon-trash fs-5"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            ';
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>