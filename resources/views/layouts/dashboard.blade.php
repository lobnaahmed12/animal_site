<!DOCTYPE html>
<html lang="ar">
    <head>

        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="لوحة التحكم تم إنشاؤها بناءً على UBOLD." name="description" />
        <meta content="TaticaWeb" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- أيقونة التطبيق -->
        <link rel="shortcut icon" href="{{url('assets/dashboard/images/favicon.png')}}">

        <!-- CSS للمكونات الإضافية -->
        <link href="{{url('assets/dashboard/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/dashboard/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />

        <!-- CSS للتطبيق -->
        <link href="{{url('assets/dashboard/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{url('assets/dashboard/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{url('assets/dashboard/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{url('assets/dashboard/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
        <style>
            #datatable-buttons_info{
                display: none !important;
            }
        </style>
        <!-- أيقونات -->
        <link href="{{url('assets/dashboard/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         </head>

    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": false}'>


        <!-- بداية الصفحة -->
        <div id="wrapper">
            <!-- بداية الشريط العلوي -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name ml-1">
                                    {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- العنصر-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">أهلاً وسهلاً!</h6>
                                </div>

                                <!-- العنصر-->
                                {{-- @if(Auth::user()->id == 1 || Auth::user()->id == 2) --}}
                                <a href="{{route('register')}}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>تسجيل مستخدم جديد</span>
                                </a>
                                {{-- @endif --}}
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                       <i class="fe-log-out"></i>
                                        {{ __('تسجيل الخروج') }}
                                    </a>
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                            </div>
                        </li>

                    </ul>

                    <!-- الشعار -->
                    <div class="logo-box">
                        <a href="{{route('dashboard')}}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{url('cuidar_files/logo.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{url('cuidar_files/logo.png')}}" alt="" height="40">
                            </span>
                        </a>

                        <a href="{{route('dashboard')}}" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{url('cuidar_files/logo.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{url('cuidar_files/logo.png')}}" alt="" height="40">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- زر القوائم للموبايل -->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- نهاية زر القوائم للموبايل-->
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- نهاية الشريط العلوي -->

            <!-- ========== القائمة الجانبية ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- صندوق المستخدم -->


                    <!--- قائمة الجانبية -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">


                            <li class="menu-title mt-2">الوحدات</li>

                            <li class="menu-title mt-2">المسؤول</li>
                            <li class="menuitem-active">
                                <a href="{{route('dashboard')}}">
                                    <i data-feather="home"></i>
                                    <span> الرئيسية </span>
                                </a>
                            </li>


                            <li>
                                <a href="{{route('clientes.index')}}">
                                    <i class="icon-user"></i>
                                    <span> تسجيل العملاء </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('animais.index')}}">
                                    <i class="fas fa-paw"></i>
                                    <span> تسجيل الحيوانات </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('produtos.index')}}">
                                    <i class="mdi mdi-truck-outline"></i>
                                    <span> تسجيل المنتجات </span>
                                </a>
                            </li>

                            {{-- <li>
                                <a href="#sidebarProcedures" data-toggle="collapse">
                                    <i class="mdi mdi-stethoscope"></i>
                                    <span> الإجراءات </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarProcedures">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('procedimentos.index')}}">تسجيل إجراء جديد
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('gera-procedimento.index')}}">إنشاء إجراء
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}

                            {{-- <li>
                                <a href="#sidebarReports" data-toggle="collapse">
                                    <i data-feather="book-open"></i>
                                    <span> التقارير </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarReports">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a target="_blank" href="{{route('generate-pdf',['type'=>2])}}">كل الإجراءات حسب الشهر/العميل
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="{{route('generate-pdf',['type'=>1])}}">تقرير المنتجات
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}

                        </ul>

                    </div>
                    <!-- نهاية القائمة الجانبية -->

                    <div class="clearfix"></div>

                </div>
                <!-- نهاية القائمة الجانبية -->

            </div>
            <!-- نهاية القائمة الجانبية -->

            <!-- ========== المحتوى  ========== -->

                    @yield('dash-body')

        </div>
        <!-- نهاية الصفحة -->

        <!-- الشريط الجانبي الأيمن -->
        <div class="right-bar">
            <div data-simplebar class="h-100">

                <!-- التبويبات -->
                <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>

                <!-- نوافذ التبويبات -->

            </div> <!-- نهاية القائمة الجانبية-->
        </div>
        <!-- /الشريط الجانبي الأيمن -->

        <!-- التغطية الجانبية-->
        <div class="rightbar-overlay"></div>

        <!-- جافا سكربت للمكونات -->
        <script src="{{url('assets/dashboard/js/vendor.min.js')}}"></script>

        <!-- جافا سكربت للمكونات الإضافية-->
        <script src="{{url('assets/dashboard/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/selectize/js/standalone/selectize.min.js')}}"></script>

        <!-- جافا سكربت لتشغيل لوحة التحكم-->
        <script src="{{url('assets/dashboard/js/pages/dashboard-1.init.js')}}"></script>

        <!-- جافا سكربت للتطبيق-->
        <script src="{{url('assets/dashboard/js/app.min.js')}}"></script>

        <script src="{{url('assets/dashboard/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>

        <!-- نهاية جافا سكربت للمكونات الإضافية -->

        <!-- تهيئة جداول البيانات -->
        <script src="{{url('assets/dashboard/js/pages/datatables.init.js')}}"></script>
        <script>
            $('#sidebarReports').removeClass( "show" )
        </script>

        @if(Route::is('procedimentos.*') || Route::is('gera-procedimento.*'))
            <script>
                $('#sidebarProcedures').addClass( "show" )
            </script>
        @else
            <script>
                $('#sidebarProcedures').removeClass( "show" )
            </script>
        @endif
    </body>
</html>
