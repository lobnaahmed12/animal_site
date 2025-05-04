@extends('layouts.dashboard')
@section('title', 'حيوانات')
@section('dash-body')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->


    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <h4 class="page-title mt-4">حيوانات</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <!-- end row -->
            <link href="{{ url('assets/dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <link href="{{ url('assets/dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <link href="{{ url('assets/dashboard/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <link href="{{ url('assets/dashboard/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <script src="{{ url('assets/dashboard/libs/pdfmake/build/pdfmake.min.js') }}"></script>
            <script src="{{ url('assets/dashboard/libs/pdfmake/build/vfs_fonts.js') }}"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

            <div class="card-body">
                <div class="form-group">
                    <form role="form" action="{{ route('animais.store') }}" method="POST" enctype="multipart/form-data"
                    id="formnovoAnimal" autocomplete="on" style="display: none;">
                @csrf
                <div class="column">
                    <div class="col-md-12 col-12 justify-content-center">
                        <h4>حيوان جديد</h4>

                        <!-- الحقول الأخرى -->
                        <div class="col-md-12 d-flex my-3">
                            <div id="nome" class="col-md-4">
                                <label>الاسم</label>
                                <input type="text" required class="form-control" name="animal_nome"
                                    placeholder="أدخل اسم الحيوان" value="">
                            </div>
                            <div id="chip" class="col-md-3">
                                <label>رقم الشريحة</label>
                                <input type="text" required class="form-control" name="chip"
                                    placeholder="أدخل رقم الشريحة" value="">
                            </div>
                            <div id="tipo" class="col-md-3">
                                <label>نوع الحيوان</label>
                                <select class='form-control select2' name='tipo' required>
                                    <option value="" selected>اختر...</option>
                                    <option value="قطط">قطط</option>
                                    <option value="كلاب">كلاب</option>
                                    <option value="خيول">خيول</option>
                                    <option value="ماعز">ماعز</option>
                                    <option value="ابقار">أبقار</option>
                                    <option value="طيور">طيور</option>
                                    <option value="زواحف">زواحف</option>
                                </select>
                            </div>
                        </div>

                        <!-- إضافة حقل تحميل الصورة -->
                        <div id="imagem" class="col-md-4 my-3">
                            <label>صورة الحيوان</label>
                            <input type="file" class="form-control" name="animal_photo" accept="image/*">
                        </div>

                        <!-- الحقول الأخرى الخاصة بالعمر، الحجم، وتاريخ الوفاة -->
                        <div class="col-md-12 d-flex my-3">
                            <div id="raca" class="col-md-4">
                                <label>النوع</label>
                                <input required type="text" class="form-control" name="raca"
                                    placeholder="أدخل نوع الحيوان" value="">
                            </div>
                            <div id="porte" class="col-md-3">
                                <label>الحجم</label>
                                <input required type="text" class="form-control" name="porte"
                                    placeholder="أدخل حجم الحيوان" value="">
                            </div>
                            <div id="porte" class="col-md-3">
                                <label>العمر التقريبي</label>
                                <input required type="text" class="form-control" name="idade"
                                    placeholder="مثال: 5 سنوات" value="">
                            </div>
                        </div>

                        <div class="col-md-12 d-flex my-3 align-items-center">
                            <h5 class="ml-2 mt-2">هل مات؟</h5><br>
                            <div class="form-check mr-3 ml-2 mt-1">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    لا
                                </label>
                            </div>
                            <div class="form-check mr-5 mt-1">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    نعم
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex my-3">
                            <div id="obito_data" class="col-md-4">
                                <label>تاريخ الوفاة</label>
                                <input type="date" class="form-control" name="obito_data"
                                    placeholder="أدخل تاريخ الوفاة">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex my-3">
                            <div class="col-md-3" id="obito_causa">
                                <textarea style="width:470px;" type="text" class="form-control" name="obito_causa"
                                    placeholder="أدخل سبب الوفاة"></textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start">
                            <button type="submit" class="btn btn-success my-1 mr-2" name="addAnimal"
                                value="adicionarAnimal">إضافة</button>
                            <button type="button" class="btn btn-danger my-1" id="cancelNew" name="cancelNew"
                                value="cancelNew">إلغاء</button>
                        </div>
                    </div>
                </div>
                </form>


                </div>

                <div class="">
                    <button type="button" id="novoAnimal" class="btn btn-success my-1">جديد</button>
                </div>

                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>الرقم التعريفي</th>
                            <th>الاسم</th>
                            <th>رقم الشريحة</th>
                            <th>النوع</th>
                            <th>الحجم</th>
                            <th>النوع</th>
                            <th>العمر</th>
                            <th>الصورة</th>
                            <th>مات؟</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                            <tr>
                                <td>{{ $animal->id }}</td>
                                <td>{{ $animal->animal_nome }}</td>
                                <td>{{ $animal->chip }}</td>
                                <td>{{ $animal->tipo }}</td>
                                <td>{{ $animal->porte }}</td>
                                <td>{{ $animal->raca }}</td>
                                <td>{{ preg_replace('/[^0-9]/', '', $animal->idade) }}</td>
                                <td>
                                    @if ($animal->animal_photo)
                                        <img src="{{ asset('images/' . $animal->animal_photo) }}" alt="Image"
                                            width="50" height="50">
                                    @else
                                        <span>لا توجد صورة</span>
                                    @endif
                                </td>
                                @if ($animal->obito_data)
                                    <td><span style='font-size:20px; color:green'>&#10004;</span></td>
                                @else
                                    <td><span style='font-size:20px; color:red'>&#10006;</span></td>
                                @endif

                                <td class="d-flex justify-content-end">
                                    <a href="{{ route('animais.edit', $animal->id) }}" class="btn btn-warning mx-1"><i
                                            class="fas fa-pencil-alt"></i></a>

                                    <form action="{{ route('animais.destroy', $animal->id) }}" method="POST"
                                        onsubmit="return confirm('هل ترغب في حذف هذا الحيوان؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->

        </div><!--  container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-md-right justify-content-end d-none d-sm-block">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> - تم تطويره بواسطة <strong><a href="#" target="_blank">بيت
                                كار</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    <script>
        $('#obito_data').hide();
        $('#obito_causa').hide();

        $("#novoAnimal").click(function(e) {
            e.preventDefault();
            if ($('#formEditAnimal').is(':visible')) {
                $('#formEditAnimal').hide(100);
            }
            $("#formnovoAnimal").show(200);
            $("#novoAnimal").hide(100);
        });

        $("#cancelNew").click(function(e) {
            e.preventDefault();
            $("#formnovoAnimal").hide(200);
            $("#novoAnimal").show(100);

        });

        $("#deleteAnimal").click(function(e) {
            e.preventDefault();
            $("#formEditAnimal").hide();
            $("#formnovoAnimal").hide();

        });

        $(document).ready(function() {


            $("#flexRadioDefault2").on("change", function() {

                if ($('#flexRadioDefault2').is(':checked')) {
                    console.log('aki')
                    $('#obito_data').show(100);
                    $('#obito_data input').attr("required", true);
                    var now = new Date();
                    var today = new Date().toISOString().substr(0, 10);
                    $('#obito_data input').val(today);
                    $('#obito_causa').show(100);
                    $('#obito_causa textarea').attr("required", true);
                }
            });
            $("#flexRadioDefault1").on("change", function() {

                if ($('#flexRadioDefault1').is(':checked')) {
                    console.log('aki')
                    $('#obito_data').hide(100);
                    $('#obito_data input').removeAttr("required").val('');
                    $('#obito_causa').hide(100);
                    $('#obito_causa textarea').removeAttr("required").val('');
                }
            });
        })
    </script>

    <script src="{{ url('assets/dashboard/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ url('assets/dashboard/js/pages/sweet-alerts.init.js') }}"></script>
@endsection
