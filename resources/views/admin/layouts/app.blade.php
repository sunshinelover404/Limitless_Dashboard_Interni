<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta content="Admin Dashboard" name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <?php header("Access-Control-Allow-Origin: *"); ?>
        <title>{{ config('app.name', 'KFUEIT') }} | @yield('title')</title>
        <link rel="shortcut icon" href="https://kfueit.edu.pk/uploads/1/favicon.png">
        <link href="{{ asset('') }}assets/css/tailwind.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">

        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}assets/css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}assets/css/components.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}assets/css/colors.min.css" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->
        @yield('custom_css')


    </head>


    <body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark" >
        <div class="navbar-brand" style="padding: 5px;">
            <a href="{{ asset('') }}" class="d-inline-block" style="font-size: 25px;color: white;">
                KFUEIT Dashboard
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

            </ul>

            <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">0</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="#" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{ asset('') }}global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">

                                        <span class="text-muted">No Message</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer justify-content-center p-0">
                            <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('') }}global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                        <span>Adnan</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#"><img src="{{ asset('') }}global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold" style="text-transform: uppercase;"> Admin</div>
                                <div class="font-size-xs opacity-50">
                                    Member Since 2022
                                </div>
                            </div>

                            <div class="ml-3 align-self-center">
                                <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!-- Side Bar Menu -->
                        <li class="nav-item">
                            <a href="dashboard" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lms" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Lms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Crud</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>

                        <!-- /page kits -->
                    </ul>
                </div>
                <!-- /main navigation -->
            </div>
            <!-- /sidebar content -->
        </div>
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><a href="#" onclick="window.history.back()"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">@yield('title')</span> </h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            @yield('top_buttons')
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Admin Dashboard</span>
                        </div>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                            <div class="breadcrumb-elements-item dropdown p-0">
                                <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-database-remove"></i>
                                    Bulk Action
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(96px, -2px, 0px);">
                                    <a href="#" onclick="confirm_delete('delete_bulk')" class="dropdown-item"><i class="icon-cross2"></i> Delete Select Rows</a>
                                   </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                @yield('content')
                

            </div>
            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2014 - {{ date('Y') }}. <a href="kfueit.edu.pk">KFUEIT</a>
					</span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> ICT Department</a></li>

                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content wrapper -->

    </div>
    <!-- /page container -->


    <!-- Core JS files -->
    <script src="{{ asset('') }}global_assets/js/main/jquery.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('') }}global_assets/js/plugins/loaders/progressbar.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="{{ asset('') }}assets/js/app.js"></script>
    <script src="{{ asset('') }}global_assets/js/demo_pages/form_inputs.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/demo_pages/datatables_basic.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/demo_pages/datatables_extension_colvis.js"></script>

    <!-- Theme JS files -->
    <script src="{{ asset('') }}global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>


    <script src="{{ asset('') }}global_assets/js/demo_pages/datatables_extension_buttons_html5.js"></script>

    <script src="{{ asset('') }}global_assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/notifications/noty.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/demo_pages/extra_jgrowl_noty.js"></script>
    <script src="{{ asset('') }}global_assets/js/demo_pages/components_popups.js"></script>


    <script src="{{ asset('') }}global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/styling/switch.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/styling/uniform.min.js"></script>



    <script src="{{ asset('') }}global_assets/js/plugins/forms/inputs/inputmask.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/inputs/autosize.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/inputs/formatter.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/inputs/passy.js"></script>
    <script src="{{ asset('') }}global_assets/js/plugins/forms/inputs/maxlength.min.js"></script>
    <script src="{{ asset('') }}global_assets/js/demo_pages/form_controls_extended.js"></script>
    <script src="{{ asset('') }}global_assets/js/demo_pages/components_progress.js"></script>

    <script>
        $('.select2').select2();
        @if(Session::has('success'))
        $.jGrowl("{!! Session::get('success') !!}", {
            theme: 'alert-styled-left bg-success'
        });
        @endif
        @if(Session::has('error'))
        $.jGrowl("{!! Session::get('error') !!}", {
            theme: 'alert-styled-left bg-danger'
        });
        @endif
        @if(Session::has('info'))
        $.jGrowl("{!! Session::get('info') !!}", {
            theme: 'alert-styled-left bg-info'
        });
        @endif
        @if(Session::has('warning'))
        $.jGrowl("{!! Session::get('warning') !!}", {
            theme: 'alert-styled-left bg-warning'
        });
        @endif
    </script>
    <script>
        function checkall()
        {
            var selectall = document.getElementById("selectall");
            var checkboxes = document.getElementsByClassName("checkAll");
            for (i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = selectall.checked;
            }
        }
        function confirm_delete(form_id)
        {
            if(confirm('Do you want to delete all records?'))
            {
                var checkboxes = document.getElementsByClassName("checkAll");
                for (i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked)
                    {
                        document.getElementsByClassName(form_id)[0].submit();
                    }
                }
                $.jGrowl("No row selected", {
                    theme: 'alert-styled-left bg-danger'
                });


            }
            return false;
        }
        function confirm_dialog(url)
        {
            if(confirm('Do you want to delete this records?'))
                window.open(url,'_self');
            return false;
        }
        function confirm_delete_link()
        {
           return confirm('Do you want to delete this records?');
        }
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        $(document).ready(function() {
            var dark = $('.content');
            $(document).ajaxStart(function () {
                $(dark).block({
                    message: '<i class="icon-spinner spinner"></i>',
                    overlayCSS: {
                        backgroundColor: '#1B2024',
                        opacity: 0.50,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'none',
                        color: '#fff'
                    }
                });
            });
            $(document).ajaxComplete(function () {
                $(dark).unblock();
            });
        });
        var dataSet = [
    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
    [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
    [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
    [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
    [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
    [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
    [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
    [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
    [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
    [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
    [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
    [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
    [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
    [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
    [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
    [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
    [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
    [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
    [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
    [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
    [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
    [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
    [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
    [ "Doris Wilder", "Sales Assistant", "Sydney", "3023", "2010/09/20", "$85,600" ],
    [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
    [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
    [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
    [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
    [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
    [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
    [ "Michelle House", "Integration Specialist", "Sydney", "2769", "2011/06/02", "$95,400" ],
    [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
    [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
    [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
    [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
    [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
];
$(document).ready(function() {
    $('#table_id').DataTable( {
        data: dataSet,
        columns: [
            { title: "Name" },
            { title: "Position" },
            { title: "Office" },
            { title: "Extn." },
            { title: "Start date" },
            { title: "Salary" }
        ],
        buttons: [
            'excel'
            ]
   
    } );
} );
    </script>
    
    <!-- /theme JS files -->
        @yield('custom_js')
    </body>
</html>
