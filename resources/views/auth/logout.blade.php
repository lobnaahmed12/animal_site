<!DOCTYPE html>
<html lang="ar"> <!-- تغيير اللغة إلى العربية -->
    <head>
        <meta charset="utf-8" />
        <title>تسجيل الخروج</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="قالب إدارة متكامل يمكن استخدامه لبناء أنظمة مثل CRM أو CMS." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- أيقونة الموقع -->
        <link rel="shortcut icon" href="{{url('assets/dashboard/images/favicon.ico')}}">

        <!-- ملفات CSS الخاصة بالتطبيق -->
        <link href="{{url('assets/dashboard/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{url('assets/dashboard/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{url('assets/dashboard/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{url('assets/dashboard/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- أيقونات -->
        <link href="{{url('assets/dashboard/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body class="loading authentication-bg authentication-bg-pattern" style="background: linear-gradient(90deg, #6c757d 0%, #444 100%);">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto logout-icon">
                                    <div class="auth-logo">
                                        <a href="{{route('home')}}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{url('cuidar_files/logo.png')}}" alt="الشعار" height="40">
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <div class="mt-4">
                                        <div class="logout-checkmark">
                                            <!-- علامة صح -->
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                <circle class="path circle" fill="none" stroke="#4bd396" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                <polyline class="path check" fill="none" stroke="#4bd396" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                            </svg>
                                        </div>
                                    </div>

                                    <h3>نراك قريباً!</h3>

                                    <p class="text-muted">لقد قمت بتسجيل الخروج بنجاح من النظام.</p>
                                </div>

                            </div> <!-- نهاية محتوى الكارت -->
                        </div>
                        <!-- نهاية الكارت -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">
                                    الرجوع إلى شاشة
                                    <a href="{{route('login')}}" class="text-white ml-1">
                                        <b>تسجيل الدخول</b>
                                    </a>
                                </p>
                            </div> <!-- نهاية العمود -->
                        </div>
                        <!-- نهاية الصف -->

                    </div> <!-- نهاية العمود -->
                </div>
                <!-- نهاية الصف -->
            </div>
            <!-- نهاية الحاوية -->
        </div>
        <!-- نهاية الصفحة -->


        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script>
            تم التطوير بواسطة <a href="#" target="_blank" class="text-white-50">بيت كير</a>
        </footer>

        <!-- ملفات الجافاسكريبت الخاصة بالمزود -->
        <script src="{{url('assets/dashboard/js/vendor.min.js')}}"></script>

        <script>
            // إعادة التوجيه إلى الصفحة الرئيسية بعد 5 ثوانٍ
            setTimeout(function () {
                window.location.href= "{{route('home')}}"
            }, 5000);
        </script>

        <!-- ملفات الجافاسكريبت الخاصة بالتطبيق -->
        <script src="{{url('assets/dashboard/js/app.min.js')}}"></script>

    </body>
</html>
