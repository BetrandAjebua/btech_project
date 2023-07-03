<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="<?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/index.php') {
                            echo ('../assets/img/apple-touch-icon.png');
                        } else {
                            echo ('/assets/img/apple-touch-icon.png');
                        } ?>" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">BBM Panel</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white <?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/index.php') {
                                                    echo ('active bg-gradient-danger');
                                                } else {
                                                    echo ("inactive");
                                                }   ?> " href="/admin_panel/index.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10 fa fa-user"></i>
                    </div>
                    <span class="nav-link-text ms-1">Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  <?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/pages/donor.php') {
                                                    echo ('active bg-gradient-danger');
                                                } else {
                                                    echo ("inactive");
                                                }     ?>  " href="/admin_panel/pages/donor.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    </div>
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                    </div>
                                        <span class="nav-link-text ms-1">Donors</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  <?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/pages/patient.php') {
                                                    echo ('active bg-gradient-danger');
                                                } else {
                                                    echo ("inactive");
                                                }     ?>  " href="/admin_panel/pages/patient.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    </div>
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                    </div>
                    <span class="nav-link-text ms-1">Patients</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white <?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/pages/request.php') {
                                                    echo ('active bg-gradient-danger');
                                                } else {
                                                    echo ("inactive");
                                                }   ?>" href="/admin_panel/pages/request.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    </div>
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                    </div>
                    <span class="nav-link-text ms-1">Blood Request</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/pages/notifications.php') {
                                                    echo ('active bg-gradient-danger');
                                                } else {
                                                    echo ("inactive");
                                                }   ?>" href="/admin_panel/pages/notifications.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    </div>
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            
            <li class="nav-item mt-3">
                <hr>
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">System Action</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white <?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/pages/sign-in.php') {
                                                    echo ('active bg-gradient-danger');
                                                } else {
                                                    echo ("inactive");
                                                }   ?> " href="/admin_panel/pages/sign-in.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        
                    <i class="fa-solid fa-message-dots"></i>
                    </div>
                    <span class="nav-link-text ms-1">Donations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/pages/sign-up.php') {
                                                    echo ('active bg-gradient-danger');
                                                } else {
                                                    echo ("inactive");
                                                }   ?> " href="/admin_panel/pages/users.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        
                    <i class="fa-solid fa-message-dots"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php if ($_SERVER['REQUEST_URI'] == '/admin_panel/pages/sign-up.php') {
                                                    echo ('active bg-gradient-danger');
                                                } else {
                                                    echo ("inactive");
                                                }   ?> " href="/admin_panel/pages/sign-up.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        
                    <i class="fa-solid fa-message-dots"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Bank</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-danger mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Logout </a>
        </div>
    </div>
</aside>