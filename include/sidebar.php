<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.php"><img class="img-fluid" src="./assets/images/logo/logo_light.png"
                    alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="./assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="./assets/svg/icon-sprite.svg#fill-toggle-icon"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.php"><img class="img-fluid"
                    src="./assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.php"><img class="img-fluid"
                                src="./assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <!-- <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li> -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title active" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#toggle-icon"></use>
                            </svg>
                            <span>Channels & Numbers</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="channels.php" class="">Channels</a></li>
                            <li><a href="numbers.php" class="">Numbers</a></li>
                            <li><a href="my-requests.php" class="">My requests</a></li>
                        </ul>
                    </li>
                    <!-- <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#stroke-widget"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="./assets/svg/icon-sprite.svg#fill-widget"></use>
                            </svg>
                            <span>Broadcast</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="broadcast.php">Overview</a></li>
                            <li><a href="templates.php">Templates</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title active" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="./assets/svg/icon-sprite.svg#fill-home"></use>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="index.php">Overview</a></li>
                        </ul>
                    </li> -->
                    <li class="sidebar-list">
                        <!-- <i class="fa fa-thumb-tack"></i> -->
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#stroke-widget"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="./assets/svg/icon-sprite.svg#fill-widget"></use>
                            </svg>
                            <span>Campaign Management</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="broadcast.php">Broadcast</a></li>
                            <li><a href="flows.php">Flows</a></li>
                            <li><a href="templates.php">Templates</a></li>
                            <li><a href="campaigns.php">Campaigns</a></li>
                            <li><a href="campaign-add.php">Add New Campaign</a></li>
                            <li><a href="add-simple-campaign.php">Add Simple Campaign</a></li>
                            <li><a href="campaign-clone.php">Clone Campaign</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <!-- <i class="fa fa-thumb-tack"></i> -->
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                            </svg>
                            <span>System Settings</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="global-setting.php">Global Settings</a></li>
                            <li><a href="dncr-management.php">DNCR Management</a></li>
                            <li><a href="product-management.php">Products Management</a></li>
                            <li><a href="prompt-management.php">Prompts/Audio Files Settings</a></li>
                            <li><a href="msisdn-management.php">Number/Msisdns List Settings</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <!-- <i class="fa fa-thumb-tack"></i> -->
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                            </svg>
                            <span>Reports</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="campaign-summary-report.php">campaign Summary Report</a></li>
                            <li><a href="campaign-throughput-report.php">Throughput Report</a></li>
                            <li><a href="campaign-dtmf-report.php">DTMF Collection Report</a></li>
                            <li><a href="history.php">Subscriber History</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <!-- <i class="fa fa-thumb-tack"></i> -->
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <!-- <i class="icofont icofont-users"></i> -->
                            <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                            </svg>
                            <span>User</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="users-management.php">Users</a></li>
                            <li><a href="user-add.php">Add User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->