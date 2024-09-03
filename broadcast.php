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
                        <!-- <form class="theme-form">
                            <div class="input-group m-0 flex-nowrap">
                                <input class="form-control-plaintext" type="search" placeholder="Pixelstrap .."><span
                                    class="btn btn-primary input-group-text">Search</span>
                            </div>
                        </form> -->
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="">All broadcasts</h1>
                            </div>
                            <div class="col-md-6">
                                <a href="broadcast-add.php" class="btn btn-primary float-end">Create Broadcast</a>
                                <!-- <button type="button" class="btn btn-primary float-end">Create Broadcast</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">Channels</option>
                                        <option value="1">SMS</option>
                                        <option value="2">Email</option>
                                        <option value="3">Voice</option>
                                        <option value="4">Whatsapp</option>
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Pending</option>
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">Traffic</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Free</option>
                                        <option value="3">Unpaid</option>
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">Templates</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Free</option>
                                        <option value="3">Unpaid</option>
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <div class="input-group flatpicker-calender">
                                        <input class="form-control" id="datetime-local" type="date" value="2024-05-03">
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">Created by</option>
                                        <option value="1">Hammad</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 mt-5">
                                    <div class="dt-ext table-responsive theme-scrollbar">
                                        <table class="display" id="keytable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Traffic</th>
                                                    <th>Created date</th>
                                                    <th>Schedule date</th>
                                                    <th>Launched date</th>
                                                    <th>Created by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="card">
                                        <div class="card-body">
                                        </div>
                                    </div> -->
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