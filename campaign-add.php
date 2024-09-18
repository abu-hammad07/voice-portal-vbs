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
                        <form class="row g-3 needs-validation custom-input" novalidate="" action="include/insert-data.php" method="POST" enctype="multipart/form-data">
                            <div class="col-md-6 col-12">
                                <label class="form-label">campaign Title</label>
                                <input class="form-control" type="text" name="campaign_title"
                                    placeholder="Enter campaign title" required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">campaign Priority</label>
                                <input class="form-control" type="number" name="priority"
                                    placeholder="Enter value between 1 to 10" required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">campaign Product</label>
                                <input class="form-control" type="text" name="product"
                                    placeholder="Start typing to get list of Products" required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">campaign Category</label>
                                <input class="form-control" type="text" name="category" placeholder="Enter Category"
                                    required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">campaign ShortCode</label>
                                <input class="form-control" type="text" name="shortcode" placeholder="Enter shortcode"
                                    required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">Maximum number of retries</label>
                                <input class="form-control" type="number" name="retries"
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
                                            <input class="form-check-input" id="noAnswer" type="radio"
                                                name="retryScenario" value="No Answer">
                                            <label class="form-check-label" for="noAnswer">No
                                                Answer</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="unavailable" type="radio"
                                                name="retryScenario" value="Unavailable">
                                            <label class="form-check-label" for="unavailable">Unavailable</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="reject" type="radio"
                                                name="retryScenario" value="Reject">
                                            <label class="form-check-label" for="reject">Reject</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="all" type="radio" name="retryScenario"
                                                value="All">
                                            <label class="form-check-label" for="all">All</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">Entry interval</label>
                                <input class="form-control" type="number" placeholder="0" name="entryInterval">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Skip contact policy</label>
                                <div class="d-flex">
                                    <div class="flex-grow-1 icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="Skip contact policy" name="contactPolicy"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Skip DNCR</label>
                                <div class="d-flex">
                                    <div class="flex-grow-1 icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="Skip DNCR" name="skipDNCR"><span
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
                                            <input type="checkbox" value="Global DNCR" checked="" name="globalDNCR"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                    <label class="col-form-label m-l-10">Apply global DNCR
                                        list</label>
                                </div>
                                <div class="d-flex">
                                    <div class="text-end icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="Specific DNCR" name="specificDNCR"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                    <label class="col-form-label m-l-10">Skip Specific DNCR
                                        list</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">Specific DNCR list</label>
                                <input class="form-control" type="file" name="specificDNCRList">
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
                                                                            <input type="checkbox" value="Skip DTMF"
                                                                                name="level1SkipDTMF"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Skip
                                                                        DTMF</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level1DTMF"
                                                                    type="text" placeholder="DTMF">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level1Keyword"
                                                                    type="text" placeholder="Kayword">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level1ShortCode"
                                                                    type="text" placeholder="Short Code">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level1APIURL"
                                                                    type="text" placeholder="API URL">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox" value="CDR"
                                                                                name="level1CDR"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">CDR</label>
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
                                                                            <input type="checkbox" value="Use existing"
                                                                                name="level1PromptUseExisting"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Use
                                                                        existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Upload
                                                                    new</label>
                                                                <input class="form-control" name="level1PromptFile"
                                                                    type="file">
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
                                                                            <input type="checkbox" value="Use existing"
                                                                                name="level1ThankYouPromptUse"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Use
                                                                        existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Upload
                                                                    new</label>
                                                                <input class="form-control"
                                                                    name="level1ThankYouPromptFile" type="file">
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
                                                                            <input type="checkbox" value="Skip DTMF"
                                                                                name="level2SkipDTMF"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Skip
                                                                        DTMF</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level2DTMF"
                                                                    type="text" placeholder="DTMF">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level2Keyword"
                                                                    type="text" placeholder="Kayword">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level2ShortCode"
                                                                    type="text" placeholder="Short Code">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level2APIURL"
                                                                    type="text" placeholder="API URL">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox" value="CDR"
                                                                                name="level2CDR"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">CDR</label>
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
                                                                            <input type="checkbox" value="Use existing"
                                                                                name="level2PromptUseExisting"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Use
                                                                        existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Upload
                                                                    new</label>
                                                                <input class="form-control" name="level2PromptFile"
                                                                    type="file">
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
                                                                            <input type="checkbox" value="Use existing"
                                                                                name="level2ThankYouPromptUse"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Use
                                                                        existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Upload
                                                                    new</label>
                                                                <input class="form-control"
                                                                    name="level2ThankYouPromptFile" type="file">
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
                                                                            <input type="checkbox" value="Skip DTMF"
                                                                                name="level3SkipDTMF"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Skip
                                                                        DTMF</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level3DTMF"
                                                                    type="text" placeholder="DTMF">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level3Keyword"
                                                                    type="text" placeholder="Kayword">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level3ShortCode"
                                                                    type="text" placeholder="Short Code">
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="form-control" name="level3APIURL"
                                                                    type="text" placeholder="API URL">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-flex">
                                                                    <div class="text-end icon-state switch-outline">
                                                                        <label class="switch mb-0">
                                                                            <input type="checkbox" value="CDR"
                                                                                name="level3CDR"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">CDR</label>
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
                                                                            <input type="checkbox" value="Use existing"
                                                                                name="level3PromptUseExisting"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Use
                                                                        existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Upload
                                                                    new</label>
                                                                <input class="form-control" name="level3PromptFile"
                                                                    type="file">
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
                                                                            <input type="checkbox" value="Use existing"
                                                                                name="level3ThankYouPromptUse"><span
                                                                                class="switch-state bg-success"></span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="col-form-label m-l-10">Use
                                                                        existing</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Upload
                                                                    new</label>
                                                                <input class="form-control"
                                                                    name="level3ThankYouPromptFile" type="file">
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
                                    <button class="btn btn-primary me-2" type="submit" name="submitNewCampaign">Add new campaign</button>
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