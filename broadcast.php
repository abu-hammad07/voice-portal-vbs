<?php
session_start();
include_once 'include/database.php';

$obj = new Database();

include_once 'include/header.php';
include_once 'include/sidebar.php';
?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid search-page">
        <div class="row">
            <?php include_once "_message.php" ?>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <form class="theme-form">
                            <div class="input-group m-0 flex-nowrap">
                                <input class="form-control-plaintext" type="search" placeholder="Pixelstrap .."><span
                                    class="btn btn-primary input-group-text">Search</span>
                            </div>
                        </form> -->
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="">All broadcasts</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                    aria-labelledby="exampleModalToggle" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content border-0">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myExtraLargeModal">Select Channel</h4>
                                                <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <a href="broadcast_sms-add.php">
                                                            <div class="modal-toggle-wrapper border text-center p-2">
                                                                <ul class="modal-img">
                                                                    <li>
                                                                        <img src="assets/images/gif/sms.gif"
                                                                            class="w-100 h-100" alt="sms">
                                                                    </li>
                                                                </ul>
                                                                <h5 class="f-w-300">SMS</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="broadcast_voice-add.php">
                                                            <div class="modal-toggle-wrapper border text-center p-2">
                                                                <ul class="modal-img">
                                                                    <li><img src="assets/images/gif/voice.gif"
                                                                            class="w-100 h-100" alt="voice"></li>
                                                                </ul>
                                                                <h5 class="f-w-300">Voice</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="broadcast_whatsapp-add.php">
                                                            <div class="modal-toggle-wrapper border text-center p-2">
                                                                <ul class="modal-img">
                                                                    <li><img src="assets/images/gif/whatsapp.gif"
                                                                            class="w-100 h-100" alt="whatsapp">
                                                                    </li>
                                                                </ul>
                                                                <h5 class="f-w-300">WhatsApp</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="broadcast_email-add.php">
                                                            <div class="modal-toggle-wrapper border text-center p-2">
                                                                <ul class="modal-img">
                                                                    <li><img src="assets/images/gif/email.gif"
                                                                            class="w-100 h-100" alt="email"></li>
                                                                </ul>
                                                                <h5 class="f-w-300">Email</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-primary float-end" data-bs-toggle="modal" href="#exampleModalToggle"
                                    role="button" data-bs-dismiss="modal">Create Broadcast</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">Channels</option>
                                        <option value="1">SMS</option>
                                        <option value="2">Email</option>
                                        <option value="3">Voice</option>
                                        <option value="4">Whatsapp</option>
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Pending</option>
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">Traffic</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Free</option>
                                        <option value="3">Unpaid</option>
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">Templates</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Free</option>
                                        <option value="3">Unpaid</option>
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <div class="input-group flatpicker-calender">
                                        <input class="form-control" id="datetime-local" type="date" value="2024-05-03">
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-md-2 col-3">
                                    <select class="form-select" id="requestType">
                                        <option disabled="" selected="">Created by</option>
                                        <option value="1">Hammad</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 mt-5">
                                    <div class="dt-ext table-responsive theme-scrollbar">
                                        <table class="display" id="keytable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Traffic</th>
                                                    <th>Created date</th>
                                                    <th>Schedule date</th>
                                                    <th>Launched date</th>
                                                    <th>Created by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $obj->sql("SELECT * FROM voicebroadcast ORDER BY voiceID DESC");
                                                $data = $obj->getResult();
                                                foreach ($data as $row) {
                                                    $createdAt = date("d-M-Y", strtotime($row['createdAt']));
                                                    $randomNumber = rand(1,9)
                                                    ?>
                                                    <tr>
                                                        <td>Voice</td>
                                                        <td>Send</td>
                                                        <td><?= $randomNumber ?></td>
                                                        <td><?= $createdAt ?></td>
                                                        <td></td>
                                                        <td><?= $createdAt ?></td>
                                                        <td><?= $row['createdBy'] ?></td>
                                                    </tr>
                                                    <?php
                                                }


                                                $obj->sql("SELECT * FROM whatsappbroadcast ORDER BY whatsappID DESC");
                                                $data = $obj->getResult();
                                                foreach ($data as $row) {
                                                    $createdAt = date("d-M-Y", strtotime($row['createdAt']));
                                                    $randomNumber = rand(1,99)
                                                    ?>
                                                    <tr>
                                                        <td>WhatsApp</td>
                                                        <td>Send</td>
                                                        <td><?= $randomNumber ?></td>
                                                        <td><?= $createdAt ?></td>
                                                        <td></td>
                                                        <td><?= $createdAt ?></td>
                                                        <td><?= $row['createdBy'] ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'include/footer.php' ?>