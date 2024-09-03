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
                        <h4>Cmapign Throughput Report</h4>
                        <p class="text-muted card-sub-title">View throughout details of a campaign</p>
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
                                        <th>Outgoing calls / sec</th>
                                        <th>Total outgoing calls</th>
                                        <th>Total answered calls</th>
                                        <th>Remaining calls</th>
                                        <th>End date time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>302</td>
                                        <td>Test</td>
                                        <td>TBD_23</td>
                                        <td>20</td>
                                        <td>40</td>
                                        <td>35</td>
                                        <td>76</td>
                                        <td>2011/04/25 8:00 AM</td>
                                    </tr>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>302</td>
                                        <td>Test</td>
                                        <td>TBD_23</td>
                                        <td>20</td>
                                        <td>40</td>
                                        <td>35</td>
                                        <td>76</td>
                                        <td>2011/04/25 8:00 AM</td>
                                    </tr>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>302</td>
                                        <td>Test</td>
                                        <td>TBD_23</td>
                                        <td>20</td>
                                        <td>40</td>
                                        <td>35</td>
                                        <td>76</td>
                                        <td>2011/04/25 8:00 AM</td>
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