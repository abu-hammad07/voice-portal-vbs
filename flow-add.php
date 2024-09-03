<?php
session_start();
include_once 'include/database.php';

$obj = new Database();

include_once 'include/header.php';
include_once 'include/sidebar.php';
?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>New Flow</h1>
                                <p>Choose an existing flow template or create your flow from scratch</p>
                            </div>
                        </div>
                        <div class="search-page mt-3">
                            <form class="theme-form">
                                <div class="input-group m-0 flex-nowrap">
                                    <input class="form-control-plaintext" type="search" placeholder="Search .."><span
                                        class="btn btn-primary input-group-text">Search</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <a href="">
                    <div class="card common-hover">
                        <div class="card-header border-l-secondary border-3">
                            <div class="btn-group">
                                <span class="mt-1">
                                    <h4>Sale promotion</h4>
                                </span>
                            </div>
                        </div>
                        <div class="card-body scroll-demo mb-5">
                            <p>
                                Set up voice numbers, SIR trunks and call routing,
                                Recording, Call Link and WebTRC settings
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-md-6">
                <a href="">
                    <div class="card common-hover">
                        <div class="card-header border-l-secondary border-3">
                            <div class="btn-group">
                                <span class="mt-1">
                                    <h4>SMS double opt-in</h4>
                                </span>
                            </div>
                        </div>
                        <div class="card-body scroll-demo mb-5">
                            <p>
                                Set up voice numbers, SIR trunks and call routing,
                                Recording, Call Link and WebTRC settings
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-md-6">
                <a href="">
                    <div class="card common-hover">
                        <div class="card-header border-l-secondary border-3">
                            <div class="btn-group">
                                <span class="mt-1">
                                    <h4>Special offer promo</h4>
                                </span>
                            </div>
                        </div>
                        <div class="card-body scroll-demo mb-5">
                            <p>
                                Set up voice numbers, SIR trunks and call routing,
                                Recording, Call Link and WebTRC settings
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-md-6">
                <a href="">
                    <div class="card common-hover">
                        <div class="card-header border-l-secondary border-3">
                            <div class="btn-group">
                                <span class="mt-1">
                                    <h4>Survey on service</h4>
                                </span>
                            </div>
                        </div>
                        <div class="card-body scroll-demo mb-5">
                            <p>
                                Set up voice numbers, SIR trunks and call routing,
                                Recording, Call Link and WebTRC settings
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>