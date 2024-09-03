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
                        <h4>View campaign Details Status</h4>
                        <p class="m-2">301 - Test</p>
                    </div>
                    <div>
                        <div class="card-block row">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="table-responsive theme-scrollbar">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="max-width: 70px">Status</td>
                                                <td>Scheduled</td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">Owner</td>
                                                <td>admin</td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">Product</td>
                                                <td>Autoreply</td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">Category</td>
                                                <td>VAS</td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">Start Date & Time</td>
                                                <td>2024-06-22 04:24:55</td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">Associated MSISDN List</td>
                                                <td>Updated_2024_08_22</td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">MSISDN List Associated On</td>
                                                <td>2024-08-22 01:04:24</td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">Total Outbound Calls</td>
                                                <td>
                                                    <span>0</span>
                                                    <div class="btn-group">
                                                        <button class="btn btn-light">Download csv file</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">Total Remaining</td>
                                                <td>
                                                    <span>4023</span>
                                                    <div class="btn-group">
                                                        <button class="btn btn-light">Download csv file</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="max-width: 70px">Total Skipped</td>
                                                <td>
                                                    <span>0</span>
                                                    <div class="btn-group">
                                                        <button class="btn btn-light">Download csv file</button>
                                                    </div>
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
            <div class="col-12 mb-4">
                <a href="campaigns" class="btn btn-primary">Back to campaign list</a>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



<?php include_once 'include/footer.php' ?>