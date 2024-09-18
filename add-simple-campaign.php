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
                        <h4>Add new simple campaign</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="" action="include/insert-data.php" method="POST" enctype="multipart/form-data">
                            <div class="col-md-6 col-12">
                                <label class="form-label">campaign Title</label>
                                <input class="form-control" type="text" name="campaignTitle"
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
                                <label class="form-label">campaign ShortCode</label>
                                <input class="form-control" type="text" name="shortcode"
                                    placeholder="Enter shortcode" required="">
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
                                            <input class="form-check-input" id="noAnswer" value="No Answer" type="radio"
                                                name="retryScenario" required="">
                                            <label class="form-check-label" for="noAnswer">No
                                                Answer</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="unavailable" value="Unavailable" type="radio"
                                                name="retryScenario" required="">
                                            <label class="form-check-label"
                                                for="unavailable">Unavailable</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="reject" value="Reject" type="radio"
                                                name="retryScenario" required="">
                                            <label class="form-check-label" for="reject">Reject</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="all" value="all" type="radio"
                                                name="retryScenario" required="">
                                            <label class="form-check-label" for="all">All</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">Entry interval</label>
                                <input class="form-control" type="number" name="entryInterval" placeholder="0"
                                    required>
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="contactPolicy">Skip contact policy</label>
                                <div class="d-flex">
                                    <div class="flex-grow-1 icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" id="contactPolicy" name="contactPolicy"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="skipDNCR">Skip DNCR</label>
                                <div class="d-flex">
                                    <div class="flex-grow-1 icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" id="skipDNCR" name="skipDNCR"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="skipSpecificDNCR">Skip Specific DNCR list</label>
                                <div class="d-flex">
                                    <div class="flex-grow-1 icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" id="skipSpecificDNCR" name="skipSpecificDNCR"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">Specific DNCR list</label>
                                <input class="form-control" type="file" name="specificDNCRFile" required="">
                                <div class="invalid-feedback">Invalid form file selected</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="promptFile">Prompt file</label>
                                <div class="d-flex">
                                    <div class="text-end icon-state switch-outline">
                                        <label class="switch mb-0">
                                            <input type="checkbox" id="promptFile" name="filePrompt"><span
                                                class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                    <label class="col-form-label m-l-10" for="flexRadioDefault13-1">Use existing</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label">Updated new</label>
                                <input class="form-control" type="file" name="updatedFile" required="">
                                <div class="invalid-feedback">Invalid form file selected</div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="btn-group">
                                    <button class="btn btn-primary me-2" type="submit" name="submitSimpleCampaign">Add simple campaign</button>
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