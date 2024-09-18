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
                        <h4>Clone campaign</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom01">campaign product</label>
                                <input class="form-control" id="validationCustom01" type="text"
                                    placeholder="Enter campaign title" required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom02">campaign category</label>
                                <input class="form-control" id="validationCustom02" type="number"
                                    placeholder="Enter value between 1 to 10" required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom03">campaign masking</label>
                                <input class="form-control" id="validationCustom03" type="text"
                                    placeholder="Start typing to get list of Products" required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
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
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom05">campaign name</label>
                                <input class="form-control" id="validationCustom05" type="text"
                                    placeholder="Enter campaign name" required="">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="btn-group">
                                    <button class="btn btn-primary me-2" type="submit">Clone campaign</button>
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