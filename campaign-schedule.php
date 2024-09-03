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
                        <h4>Schedule campaign</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom02">campaign category</label>
                                <input class="form-control" id="validationCustom02" type="number"
                                    placeholder="Enter value between 1 to 10" required value="VAS">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom01">campaign product</label>
                                <input class="form-control" id="validationCustom01" type="text"
                                    placeholder="Enter campaign title" required="" value="Autoreply">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>

                            <div class="col-md-6 col-12">
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
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="formFile11">MSSISDON List</label>
                                <input class="form-control" id="formFile11" type="file" aria-label="file example"
                                    required="">
                                <div class="invalid-feedback">Invalid form file selected</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="datetime-local1">campaign Start Date & Time</label>
                                <div class="">
                                    <div class="input-group flatpicker-calender">
                                        <input class="form-control" id="datetime-local1" type="date" value="<?= date('Y-m-d H:i') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="datetime-local2">campaign End Date & Time</label>
                                <div class="">
                                    <div class="input-group flatpicker-calender">
                                        <input class="form-control" id="datetime-local2" type="date">
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 mt-4">
                                <div class="btn-group">
                                    <button class="btn btn-primary me-2" type="submit">Schedule campaign</button>
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