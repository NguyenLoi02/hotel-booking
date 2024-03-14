<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('backend/vendor/fonts/circular-std/style.css" rel="stylesheet"') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <script src="{{ asset('fontend/js/jquery-3.7.1.js') }}"></script>
    <title>Admin</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="backend/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Đặt phòng</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Quản lý đặt phòng <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-finance.html" id="show_booking_room">Quản lý phòng mới đặt</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.html" id="show_booked_room">Quản lý phòng đã đặt</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-finance.html"><i class="fa fa-fw fa-user-circle"></i> Quản lý phòng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-finance.html"><i class="fa fa-fw fa-user-circle"></i> Quản lý người dùng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-finance.html"><i class="fa fa-fw fa-user-circle"></i> Quản lý công năng phòng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-finance.html"><i class="fa fa-fw fa-user-circle"></i> Quản lý vấn đề khách hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-finance.html"><i class="fa fa-fw fa-user-circle"></i> Quản lý</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-finance.html"><i class="fa fa-fw fa-user-circle"></i> Cài đặt</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content " id="row-item">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title" style="text-align: center;">Chào mừng đến với trang Admin</h2>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    
                </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <script>
        $(document).ready(function() {
            $('#show_booking_room').click(function(e) {
                e.preventDefault();
                fetchRooms('{{ route("admin_booking_room") }}');
            });
    
            $('#show_booked_room').click(function(e) {
                e.preventDefault();
                fetchRooms('{{ route("admin_booked_room") }}');
            });
    
            function fetchRooms(url) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('#row-item').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    </script>
    
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('backend/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('backend/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('backend/libs/js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('backend/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('backend/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- morris js -->
    <script src="{{ asset('backend/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/charts/morris-bundle/morris.js') }}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('backend/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/charts/c3charts/C3chartjs.js') }}"></script>
    <script src="{{ asset('backend/libs/js/dashboard-ecommerce.js') }}"></script>
</body>
 
</html>