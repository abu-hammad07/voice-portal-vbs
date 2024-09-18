<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>


<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <!-- <h1>SMS</h1> -->
                        <div class="email-app-sidebar left-bookmark custom-scrollbar">
                            <div class="d-flex align-items-center">
                                <div class="media-size-email">
                                    <!-- <i class="icon-help-alt fs-1 me-3"></i> -->
                                    <img src="assets/images/gif/sms.gif" class="w-100 h-100 p-2" alt="sms">
                                </div>
                                <div class="flex-grow-1">
                                    <h1 class="f-w-600">SMS</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation custom-input" novalidate="">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label" for="validationCustom04">Sender</label>
                                    <select class="form-select" id="validationTooltip04" required="">
                                        <option selected="" disabled="" value="">-- Type or select
                                            sender number --</option>
                                        <option>Text</option>
                                        <option>Pakistan</option>
                                    </select>
                                    <div class="invalid-tooltip">Please select a valid state.</div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <ul class="nav nav-tabs search-list" id="top-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="my-number" data-bs-toggle="tab"
                                                    href="#my-numbers" role="tab" aria-selected="true">Test to speech
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="my-requests" data-bs-toggle="tab"
                                                    href="#my-request" role="tab" aria-selected="false">File upload
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="top-tabContent">
                                        <div class="search-links tab-pane fade show active" id="my-numbers"
                                            role="tabpanel" aria-labelledby="my-number">
                                            <div class="row g-3">
                                                <div class="col-md-10">
                                                    <textarea class="form-control" id="text-to-message"
                                                        placeholder="Enter your message" rows="4"></textarea>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="language">Language</label>
                                                    <select class="form-select" id="language" required="">
                                                        <option selected="" disabled="" value="">-- Select language
                                                            --</option>
                                                        <option>English</option>
                                                        <option>Hindi</option>
                                                        <option>Urdu</option>
                                                    </select>
                                                    <div class="invalid-tooltip">Please select a
                                                        valid state.</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="vioce">Voice</label>
                                                    <select class="form-select" id="vioce" required="" disabled>
                                                        <option selected="" disabled="" value="">-- Select voice --
                                                        </option>
                                                    </select>
                                                    <div class="invalid-tooltip">Please select a
                                                        valid state.</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="speech-rate">Speech rate</label>
                                                    <select class="form-select" id="speech-rate" required="">
                                                        <option selected="" disabled="" value="">-- Select speech
                                                            rate --</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <div class="invalid-tooltip">Please select a
                                                        valid state.</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="text">Text</label>
                                                    <input type="text" class="form-control" name="" id="text"
                                                        placeholder="Text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="my-request" role="tabpanel"
                                            aria-labelledby="my-requests">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="file-upload" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body accordion-border icons-accordion">
                        <div class="accordion dark-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header border-bottom" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed gap-2 bg-light-light active txt-primary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        <i class="svg-wrapper" data-feather="check-square"></i>
                                        Message scheduling <br>
                                        <!-- Schedule your campaign for a specific date and time. -->
                                        <i class="svg-color" data-feather="chevron-down"></i>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseOne"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <div class="row gap-2">
                                            <div class="col-md-8">
                                                <h4>Campaign time zone</h4>
                                            </div>
                                        </div>
                                        <div class="row gap-2 mt-4">
                                            <div class="col-md-7">
                                                <label for="timeZone" class="form-label">Time zone</label>
                                                <select class="form-select" id="timeZone">
                                                    <option value="1">Pakistan Standard Time</option>
                                                    <option value="2">India Standard Time</option>
                                                    <option value="3">China Standard Time</option>
                                                    <option value="3">Australia Standard Time</option>
                                                    <option value="3">New Zealand Standard Time</option>
                                                    <option value="3">Singapore Standard Time</option>
                                                    <option value="3">Vietnam Standard Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row gap-2">
                                            <div class="col-md-8">
                                                <h4>Communication start</h4>
                                            </div>
                                        </div>
                                        <div class="row gap-2 mt-4">
                                            <div class="col-md-4">
                                                <label for="datetime-local" class="form-label">Start date</label>
                                                <div class="input-group flatpicker-calender">
                                                    <input class="form-control" id="datetime-local" type="date"
                                                        value="2024-05-03">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="time-picker" class="form-label">Start time</label>
                                                <div class="input-group">
                                                    <input class="form-control" id="time-picker" type="time" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row gap-2 mt-4">
                                            <div class="col-md-4">
                                                <label for="datetime-local" class="form-label">Start time</label>
                                                <div class="input-group">
                                                    <input class="form-control" id="time-picker" type="time"
                                                        value="12:00">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="time-picker" class="form-label">End time</label>
                                                <div class="input-group">
                                                    <input class="form-control" id="time-picker" type="time"
                                                        value="02:00">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="day" class="form-label">Day</label>
                                                <select class="form-select" id="day">
                                                    <option disabled="" selected="">Day</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                    <option value="Saturday">Saturday</option>
                                                    <option value="Sunday">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body accordion-border icons-accordion">
                        <div class="accordion dark-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header border-bottom" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed gap-2 bg-light-light active txt-primary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        <i class="svg-wrapper" data-feather="check-square"></i>
                                        Tracking and reporting <br>
                                        <!-- Track customer actions and generate reports to discover more about your
                                        customers. -->
                                        <i class="svg-color" data-feather="chevron-down"></i>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <!-- <hr> -->
                                        <div class="row gap-2">
                                            <div class="col-md-8">
                                                <h4>Reporting options</h4>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="d-flex mb-2">
                                                    <div class="text-end icon-state switch-outline">
                                                        <label class="switch mb-0">
                                                            <input type="checkbox" checked="" id="enableDelivery"><span
                                                                class="switch-state bg-success"></span>
                                                        </label>
                                                    </div>
                                                    <label class="col-form-label m-l-10" for="enableDelivery">Enable
                                                        delivery reports over API pull</label>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="text-end icon-state switch-outline">
                                                        <label class="switch mb-0">
                                                            <input type="checkbox" id="pushDelivery"><span
                                                                class="switch-state bg-success"></span>
                                                        </label>
                                                    </div>
                                                    <label class="col-form-label m-l-10" for="pushDelivery">Push
                                                        delivery reports to webhook</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Data Payload</h5>
                                                <p class="text-muted">
                                                    Select additional data from contacts and add it to the message. This
                                                    data will be visible on message reports.</p>

                                            </div>
                                        </div>
                                        <div class="row gap-2 mt-4">
                                            <div class="col-md-5">
                                                <select class="form-select" id="validationTooltip04" required="">
                                                    <option selected="" disabled="" value="">Select data payload or
                                                        start typing
                                                    </option>
                                                    <option>externalled</option>
                                                    <option>name</option>
                                                    <option>notes</option>
                                                    <option>region</option>
                                                    <option>country</option>
                                                    <option>segment</option>
                                                    <option>accountManager</option>
                                                    <option>customerStage</option>
                                                </select>
                                                <div class="invalid-tooltip">Please select a valid state.</div>
                                            </div>
                                            <!-- <div class="col-md-5">
                                                <form>
                                                    <input class="some_class_name" name="input-custom-dropdown"
                                                        placeholder="write some tags"
                                                        value="tivo, roxo, sheltos, viho, zeta, koho">
                                                </form>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body accordion-border icons-accordion">
                        <div class="accordion dark-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header border-bottom" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed gap-2 bg-light-light active txt-primary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        <i class="svg-wrapper" data-feather="check-square"></i>
                                        Advanced settings <br>
                                        <!-- Set message sending speed and validity period to optimize your message
                                        delivery. -->
                                        <i class="svg-color" data-feather="chevron-down"></i>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <div class="row gap-2">
                                            <div class="col-md-8">
                                                <h4>Message sending speed</h4>
                                                <p class="text-muted">Limit the number of messages sent out over time.
                                                    Set the speed that your customer support can handle to prevent
                                                    crashes.</p>

                                            </div>
                                        </div>
                                        <div class="row gap-2 mt-4">
                                            <div class="col-md-4">
                                                <label class="form-label" for="validationCustom04">Time unit</label>
                                                <select class="form-select" id="validationTooltip04" required="">
                                                    <option selected="" disabled="" value="">-- Select speed unit --
                                                    </option>
                                                    <option>Select one</option>
                                                    <option>Per minute</option>
                                                    <option>Per Hour</option>
                                                    <option>Per day</option>
                                                </select>
                                                <div class="invalid-tooltip">Please select a valid state.</div>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="numberOfMessages">Number of
                                                    messages</label>
                                                <input class="form-control" id="numberOfMessages" type="number"
                                                    placeholder="Enter number" required="">
                                                <div class="invalid-feedback">Please enter your valid </div>
                                                <div class="valid-feedback">Looks's Good!</div>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row gap-2">
                                            <div class="col-md-8">
                                                <h4>Message sending speed</h4>
                                                <p class="text-muted">Limit the number of messages sent out over time.
                                                    Set the speed that your customer support can handle to prevent
                                                    crashes.</p>

                                            </div>
                                        </div>
                                        <div class="row gap-2 mt-4">
                                            <div class="col-md-4">
                                                <label class="form-label" for="period">Period</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" id="validationCustom02"
                                                        required>
                                                    <span class="input-group-text list-light-white">Hours</span>
                                                    <div class="invalid-feedback">Please enter your valid </div>
                                                    <div class="valid-feedback">Looks's Good!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row gap-2 mt-4">
                                            <div class="col-md-12">
                                                <div class="d-flex mb-2">
                                                    <div class="text-end icon-state switch-outline">
                                                        <label class="switch mb-0">
                                                            <input type="checkbox" checked=""
                                                                id="flexRadioDefault11"><span
                                                                class="switch-state bg-success"></span>
                                                        </label>
                                                    </div>
                                                    <label class="col-form-label m-l-10" for="flexRadioDefault11">
                                                        Call retry</label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>Answered call options</h4>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="d-flex mb-2">
                                                    <div class="text-end icon-state switch-outline">
                                                        <label class="switch mb-0">
                                                            <input type="checkbox" checked=""
                                                                id="flexRadioDefault11"><span
                                                                class="switch-state bg-success"></span>
                                                        </label>
                                                    </div>
                                                    <label class="col-form-label m-l-10" for="flexRadioDefault11">Record
                                                        call</label>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="text-end icon-state switch-outline">
                                                        <label class="switch mb-0">
                                                            <input type="checkbox" id="flexRadioDefault12"><span
                                                                class="switch-state bg-success"></span>
                                                        </label>
                                                    </div>
                                                    <label class="col-form-label m-l-10" for="flexRadioDefault12">Detect
                                                        answering machine</label>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="text-end icon-state switch-outline">
                                                        <label class="switch mb-0">
                                                            <input type="checkbox" id="flexRadioDefault12"><span
                                                                class="switch-state bg-success"></span>
                                                        </label>
                                                    </div>
                                                    <label class="col-form-label m-l-10" for="flexRadioDefault12">Pause
                                                        and call duration</label>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <div class="text-end icon-state switch-outline">
                                                        <label class="switch mb-0">
                                                            <input type="checkbox" id="flexRadioDefault12"><span
                                                                class="switch-state bg-success"></span>
                                                        </label>
                                                    </div>
                                                    <label class="col-form-label m-l-10"
                                                        for="flexRadioDefault12">Interaction codes (DTMF)</label>
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

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



<?php include_once 'include/footer.php' ?>