<?php
session_start();
include_once 'include/database.php';

$obj = new Database();

include_once 'include/header.php';
include_once 'include/sidebar.php';
?>





<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid email-wrap bookmark-wrap todo-wrap">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="email-sidebar md-sidebar">
                    <div class="email-left-aside md-sidebar-aside">
                        <div class="card theme-scrollbar mb-0">
                            <a href="">
                                <div class="card-body">
                                    <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                        <div class="d-flex align-items-center">
                                            <div class="media-size-email">
                                                <i class="icon-help-alt fs-1 me-3"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h1 class="f-w-600">Broadcast Templates</h1>
                                                <p>Pre-saved Broadcast communications for a particular channel</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="email-sidebar md-sidebar">
                    <div class="email-left-aside md-sidebar-aside">
                        <div class="card theme-scrollbar mb-0">
                            <div class="card-body">
                                <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                    <div class="d-flex align-items-center">
                                        <div class="media-size-email">
                                            <i class="icon-help-alt fs-1 me-3"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h1 class="f-w-600">Flow Templates</h1>
                                            <p>Ready to use multi-step flows for the most common use cases</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>