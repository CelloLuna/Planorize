<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="Layout for the head of every page" content="" />
        <meta name="Marcello" content="" />
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"/>
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="css/calendar.css">
        <link rel="stylesheet" href="css/calendar.min.css">
        <link rel="stylesheet" href="css/mystyles.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    
    <body id="page-top" class="d-flex flex-column min-vh-100">
        <!-- Topbar -->
        <nav id="nav" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow navClass">

            <!-- Page Title and Home -->
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2
                my-md-0 mw-100 navbar-search">
                <a href="index.php"><i class="fas fa-solid fa-home fa-2x iconClass"></i></a>
            </form>
            <h1 class="p-5 text-center hStyle"><?php  echo isset($pageTitle) ? $pageTitle : " "; ?></h1>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Calendar -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="calendar.php" id="alertsDropdown" role="button">
                        <i class="fas fa-solid fa-calendar-day fa-2x iconClass"></i>
                    </a>
                </li>

                <!-- Nav Item - TODO -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a
                        class="nav-link dropdown-toggle"
                        href="todo.php"
                        id="alertsDropdown"
                        role="button">
                        <i class="fas fa-solid fa-clipboard-check fa-2x iconClass"></i>
                    </a>
                </li>

                <!-- Nav Item - Reminders -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a
                        class="nav-link dropdown-toggle"
                        href="reminders.php"
                        id="messagesDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-regular fa-clock fa-2x iconClass"></i>
                    </a>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a
                        class="nav-link dropdown-toggle"
                        href="login.php"
                        id="userDropdown"
                        role="button">
                        <i class="fas fa-solid fa-user fa-2x iconClass"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div
                        class="dropdown-menu dropdown-menu-right shadow
                        animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2
                                text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2
                                text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2
                                text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a
                            class="dropdown-item"
                            href="#"
                            data-toggle="modal"
                            data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2
                                text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->