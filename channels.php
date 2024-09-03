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
                        <div class="row mt-3 mb-3">
                            <div class="col-md-1 text-center">
                                <span class="rounded-circle">
                                    <i class="icon-notepad fs-1 me-2"></i>
                                </span>
                            </div>
                            <div class="col-md-8">
                                <h1>Channels</h1>
                                <p>Discover and configure communication channels. Reach your customers though our no-code products or API.</p>
                            </div>
                            <div class="col-md-3 text-end mt-2">
                                <div class="btn-group text-end">
                                    <a href="" class="btn btn-primary">Request Channel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 search-page mb-4">
                <div class="card-header">
                    <form class="theme-form">
                        <div class="input-group m-0 flex-nowrap">
                            <input class="form-control-plaintext" type="search" placeholder="Search .."><span
                                class="btn btn-primary input-group-text">Search</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <a href="">
                    <div class="card common-hover">
                        <div class="card-header border-l-primary border-3">
                            <div class="btn-group">
                                <samp>
                                    <i class="icofont icofont-ui-message me-2 fs-2"></i>
                                </samp>
                                <span class="mt-1">
                                    <h4>SMS</h4>
                                </span>

                            </div>
                        </div>
                        <div class="card-body mb-5">
                            <p>
                                Expand your reach and engage customers worldwide using SMS.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xxl-4 col-md-6">
                <a href="">
                    <div class="card common-hover">
                        <div class="card-header border-l-warning border-3">
                            <div class="btn-group">
                                <span>
                                    <i class="icofont icofont-brand-whatsapp me-2 fs-2"></i>
                                </span>
                                <span class="mt-1">
                                    <h4>WhatsApp</h4>
                                </span>
                            </div>
                        </div>
                        <div class="card-body mb-5">
                            <p>
                                Reach your customers worldwide using WhatsApp.
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
                                <span>
                                    <i class="icofont icofont-forward me-2 fs-2"></i>
                                </span>
                                <span class="mt-1">
                                    <h4>Voice & WebRTC</h4>
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
                        <div class="card-header border-l-primary border-3">
                            <div class="btn-group">
                                <samp>
                                    <i class="icofont icofont-email me-2 fs-2"></i>
                                </samp>
                                <span class="mt-1">
                                    <h4>SMS</h4>
                                </span>
                            </div>
                        </div>
                        <div class="card-body mb-5">
                            <p>
                                Start configuring your domains now.
                            </p>
                            <a href="#">Request Channel</a>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>