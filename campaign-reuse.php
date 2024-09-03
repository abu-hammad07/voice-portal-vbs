<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>


<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Reuse campaign</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-6">
                                <label class="form-label" for="validationCustom04">Existing campaign</label>
                                <select class="form-select" id="validationTooltip04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>Text</option>
                                    <option>Pakistan</option>
                                    <option>U.S</option>
                                    <option>India</option>
                                </select>
                                <div class="invalid-tooltip">Please select a valid state.</div>
                            </div>
                            <div class="col-6">
                                <label for="flexSwitchCheckChecked10">Use Preuploaded List</label>
                                <div class="d-flex">
                                    <div class="flex-grow-1 icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" id="flexSwitchCheckChecked10"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="formFile11">MSSISDON List</label>
                                <input class="form-control" id="formFile11" type="file" aria-label="file example"
                                    required="">
                                <div class="invalid-feedback">Invalid form file selected</div>
                            </div>
                            <div class="col-6">
                                <label for="datetime-local1">campaign Start Date & Time</label>
                                <div class="">
                                    <div class="input-group flatpicker-calender">
                                        <input class="form-control" id="datetime-local1" type="date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="datetime-local2">campaign End Date & Time</label>
                                <div class="">
                                    <div class="input-group flatpicker-calender">
                                        <input class="form-control" id="datetime-local2" type="date">
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 mt-4">
                                <div class="btn-group">
                                    <button class="btn btn-primary me-2" type="submit">Reuse campaign</button>
                                    <a href="campaigns" class="btn btn-outline-primary me-2">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



<?php include_once 'include/footer.php' ?>