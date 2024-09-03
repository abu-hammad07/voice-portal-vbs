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
                        <form class="row needs-validation custom-input" novalidate="">
                            <div class="col-md-4">
                                <label class="form-label" for="validationCustom01">Enter MSISDN</label>
                                <input class="form-control" id="validationCustom01" type="text"
                                    placeholder="Enter MSISDN" required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <button class="btn btn-primary btn-lg" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="accordion dark-accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed gap-2 bg-light-primary active txt-primary"
                                type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapseOne"><i class="svg-wrapper"
                                    data-feather="check-square"></i>Call History<i class="svg-color"
                                    data-feather="chevron-down"></i>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseOne"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="dt-ext table-responsive theme-scrollbar">
                                    <table class="display" id="keytable">
                                        <thead>
                                            <tr>
                                                <th>Call Date/Time</th>
                                                <th>campaign ID</th>
                                                <th>Campaign Title</th>
                                                <th>Product</th>
                                                <th>calls Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2011/04/25 8:00 AM</td>
                                                <td>302</td>
                                                <td>Test</td>
                                                <td>TBD_23</td>
                                                <td>Busy</td>
                                            </tr>
                                            <tr>
                                                <td>2011/04/25 8:00 AM</td>
                                                <td>302</td>
                                                <td>Test</td>
                                                <td>TBD_23</td>
                                                <td>No Answer</td>
                                            </tr>
                                            <tr>
                                                <td>2011/04/25 8:00 AM</td>
                                                <td>302</td>
                                                <td>Test</td>
                                                <td>TBD_23</td>
                                                <td>Busy</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed gap-2 bg-light-primary active txt-primary"
                                type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"><i class="svg-wrapper"
                                    data-feather="check-square"></i>DTMF History<i class="svg-color"
                                    data-feather="chevron-down"></i>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="dt-ext table-responsive theme-scrollbar">
                                    <table class="display" id="fixed-header-footer">
                                        <thead>
                                            <tr>
                                                <th>Date/Time</th>
                                                <th>campaign ID</th>
                                                <th>Campaign Title</th>
                                                <th>Product</th>
                                                <th>DTMF</th>
                                                <th>MT Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2011/04/25 8:00 AM</td>
                                                <td>302</td>
                                                <td>Test</td>
                                                <td>TBD_23</td>
                                                <td>1</td>
                                                <td>Delevered</td>
                                            </tr>
                                            <tr>
                                                <td>2011/04/25 8:00 AM</td>
                                                <td>302</td>
                                                <td>Test</td>
                                                <td>TBD_23</td>
                                                <td>1</td>
                                                <td>Delevered</td>
                                            </tr>
                                            <tr>
                                                <td>2011/04/25 8:00 AM</td>
                                                <td>302</td>
                                                <td>Test</td>
                                                <td>TBD_23</td>
                                                <td>1</td>
                                                <td>Delevered</td>
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
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>