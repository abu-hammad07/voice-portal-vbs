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
        <div class="row">
            <div class="col-md-12">
                <div class="email-sidebar md-sidebar">
                    <a class="btn btn-primary email-aside-toggle md-sidebar-toggle">To Do filter</a>
                    <div class="email-left-aside md-sidebar-aside">
                        <div class="card theme-scrollbar mb-0">
                            <div class="card-body">
                                <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                    <div class="d-flex align-items-center">
                                        <div class="media-size-email">
                                            <i class="icon-help-alt fs-1 me-3"></i>
                                            <!-- <img class="me-3 rounded-circle" src="assets/images/user/user.png" alt=""> -->
                                        </div>
                                        <div class="flex-grow-1">
                                            <h1 class="f-w-600">My Requests</h1>
                                            <p>Discover and configure communication channels. Reach your customers
                                                though our no-code products or API.</p>
                                        </div>
                                        <div class="flex-grow-1 text-end">
                                            <a href="" class="btn btn-primary">Request New</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12">
                <div class="img">
                    <img src="assets/images/tree/s1.png" class="img-fluid" alt="">
                </div>
            </div> -->
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>