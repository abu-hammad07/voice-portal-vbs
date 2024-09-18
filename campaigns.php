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
        <div class="row">
            <?php include_once "_message.php" ?>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Campaigns</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="csv text-end">
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="CSV Download">
                                        <i class="icofont icofont-file-exe text-danger fs-3"></i>
                                        <!-- <i class="icofont icofont-file-pdf text-danger fs-3"></i> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive theme-scrollbar">
                                <table class="table light-card">
                                    <thead class="table-light text-uppercase fw-bold">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Created On</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">Owner</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <?php
                                        $obj->sql("SELECT * FROM new_campaign");
                                        $data = $obj->getResult();
                                        foreach ($data as $row) {
                                            $createdAt = date("d-M-Y", strtotime($row['createdAt']));
                                            $random = rand(111, 999);
                                            ?>
                                            <tr>
                                                <td scope="row"><?= $random ?></td>
                                                <td><?= $row['campaign_title'] ?></td>
                                                <td><?= $createdAt ?></td>
                                                <td><?= $row['priority'] ?></td>
                                                <td><?= $row['createdBy'] ?></td>
                                                <td>Created</td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Schedule">
                                                            <a href="#" class="text-success">
                                                                <i class="fa fa-calendar fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Stop">
                                                            <a href="#" class="text-info">
                                                                <i class="fa fa-ban fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Preview">
                                                            <a href="#" class="text-success">
                                                                <i class="icon-eye fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Status">
                                                            <a href="#" class="text-info">
                                                                <i class="fa fa-check-square-o fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit">
                                                            <a href="#" class="text-success">
                                                                <i class="icon-pencil-alt fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Delete">
                                                            <a href="#" class="text-danger">
                                                                <i class="icon-trash fs-5"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <?php
                                        }

                                        $obj->sql("SELECT * FROM simple_cmapaign");
                                        $data = $obj->getResult();
                                        foreach ($data as $row) {
                                            $createdAt = date("d-M-Y", strtotime($row['createdAt']));
                                            // random number 3
                                            $random = rand(111, 999);
                                            ?>
                                            <tr>
                                                <td scope="row"><?= $random ?></td>
                                                <td><?= $row['campaignTitle'] ?></td>
                                                <td><?= $createdAt ?></td>
                                                <td><?= $row['priority'] ?></td>
                                                <td><?= $row['createdBy'] ?></td>
                                                <td>Created</td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Schedule">
                                                            <a href="#" class="text-success">
                                                                <i class="fa fa-calendar fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Stop">
                                                            <a href="#" class="text-info">
                                                                <i class="fa fa-ban fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Preview">
                                                            <a href="#" class="text-success">
                                                                <i class="icon-eye fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Status">
                                                            <a href="#" class="text-info">
                                                                <i class="fa fa-check-square-o fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit">
                                                            <a href="#" class="text-success">
                                                                <i class="icon-pencil-alt fs-5"></i>
                                                            </a>
                                                        </li>
                                                        <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Delete">
                                                            <a href="#" class="text-danger">
                                                                <i class="icon-trash fs-5"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <?php
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