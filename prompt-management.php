<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card pt-2 pb-2">
                    <div class="card-body common-flex visual-button visual-button1">
                        <a href="prompt-upload" class="btn btn-primary btn-lg">
                            <i data-feather="plus"></i>
                            <span>Upload</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4>Prompt</h4>
                        <p class="text-muted card-sub-title">Manage Prompt</p>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive theme-scrollbar">
                            <table class="display" id="export-button">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Filename</th>
                                        <th>Updated On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>23</td>
                                        <td>jazz.wav</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                                <ul class="dropdown-menu dropdown-block">
                                                    <li><a class="dropdown-item" href="product-edit">
                                                            <i class="icon-play-circle"></i>Play</a></li>
                                                    <li><a class="dropdown-item" href="#!">
                                                            <i class="icon-trash"></i> Delete</a></li>
                                                    <li><a class="dropdown-item" href="#!">
                                                            <i class="icon-download"></i> Download</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>zong.wav</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                                <ul class="dropdown-menu dropdown-block">
                                                    <li><a class="dropdown-item" href="product-edit">
                                                            <i class="icon-play-circle"></i>Play</a></li>
                                                    <li><a class="dropdown-item" href="#!">
                                                            <i class="icon-trash"></i> Delete</a></li>
                                                    <li><a class="dropdown-item" href="#!">
                                                            <i class="icon-pencil-alt"></i> Download</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>40123232</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                                <ul class="dropdown-menu dropdown-block">
                                                    <li><a class="dropdown-item" href="product-edit">
                                                            <i class="icon-play-circle"></i>Play</a></li>
                                                    <li><a class="dropdown-item" href="#!">
                                                            <i class="icon-trash"></i> Delete</a></li>
                                                    <li><a class="dropdown-item" href="#!">
                                                            <i class="icon-pencil-alt"></i> Download</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>