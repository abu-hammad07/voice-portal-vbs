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
                        <h4>Add campaign</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom01">campaign Title</label>
                                <input class="form-control" id="validationCustom01" type="text"
                                    placeholder="Enter campaign title" required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom02">campaign Priority</label>
                                <input class="form-control" id="validationCustom02" type="number"
                                    placeholder="Enter value between 1 to 10" required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom03">campaign Product</label>
                                <input class="form-control" id="validationCustom03" type="text"
                                    placeholder="Start typing to get list of Products" required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom04">campaign Category</label>
                                <input class="form-control" id="validationCustom04" type="text"
                                    placeholder="Enter Category" required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom05">campaign ShortCode</label>
                                <input class="form-control" id="validationCustom05" type="text"
                                    placeholder="Enter shortcode" required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom06">Maximum number of retries</label>
                                <input class="form-control" id="validationCustom06" type="number"
                                    placeholder="Enter value between 0 to 2. By default it use global setting value"
                                    required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">Retry scenario</label>
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <div class="radio-form">
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck07-1" type="radio"
                                                name="radio-stacked" required="">
                                            <label class="form-check-label" for="validationFormCheck07-1">No
                                                Answer</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck07-2" type="radio"
                                                name="radio-stacked" required="">
                                            <label class="form-check-label"
                                                for="validationFormCheck07-2">Unavailable</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck07-3" type="radio"
                                                name="radio-stacked" required="">
                                            <label class="form-check-label" for="validationFormCheck07-3">Reject</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="validationFormCheck07-4" type="radio"
                                                name="radio-stacked" required="">
                                            <label class="form-check-label" for="validationFormCheck07-4">All</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom08">Entry interval</label>
                                <input class="form-control" id="validationCustom08" type="number" placeholder="0"
                                    required>
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="flexSwitchCheckChecked09">Skip contact policy</label>
                                <div class="d-flex">
                                    <div class="flex-grow-1 icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" id="flexSwitchCheckChecked09"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="flexSwitchCheckChecked10">Skip DNCR</label>
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
                                <label class="form-label">Global & Specific DNCR</label>
                                <div class="d-flex mb-2">
                                    <div class="text-end icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" checked="" id="flexRadioDefault11"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                    <label class="col-form-label m-l-10" for="flexRadioDefault11">Apply global DNCR
                                        list</label>
                                </div>
                                <div class="d-flex">
                                    <div class="text-end icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" id="flexRadioDefault12"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                    <label class="col-form-label m-l-10" for="flexRadioDefault12">Skip Specific DNCR
                                        list</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="formFile11">Specific DNCR list</label>
                                <input class="form-control" id="formFile11" type="file" aria-label="file example"
                                    required="">
                                <div class="invalid-feedback">Invalid form file selected</div>
                            </div>
                            <div class="col-12">
                                <div class="accordion dark-accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button
                                                class="accordion-button collapsed gap-2 bg-light-primary active txt-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseOne"><i class="svg-wrapper"
                                                    data-feather="check-square"></i>IVR Level 1<i class="svg-color"
                                                    data-feather="chevron-down"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseOne"
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5>Input Details</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault13-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault13-1">Skip DTMF</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-2"
                                                                    type="number" placeholder="DTMF" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-3"
                                                                    type="number" placeholder="Kayword" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-4"
                                                                    type="number" placeholder="Short Code" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-5"
                                                                    type="number" placeholder="API URL" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault13-2"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault13-2">CDR</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Prompt</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault14-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault14-1">Use existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label" for="formFile14-2">Upload
                                                                    new</label>
                                                                <input class="form-control" id="formFile14-2"
                                                                    type="file" aria-label="file example" required="">
                                                                <div class="invalid-feedback">Invalid form file selected
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Thank you Prompt</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault15-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault15-1">Use existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label" for="formFile15-2">Upload
                                                                    new</label>
                                                                <input class="form-control" id="formFile15-2"
                                                                    type="file" aria-label="file example" required="">
                                                                <div class="invalid-feedback">Invalid form file selected
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button
                                                class="accordion-button collapsed gap-2 bg-light-primary active txt-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseTwo"><i class="svg-wrapper"
                                                    data-feather="check-square"></i>IVR Level 2<i class="svg-color"
                                                    data-feather="chevron-down"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5>Input Details</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault13-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault13-1">Skip DTMF</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-2"
                                                                    type="number" placeholder="DTMF" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-3"
                                                                    type="number" placeholder="Kayword" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-4"
                                                                    type="number" placeholder="Short Code" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-5"
                                                                    type="number" placeholder="API URL" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault13-2"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault13-2">CDR</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Prompt</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault14-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault14-1">Use existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label" for="formFile14-2">Upload
                                                                    new</label>
                                                                <input class="form-control" id="formFile14-2"
                                                                    type="file" aria-label="file example" required="">
                                                                <div class="invalid-feedback">Invalid form file selected
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Thank you Prompt</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault15-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault15-1">Use existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label" for="formFile15-2">Upload
                                                                    new</label>
                                                                <input class="form-control" id="formFile15-2"
                                                                    type="file" aria-label="file example" required="">
                                                                <div class="invalid-feedback">Invalid form file selected
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button
                                                class="accordion-button collapsed gap-2 bg-light-primary active txt-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseThree"><i class="svg-wrapper"
                                                    data-feather="check-square"></i>IVR Level 3<i class="svg-color"
                                                    data-feather="chevron-down"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5>Input Details</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault13-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault13-1">Skip DTMF</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-2"
                                                                    type="number" placeholder="DTMF" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-3"
                                                                    type="number" placeholder="Kayword" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-4"
                                                                    type="number" placeholder="Short Code" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" id="validationCustom13-5"
                                                                    type="number" placeholder="API URL" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault13-2"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault13-2">CDR</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Prompt</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault14-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault14-1">Use existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label" for="formFile14-2">Upload
                                                                    new</label>
                                                                <input class="form-control" id="formFile14-2"
                                                                    type="file" aria-label="file example" required="">
                                                                <div class="invalid-feedback">Invalid form file selected
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Thank you Prompt</h5>
                                                        <div class="row g-3 mt-2">
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox"
                                                                                id="flexRadioDefault15-1"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10"
                                                                        for="flexRadioDefault15-1">Use existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label" for="formFile15-2">Upload
                                                                    new</label>
                                                                <input class="form-control" id="formFile15-2"
                                                                    type="file" aria-label="file example" required="">
                                                                <div class="invalid-feedback">Invalid form file selected
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="btn-group">
                                    <button class="btn btn-primary me-2" type="submit">Add new campaign</button>
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