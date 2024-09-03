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
                        <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom01">Product name</label>
                                <input class="form-control" id="validationCustom01" type="text"
                                    placeholder="Enter product name" required value="RBT_122838">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom04">Product category</label>
                                <select class="form-select" id="validationTooltip04" required>
                                    <option value="">Choose...</option>
                                    <option value="1" selected>Text</option>
                                    <option value="2">Pakistan</option>
                                    <option value="3">U.S</option>
                                    <option value="4">India</option>
                                </select>
                                <div class="invalid-tooltip">Please select a valid state.</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom02">Call masking</label>
                                <input class="form-control" id="validationCustom02" type="number"
                                    placeholder="Enter product masking" required value="2838">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom03">Product Short code</label>
                                <input class="form-control" id="validationCustom03" type="number"
                                    placeholder="Enter Product shortcode" required value="2838">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom05">Product keyword</label>
                                <input class="form-control" id="validationCustom05" type="text"
                                    placeholder="Enter product keyword" required value="Pushto-2838">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom06">Product URL</label>
                                <input class="form-control" id="validationCustom06" type="url"
                                    placeholder="Enter product url" required value="https://doplexer.com">
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label" for="validationCustom07">Product Summary</label>
                                <textarea name="" class="form-control" rows="3" id="validationCustom07"
                                    placeholder="Enter product Summary" required>Pushto-2838</textarea>
                                <div class="invalid-feedback">Please enter your valid</div>
                                <div class="valid-feedback">
                                    Looks's Good!</div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="btn-group">
                                    <button class="btn btn-primary me-2" type="submit">Update Product</button>
                                    <a href="product-management" class="btn btn-outline-primary me-2">Cancel</a>
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