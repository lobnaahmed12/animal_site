@extends('layouts.dashboard')

@section('title', 'اللوحة الإدارية')

@section('dash-body')


           <!-- ============================================================== -->
            <!-- بدء محتوى الصفحة هنا -->
            <!-- ============================================================== -->
            <style>
                img[random]{
                    width: 40%;
                    float: right;
                    box-shadow: 0 0 10px 5px rgb(0,0,0,.1);
                    display: none;
                }
                .randomImg {
                    display: block!important;
                }
            </style>
            <div class="content-page">
                <div class="content">

                    <!-- بدء المحتوى-->
                    <div class="container-fluid">

                        <!-- بدء عنوان الصفحة -->
                        <div class="row">
                            <div class="col-12">
                                    <h4 class="page-title mt-4">اللوحة الإدارية</h4>
                                </div>
                            </div>
                        </div>
                        <!-- نهاية عنوان الصفحة -->


                        <!-- نهاية الصف -->
                        <link href="{{url('assets/dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/dashboard/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/dashboard/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/estilo.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{url('assets/dashboard/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{url('assets/dashboard/libs/pdfmake/build/vfs_fonts.js')}}"></script>

                    <div class="card-body">
                        <div class="apresentacao">
                            <h1 style="font-size: 25px;">مرحبًا بك، {{Auth::user()->name}} في اللوحة الإدارية لـ "بيت كار"</h1>
                            <p>هذه هي <strong>اللوحة الإدارية</strong> لدينا، هنا يمكنك اختيار الخيار الذي ترغب فيه بجانبك. <br/> اختر و نفذ المهام بسهولة التي ستساعدك في روتين عملك!</p>
                        </div>

                        <img random="1" src="{{url('assets/dashboard/images/home/1.png')}}"/>
                        <img random="2" src="{{url('assets/dashboard/images/home/2.png')}}" />
                        <img random="3" style="width: 30%;" src="{{url('assets/dashboard/images/home/3.jpg')}}"/>
                        <img random="4" src="{{url('assets/dashboard/images/home/4.png')}}"/>
                    </div> <!-- نهاية card body-->

                    </div><!--  container -->

                </div> <!-- content -->

                <!-- بدء الفوتر -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-md-right justify-content-end d-none d-sm-block">
                                    <script>document.write(new Date().getFullYear())</script> - تم تطويره بواسطة <strong><a href="#" target="_blank">بيت كار</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- نهاية الفوتر -->

            </div>

            <script>
                let random = Math.floor(Math.random() * 4 + 1)
                document.querySelector(`img[random='${random}']`).classList.add('randomImg')
            </script>


@endsection
