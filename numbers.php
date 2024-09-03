<?php
session_start();
include_once 'include/database.php';

$obj = new Database();

include_once 'include/header.php';
include_once 'include/sidebar.php';
?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid search-page">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form class="theme-form">
                            <div class="input-group m-0 flex-nowrap">
                                <input class="form-control-plaintext" type="search" placeholder="Search .."><span
                                    class="btn btn-primary input-group-text">Search</span>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <ul class="nav nav-tabs search-list" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="my-number" data-bs-toggle="tab" href="#my-numbers"
                                        role="tab" aria-selected="true">My numbers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="my-requests" data-bs-toggle="tab" href="#my-request"
                                        role="tab" aria-selected="false">My requests
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="top-tabContent">
                            <div class="search-links tab-pane fade show active" id="my-numbers" role="tabpanel"
                                aria-labelledby="my-number">
                                <div class="row">
                                    <div>
                                        <h4 class="mb-2">My Number Requests</h4>
                                        <p class="mb-3">
                                            View and track status of your request for buying or importing
                                            numbers. <a href="javascript:void(0)">Learn more</a>
                                        </p>
                                        <div class="row">
                                            <div class="col-xxl-2 col-md-3 col-4">
                                                <select class="form-select" id="requestType">
                                                    <option disabled="" selected="">All request types</option>
                                                    <option value="1">Import</option>
                                                    <option value="2">Export</option>
                                                    <option value="3">Buy</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-2 col-md-3 col-4">
                                                <select class="form-select" id="requestType">
                                                    <option disabled="" selected="">All statuses</option>
                                                    <option value="1">Pending</option>
                                                    <option value="2">Approved</option>
                                                    <option value="3">Rejected</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-2 col-md-3 col-4">
                                                <select class="form-select" id="requestType">
                                                    <option disabled="" selected="">All users</option>
                                                    <option value="1">User 1</option>
                                                    <option value="2">User 2</option>
                                                    <option value="3">User 3</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <p class="text-center">No record</p>
                                                <!-- <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4>Number of Requests</h4>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="csv text-end">
                                                                <a href="" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-title="CSV Download">
                                                                    <i
                                                                        class="icofont icofont-file-exe text-danger fs-3"></i>
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
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Schedule">
                                                                                    <a href="#" class="text-success">
                                                                                        <i
                                                                                            class="fa fa-calendar fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Stop">
                                                                                    <a href="#" class="text-info">
                                                                                        <i class="fa fa-ban fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Preview">
                                                                                    <a href="#" class="text-success">
                                                                                        <i class="icon-eye fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Status">
                                                                                    <a href="#" class="text-info">
                                                                                        <i
                                                                                            class="fa fa-check-square-o fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Edit">
                                                                                    <a href="#" class="text-success">
                                                                                        <i
                                                                                            class="icon-pencil-alt fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
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
                                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 m-t-30">
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-primary justify-content-end">
                                                <li class="page-item disabled"><a class="page-link"
                                                        href="javascript:void(0)" tabindex="-1">Previous</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">1</a></li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0)">2<span
                                                            class="sr-only">(current)</span></a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="my-request" role="tabpanel" aria-labelledby="my-requests">
                                <div>
                                    <h4 class="mb-2">Number of Requests</h4>
                                    <p class="mb-3">
                                        View and track status of your request for buying or importing
                                        numbers. <a href="javascript:void(0)">Learn more</a>
                                    </p>
                                    <div class="row">
                                        <div class="col-xxl-2 col-md-3 col-4">
                                            <select class="form-select" id="requestType">
                                                <option disabled="" selected="">All request types</option>
                                                <option value="1">Import</option>
                                                <option value="2">Export</option>
                                                <option value="3">Buy</option>
                                            </select>
                                        </div>
                                        <div class="col-xxl-2 col-md-3 col-4">
                                            <select class="form-select" id="requestType">
                                                <option disabled="" selected="">All statuses</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Approved</option>
                                                <option value="3">Rejected</option>
                                            </select>
                                        </div>
                                        <div class="col-xxl-2 col-md-3 col-4">
                                            <select class="form-select" id="requestType">
                                                <option disabled="" selected="">All users</option>
                                                <option value="1">User 1</option>
                                                <option value="2">User 2</option>
                                                <option value="3">User 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mt-4">
                                            <p class="text-center">No record</p>
                                            <!-- <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4>Number of Requests</h4>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="csv text-end">
                                                                <a href="" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-title="CSV Download">
                                                                    <i
                                                                        class="icofont icofont-file-exe text-danger fs-3"></i>
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
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Schedule">
                                                                                    <a href="#" class="text-success">
                                                                                        <i
                                                                                            class="fa fa-calendar fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Stop">
                                                                                    <a href="#" class="text-info">
                                                                                        <i class="fa fa-ban fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Preview">
                                                                                    <a href="#" class="text-success">
                                                                                        <i class="icon-eye fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Status">
                                                                                    <a href="#" class="text-info">
                                                                                        <i
                                                                                            class="fa fa-check-square-o fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Edit">
                                                                                    <a href="#" class="text-success">
                                                                                        <i
                                                                                            class="icon-pencil-alt fs-5"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="me-2"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
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
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 m-t-30">
                                    <nav aria-label="...">
                                        <ul class="pagination pagination-primary justify-content-end">
                                            <li class="page-item disabled"><a class="page-link"
                                                    href="javascript:void(0)" tabindex="-1">Previous</a></li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2<span
                                                        class="sr-only">(current)</span></a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="javascript:void(0)">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
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