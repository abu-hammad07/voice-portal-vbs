<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>


<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <form class="row g-3 needs-validation custom-input" novalidate="" action="include/insert-data.php"
                method="POST" enctype="multipart/form-data">

                <div class="col-md-12">
                    <div class="card height-equal">
                        <div class="card-header">
                            <!-- <h1>Voice</h1> -->
                            <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                <div class="d-flex align-items-center">
                                    <div class="media-size-email">
                                        <!-- <i class="icon-help-alt fs-1 me-3"></i> -->
                                        <img src="assets/images/gif/voice.gif" class="w-100 h-100 p-2" alt="voice">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h1 class="f-w-600">Voice</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label" for="recipients">Recipients</label>
                                    <select class="form-select" id="recipients" name="recipients" required="">
                                        <option selected="" disabled="" value="">-- Type or select
                                            Recipients --</option>
                                        <option>Text</option>
                                        <option>Pakistan</option>
                                    </select>
                                    <div class="invalid-tooltip">Please select a valid state.</div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="sender">Sender</label>
                                    <select class="form-select" id="sender" name="sender" required="">
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
                                                    href="#my-numbers" role="tab" aria-selected="true">Test to
                                                    speech
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
                                                    <textarea class="form-control" id="speechMessage"
                                                        name="speechMessage" placeholder="Enter your message"
                                                        rows="4"></textarea>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="language">Language</label>
                                                    <select class="form-select" id="language" name="language">
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
                                                    <label class="form-label" for="voice">Voice</label>
                                                    <select class="form-select" id="voice" name="voice">
                                                        <option selected="" disabled="" value="">-- Select voice --
                                                        </option>
                                                        <option>Male Voice 1</option>
                                                        <option>Female Voice 1</option>
                                                        <option>Male Voice 2</option>
                                                    </select>
                                                    <div class="invalid-tooltip">Please select a
                                                        valid state.</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="speech-rate">Speech rate</label>
                                                    <select class="form-select" id="speech-rate" name="speechRate">
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
                                                    <input type="button" class="form-control" id="text" value="Test">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="my-request" role="tabpanel"
                                            aria-labelledby="my-requests">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="file-upload" name="uploadFile"
                                                            type="file">
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

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body accordion-border icons-accordion">
                            <div class="accordion dark-accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header border-bottom" id="panelsStayOpen-headingOne">
                                        <button
                                            class="accordion-button collapsed gap-2 bg-light-light active txt-primary"
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
                                                    <select class="form-select" id="timeZone" name="timeZone">
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
                                                            name="communicationStartDate" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="time-picker" class="form-label">End date</label>
                                                    <div class="input-group flatpicker-calender">
                                                        <input class="form-control" id="datetime-local" type="date"
                                                            name="communicationEndDate" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                            <div class="row gap-2">
                                                <div class="col-md-8">
                                                    <h4>Delivery time window</h4>
                                                </div>
                                            </div>
                                            <div class="row gap-2 mt-4">
                                                <div class="col-md-4">
                                                    <label for="datetime-local" class="form-label">Start time</label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="time-picker" type="time"
                                                            value="12:00" name="deliveryStartTime">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="time-picker" class="form-label">End time</label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="time-picker" type="time"
                                                            value="02:00" name="deliveryEndTime">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-4">
                                                    <label for="day" class="form-label">Day</label>
                                                    <select class="form-select" id="day" name="deliveryDay">
                                                        <option disabled="" selected="">Day</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                        <option value="Saturday">Saturday</option>
                                                        <option value="Sunday">Sunday</option>
                                                    </select>
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
                                    <h2 class="accordion-header border-bottom" id="panelsStayOpen-headingTwo">
                                        <button
                                            class="accordion-button collapsed gap-2 bg-light-light active txt-primary"
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
                                                                <input type="checkbox" id="enableDelivery"
                                                                    name="enableDeliveryReports"><span
                                                                    class="switch-state bg-success"></span>
                                                            </label>
                                                        </div>
                                                        <label class="col-form-label m-l-10" for="enableDelivery">Enable
                                                            delivery reports over API pull</label>
                                                    </div>
                                                    <div class="d-flex mb-2">
                                                        <div class="text-end icon-state switch-outline">
                                                            <label class="switch mb-0">
                                                                <input type="checkbox" id="pushDelivery"
                                                                    name="pushDeliveryReports"><span
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
                                                        Select additional data from contacts and add it to the message.
                                                        This
                                                        data will be visible on message reports.</p>

                                                </div>
                                            </div>
                                            <div class="row gap-2 mt-4">
                                                <div class="col-md-5">
                                                    <select class="form-select" id="validationTooltip04">
                                                        <option selected="" disabled="" value="" name="dataPayload">
                                                            Select data payload or
                                                            start typing
                                                        </option>
                                                        <option value="externalled">externalled</option>
                                                        <option value="name">name</option>
                                                        <option value="notes">notes</option>
                                                        <option value="region">region</option>
                                                        <option value="country">country</option>
                                                        <option value="segment">segment</option>
                                                        <option value="accountManager">accountManager</option>
                                                        <option value="customerStage">customerStage</option>
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
                                        <button
                                            class="accordion-button collapsed gap-2 bg-light-light active txt-primary"
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
                                                    <p class="text-muted">Limit the number of messages sent out over
                                                        time.
                                                        Set the speed that your customer support can handle to prevent
                                                        crashes.</p>

                                                </div>
                                            </div>
                                            <div class="row gap-2 mt-4">
                                                <div class="col-md-4">
                                                    <label class="form-label" for="timeUnit">Time unit</label>
                                                    <select class="form-select" id="timeUnit" name="timeUnit">
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
                                                        placeholder="Enter number" name="numberOfMessages">
                                                    <div class="invalid-feedback">Please enter your valid </div>
                                                    <div class="valid-feedback">Looks's Good!</div>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                            <div class="row gap-2">
                                                <div class="col-md-8">
                                                    <h4>Message sending speed</h4>
                                                    <p class="text-muted">Limit the number of messages sent out over
                                                        time.
                                                        Set the speed that your customer support can handle to prevent
                                                        crashes.</p>

                                                </div>
                                            </div>
                                            <div class="row gap-2 mt-4">
                                                <div class="col-md-4">
                                                    <label class="form-label" for="period">Period</label>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" id="period"
                                                            name="period">
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
                                                                <input type="checkbox" id="callRetry"
                                                                    name="callRetry"><span
                                                                    class="switch-state bg-success"></span>
                                                            </label>
                                                        </div>
                                                        <label class="col-form-label m-l-10" for="callRetry">
                                                            Call retry</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-4">
                                                <div class="col-md-4">
                                                    <label class="form-label" for="numberOfRetries">Number of
                                                        retries</label>
                                                    <select class="form-select" id="numberOfRetries">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                    <div class="invalid-tooltip">Please select a valid state.</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-6 col-12">
                                                    <label class="form-label" for="validationCustom01">Minimal retry period</label>
                                                    <input class="form-control" id="validationCustom01" type="text"
                                                        placeholder="Enter campaign title" required="">
                                                    <div class="invalid-feedback">Please enter your valid </div>
                                                    <div class="valid-feedback">
                                                        Looks's Good!</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4"></div> -->
                                                <div class="col-md-8">
                                                    <h4>Answered call options</h4>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex mb-2">
                                                        <div class="text-end icon-state switch-outline">
                                                            <label class="switch mb-0">
                                                                <input type="checkbox" id="recordCall"
                                                                    name="recordCall"><span
                                                                    class="switch-state bg-success"></span>
                                                            </label>
                                                        </div>
                                                        <label class="col-form-label m-l-10" for="recordCall">Record
                                                            call</label>
                                                    </div>
                                                    <div class="d-flex mb-2">
                                                        <div class="text-end icon-state switch-outline">
                                                            <label class="switch mb-0">
                                                                <input type="checkbox" id="detectMachine"
                                                                    name="detectAnsweringMachine"><span
                                                                    class="switch-state bg-success"></span>
                                                            </label>
                                                        </div>
                                                        <label class="col-form-label m-l-10" for="detectMachine">Detect
                                                            answering machine</label>
                                                    </div>
                                                    <div class="d-flex mb-2">
                                                        <div class="text-end icon-state switch-outline">
                                                            <label class="switch mb-0">
                                                                <input type="checkbox" id="callDuration"
                                                                    name="pauseAndCallDuration"><span
                                                                    class="switch-state bg-success"></span>
                                                            </label>
                                                        </div>
                                                        <label class="col-form-label m-l-10" for="callDuration">Pause
                                                            and call duration</label>
                                                    </div>
                                                    <div class="d-flex mb-2">
                                                        <div class="text-end icon-state switch-outline">
                                                            <label class="switch mb-0">
                                                                <input type="checkbox" id="dtmf"
                                                                    name="interactionCodesDTMF"><span
                                                                    class="switch-state bg-success"></span>
                                                            </label>
                                                        </div>
                                                        <label class="col-form-label m-l-10" for="dtmf">Interaction
                                                            codes (DTMF)</label>
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

                <div class="col-12 mb-4">
                    <div class="btn-group">
                        <button class="btn btn-primary me-2" type="submit" name="saveVoiceBroadcast">Save Voice
                            Broadcast</button>
                        <a href="broadcast.php" class="btn btn-outline-primary me-2">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



<?php include_once 'include/footer.php' ?>