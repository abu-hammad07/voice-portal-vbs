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
                        <h4>Global Setting</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom01">Maximum number of retries per
                                    broadcast</label>
                                <input class="form-control" id="validationCustom01" type="number" placeholder="0"
                                    required>
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">Retry scenario</label>
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <div class="radio-form">
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck07-1" type="radio"
                                                name="radio-stacked" required>
                                            <label class="form-check-label" for="validationFormCheck07-1">No
                                                Answer</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck07-2" type="radio"
                                                name="radio-stacked" required>
                                            <label class="form-check-label"
                                                for="validationFormCheck07-2">Unavailable</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck07-3" type="radio"
                                                name="radio-stacked" required>
                                            <label class="form-check-label" for="validationFormCheck07-3">Reject</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck07-4" type="radio"
                                                name="radio-stacked" required>
                                            <label class="form-check-label" for="validationFormCheck07-4">All</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom02">campaign Priority</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="validationCustom02" placeholder="0"
                                        required>
                                    <span class="input-group-text list-light-white">mins</span>
                                    <div class="invalid-feedback">Please enter your valid </div>
                                    <div class="valid-feedback">Looks's Good!</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom03">Concurrent calls per campaign</label>
                                <input class="form-control" id="validationCustom03" type="number" placeholder="0"
                                    required>
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom05">Maximum number of campaign calls
                                    allowed</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="validationCustom05"
                                        placeholder="4" required>
                                    <span class="input-group-text list-light-white">per</span>
                                    <div class="invalid-feedback">Please enter your valid </div>
                                    <div class="valid-feedback">Looks's Good!</div>
                                </div>
                                <div class="common-flex mt-2 text-center justify-content-center">
                                    <div class="d-flex">
                                        <div class="text-end icon-state switch-outline">
                                            <label class="switch mb-0">
                                                <input type="checkbox" checked="" id="flexRadioDefault11day"><span
                                                    class="switch-state bg-success"></span>
                                            </label>
                                        </div>
                                        <label class="col-form-label m-l-10" for="flexRadioDefault11day">Day</label>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end icon-state switch-outline">
                                            <label class="switch mb-0">
                                                <input type="checkbox" id="flexRadioDefault11week"><span
                                                    class="switch-state bg-success"></span>
                                            </label>
                                        </div>
                                        <label class="col-form-label m-l-10" for="flexRadioDefault11week">Week</label>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end icon-state switch-outline">
                                            <label class="switch mb-0">
                                                <input type="checkbox" id="flexRadioDefault11month"><span
                                                    class="switch-state bg-success"></span>
                                            </label>
                                        </div>
                                        <label class="col-form-label m-l-10" for="flexRadioDefault11month">Month</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom07">Maximum number of calls allowed per product</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="validationCustom07"
                                        placeholder="6" required>
                                    <span class="input-group-text list-light-white">per</span>
                                    <div class="invalid-feedback">Please enter your valid </div>
                                    <div class="valid-feedback">Looks's Good!</div>
                                </div>
                                <div class="common-flex mt-2 text-center justify-content-center">
                                    <div class="d-flex">
                                        <div class="text-end icon-state switch-outline">
                                            <label class="switch mb-0">
                                                <input type="checkbox" id="flexRadioDefault11day"><span
                                                    class="switch-state bg-success"></span>
                                            </label>
                                        </div>
                                        <label class="col-form-label m-l-10" for="flexRadioDefault11day">Day</label>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end icon-state switch-outline">
                                            <label class="switch mb-0">
                                                <input type="checkbox" id="flexRadioDefault11week"><span
                                                    class="switch-state bg-success"></span>
                                            </label>
                                        </div>
                                        <label class="col-form-label m-l-10" for="flexRadioDefault11week">Week</label>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end icon-state switch-outline">
                                            <label class="switch mb-0">
                                                <input type="checkbox" checked id="flexRadioDefault11month"><span
                                                    class="switch-state bg-success"></span>
                                            </label>
                                        </div>
                                        <label class="col-form-label m-l-10" for="flexRadioDefault11month">Month</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom04">Maximum campaigns allowed</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="validationCustom04" placeholder="10"
                                        required>
                                    <span class="input-group-text list-light-white">per day</span>
                                    <div class="invalid-feedback">Please enter your valid </div>
                                    <div class="valid-feedback">Looks's Good!</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom06">Blacklist number if no DTMF is
                                    provided against successfully attending</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="validationCustom06"
                                        placeholder="Enter numeric value" required>
                                    <span class="input-group-text list-light-white">calls</span>
                                    <div class="invalid-feedback">Please enter your valid </div>
                                    <div class="valid-feedback">Looks's Good!</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom08">Blacklist number if dosen't
                                    pickup</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="validationCustom08"
                                        placeholder="Enter numeric value" required>
                                    <span class="input-group-text list-light-white">per day</span>
                                    <div class="invalid-feedback">Please enter your valid </div>
                                    <div class="valid-feedback">Looks's Good!</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="time-picker">Start Time</label>
                                <div class="input-group">
                                    <input class="form-control" id="time-picker" type="time" value="12:00">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="flexSwitchCheckChecked12">End Time</label>
                                <div class="input-group">
                                    <input class="form-control" id="time-picker" type="time" value="01:00">
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="btn-group">
                                    <button class="btn btn-primary me-2" type="submit">Update</button>
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