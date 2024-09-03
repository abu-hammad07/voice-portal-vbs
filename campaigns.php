<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
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
                                            <th scope="col">Campaigns ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Created On</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">Owner</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <tr>
                                            <td scope="row">301</td>
                                            <td>Test</td>
                                            <td>2011/04/25</td>
                                            <td>6</td>
                                            <td>admin</td>
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
                                        <tr>
                                            <td scope="row">301</td>
                                            <td>Test</td>
                                            <td>2011/04/25</td>
                                            <td>6</td>
                                            <td>admin</td>
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
                                        <tr>
                                            <td scope="row">301</td>
                                            <td>Test</td>
                                            <td>2011/04/25</td>
                                            <td>6</td>
                                            <td>admin</td>
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
                                        <tr>
                                            <td scope="row">301</td>
                                            <td>Test</td>
                                            <td>2011/04/25</td>
                                            <td>6</td>
                                            <td>admin</td>
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