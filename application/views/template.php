<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Feb 2021 13:20:15 GMT -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Layanan Komplain Telkomsel</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.png">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/themify.css">
    <!-- icon-->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/rating.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url() ?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/responsive.css">
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        // variabel global marker
        var marker;
        
        function taruhMarker(peta, posisiTitik){
            
            if( marker ){
            // pindahkan marker
            marker.setPosition(posisiTitik);
            } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta
            });
            }
        
            // isi nilai koordinat ke form
            document.getElementById("lat").value = posisiTitik.lat();
            document.getElementById("lng").value = posisiTitik.lng();
            
        }
        
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        
        // even listner ketika peta diklik
        google.maps.event.addListener(peta, 'click', function(event) {
            taruhMarker(this, event.latLng);
        });

        }


        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
        

    </script>

</head>

<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="#">
                            <img class="img-fluid" src="<?= base_url('assets/images/logo.png') ?>" alt="">
                        </a>
                    </div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">
                        
                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10" src="<?= base_url('assets/images/dashboard/profile.jpg') ?>" alt="">
                                <div class="media-body"><span><?= ucfirst($this->fungsi->user_login()->nama) ?></span>
                                    <p class="mb-0 font-roboto"><?=$this->fungsi->user_login()->level  == 1 ? "Super Admin" : "Pelanggan" ?></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="<?= site_url('dashboard') ?>"><img src="<?= base_url('assets/images/logo.png') ?>" width="70%"alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links pb-5" id="simple-bar">
                            <li class="back-btn"><a href="<?= site_url('dashboard') ?>"><img src="<?= base_url('assets/images/logo.png') ?>"alt=""></a>
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>
                            <?php if($this->session->userdata('level') == 1) { ?>
                                <li class="sidebar-main-title">
                                    <div>
                                    <h6 >Master Data</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= site_url('user') ?>">
                                        <i data-feather="git-pull-request"></i><span>User</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= site_url('komplain/answer') ?>">
                                        <i data-feather="git-pull-request"></i><span>Answer</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= site_url('analisis') ?>">
                                        <i data-feather="git-pull-request"></i><span>Analisis</span>
                                    </a>
                                </li>
                            <?php } ?>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                <h6>Layanan</h6>
                                </div>
                            </li>    
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="<?= site_url('komplain') ?>">
                                    <i data-feather="git-pull-request"></i><span>Komplain</span>
                                </a>
                            </li>  
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="<?= site_url('grapari') ?>">
                                    <i data-feather="git-pull-request"></i><span>Grapari & Outlet</span>
                                </a>
                            </li>                          
                            <li class="sidebar-main-title">
                                <div>
                                <h6>Akun</h6>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="<?= site_url('auth/logout') ?>">
                                    <i data-feather="git-pull-request"></i><span>Logout</span>
                                </a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?php echo $contents ?>

            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © PT.Telekomunikasi Selular </p>
                    </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?= base_url() ?>assets//js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>assets//js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url() ?>assets//js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url() ?>assets//js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?= base_url() ?>assets//js/scrollbar/simplebar.js"></script>
    <script src="<?= base_url() ?>assets//js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?= base_url() ?>assets//js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?= base_url() ?>assets//js/sidebar-menu.js"></script>
    <script src="<?= base_url() ?>assets//js/notify/bootstrap-notify.min.js"></script>
    <script src="<?= base_url() ?>assets//js/dashboard/default.js"></script>
    <script src="<?= base_url() ?>assets//js/notify/index.js"></script>
    <script src="<?= base_url() ?>assets//js/datepicker/date-picker/datepicker.js"></script>
    <script src="<?= base_url() ?>assets//js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="<?= base_url() ?>assets//js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="<?= base_url() ?>assets//js/typeahead/handlebars.js"></script>
    <script src="<?= base_url() ?>assets//js/typeahead/typeahead.bundle.js"></script>
    <script src="<?= base_url() ?>assets//js/typeahead/typeahead.custom.js"></script>
    <script src="<?= base_url() ?>assets//js/typeahead-search/handlebars.js"></script>
    <script src="<?= base_url() ?>assets//js/typeahead-search/typeahead-custom.js"></script>
    <script src="<?= base_url() ?>assets//js/rating/jquery.barrating.js"></script>
    <script src="<?= base_url() ?>assets//js/rating/rating-script.js"></script>
    <script src="<?= base_url() ?>assets//js/owlcarousel/owl.carousel.js"></script>
    <script src="<?= base_url() ?>assets//js/ecommerce.js"></script>
    <script src="<?= base_url() ?>assets//js/product-list-custom.js"></script>
    <script src="<?= base_url() ?>assets//js/select2/select2.full.min.js"></script>
    <script src="<?= base_url() ?>assets//js/select2/select2-custom.js"></script>
    <script src="<?= base_url() ?>assets//js/tooltip-init.js"></script>
    <script src="<?= base_url() ?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url() ?>assets//js/script.js"></script>
    <!-- login js-->
    <!-- maps JS start-->
    <script src="<?= base_url() ?>assets//js/gmap.js"></script>
    <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Feb 2021 13:21:36 GMT -->

</html>