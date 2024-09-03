<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card pt-2 pb-2">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="reportStartDate">Start Date</label>
                                    <div class="input-group flatpicker-calender">
                                        <input class="form-control" id="reportStartDate" type="date" value="2022-08-01">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="reportEndDate">End Date</label>
                                    <div class="input-group flatpicker-calender">
                                        <input class="form-control" id="reportEndDate" type="date" value="2024-08-21">
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <button class="btn btn-primary btn-lg">Generate Report</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4>Cmapign DTMF Report</h4>
                        <p class="text-muted card-sub-title">View user input details of a campaign</p>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive theme-scrollbar">
                            <table class="display" id="export-button">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>campaign ID</th>
                                        <th>Campaign Title</th>
                                        <th>Product</th>
                                        <th>Total Calls</th>
                                        <th>Busy</th>
                                        <th>No Answer</th>
                                        <th>Success</th>
                                        <th>Other</th>
                                        <th>%DTMF</th>
                                        <th>DTMF</th>
                                        <th>%Blank DTMF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>302</td>
                                        <td>Test</td>
                                        <td>TBD_23</td>
                                        <td>300</td>
                                        <td>50</td>
                                        <td>50</td>
                                        <td>100</td>
                                        <td>50%</td>
                                        <td>20%</td>
                                        <td>10%</td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>302</td>
                                        <td>Test</td>
                                        <td>TBD_23</td>
                                        <td>300</td>
                                        <td>50</td>
                                        <td>50</td>
                                        <td>100</td>
                                        <td>50%</td>
                                        <td>20%</td>
                                        <td>10%</td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>302</td>
                                        <td>Test</td>
                                        <td>TBD_23</td>
                                        <td>300</td>
                                        <td>50</td>
                                        <td>50</td>
                                        <td>100</td>
                                        <td>50%</td>
                                        <td>20%</td>
                                        <td>10%</td>
                                        <td>20%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>