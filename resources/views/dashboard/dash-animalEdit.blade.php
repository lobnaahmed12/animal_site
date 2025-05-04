@extends('layouts.dashboard')
@section('title', 'الحيوانات')
@section('dash-body')
    <!-- ============================================================== -->
    <!-- بدء محتوى الصفحة هنا -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- بدء المحتوى-->
            <div class="container-fluid">

                <!-- بدء عنوان الصفحة -->
                <div class="row">
                    <div class="col-12">
                        <h4 class="page-title mt-4">الحيوانات</h4>
                    </div>
                </div>
                <!-- نهاية عنوان الصفحة -->

                <!-- نهاية السطر -->
                <link href="{{ url('assets/dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
                    rel="stylesheet" type="text/css" />
                <link
                    href="{{ url('assets/dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
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

                        <form role="form" action="{{ route('animais.update', $animalId->id) }}" method="POST"
                            enctype="multipart/form-data" id="formEditAnimal" autocomplete="on">
                            @method('PUT')
                            @csrf
                            <div class="column">
                                <div class="col-md-12 col-12 justify-content-center">
                                    <h4>تعديل بيانات الحيوان</h4>
                                    <div class="col-md-12 d-flex my-3">
                                        <div id="nome" class="col-md-4">
                                            <label>الاسم</label>
                                            <input required type="text" class="form-control" name="animal_nome"
                                                placeholder="أدخل اسم الحيوان"
                                                value="{{ isset($animalId->animal_nome) ? $animalId->animal_nome : '' }}">
                                        </div>
                                        <div id="chip" class="col-md-3">
                                            <label>رقم الشريحة</label>
                                            <input required type="text" class="form-control" name="chip"
                                                placeholder="أدخل رقم الشريحة"
                                                value="{{ isset($animalId->chip) ? $animalId->chip : '' }}">
                                        </div>
                                        <div id="tipo" class="col-md-3">
                                            <label>نوع الحيوان</label>
                                            <select required class='form-control select2' name='tipo'>
                                                @if ($animalId->animal_nome)
                                                    <option value="{{ isset($animalId->tipo) ? $animalId->tipo : '' }}" selected>
                                                        {{ isset($animalId->tipo) ? $animalId->tipo : 'اختر...' }}</option>
                                                @endif
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
                                    <div class="col-md-12 d-flex my-3">
                                        <div id="raca" class="col-md-4">
                                            <label>السلالة</label>
                                            <input required type="text" class="form-control" name="raca"
                                                placeholder="أدخل سلالة الحيوان"
                                                value="{{ isset($animalId->raca) ? $animalId->raca : '' }}">
                                        </div>
                                        <div id="porte" class="col-md-3">
                                            <label>الحجم</label>
                                            <input required type="text" class="form-control" name="porte"
                                                placeholder="أدخل حجم الحيوان"
                                                value="{{ isset($animalId->porte) ? $animalId->porte : '' }}">
                                        </div>
                                        <div id="porte" class="col-md-3">
                                            <label>العمر التقريبي</label>
                                            <input required type="text" class="form-control" name="idade"
                                                placeholder="مثل: 5 سنوات"
                                                value="{{ isset($animalId->idade) ? $animalId->idade : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex my-3 align-items-center">
                                        <h5 class="ml-2 mt-2">هل مات؟</h5><br>
                                        <div class="form-check mr-3 ml-2 mt-1">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                                checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                لا
                                            </label>
                                        </div>
                                        <div class="form-check mr-5 mt-1">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                                {{ isset($animalId->obito_data) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                نعم
                                            </label>
                                        </div>
                                        <div id="obito_data" class="col-md-3">
                                            <label>تاريخ الوفاة</label>
                                            <input type="date" class="form-control" name="obito_data"
                                                placeholder="أدخل تاريخ الوفاة"
                                                value="{{ isset($animalId->obito_data) ? $animalId->obito_data : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex my-3">
                                        <div class="col-md-6" id="obito_causa">
                                            <textarea style="width:470px;" type="text" class="form-control" name="obito_causa"
                                                placeholder="أدخل سبب الوفاة">{{ isset($animalId->obito_causa) ? $animalId->obito_causa : '' }}</textarea>
                                        </div>
                                    </div>

                                    <!-- حقل تعديل الصورة -->
                                    <div class="col-md-12 d-flex my-3">
                                        <div id="animal_photo" class="col-md-4">
                                            <label>صورة الحيوان</label>
                                            <input type="file" class="form-control" name="animal_photo">
                                            @if(isset($animalId->animal_photo))
                                                <img src="{{ asset('images/' . $animalId->animal_photo) }}" alt="Animal Photo" width="100">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-start">
                                        <button type="submit" class="btn btn-success my-1 mr-2" name="addAnimal"
                                            value="adicionarAnimal">تحديث</button>
                                        <a class="btn btn-danger my-1" id="cancelEdit" name="cancelEdit" value="cancelEdit"
                                            style="color:white;" href="{{ route('animais.index') }}">إلغاء</a>
                                    </div>
                                </div>
                        </form>

                    </div>

                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>الرقم</th>
                                <th>الاسم</th>
                                <th>رقم الشريحة</th>
                                <th>النوع</th>
                                <th>الحجم</th>
                                <th>السلالة</th>
                                <th>العمر</th>
                                <th>الصورة</th>
                                <th>هل مات؟</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $animalId->id }}</td>
                                <td>{{ $animalId->animal_nome }}</td>
                                <td>{{ $animalId->chip }}</td>
                                <td>{{ $animalId->tipo }}</td>
                                <td>{{ $animalId->porte }}</td>
                                <td>{{ $animalId->raca }}</td>
                                <td>{{ $animalId->idade }}</td>
                                <td>
                                    @if ($animalId->animal_photo)
                                        <img src="{{ asset('images/' . $animalId->animal_photo) }}" alt="Image"
                                            width="50" height="50">
                                    @else
                                        <span>لا توجد صورة</span>
                                    @endif
                                </td>
                                @if ($animalId->obito_data)
                                    <td><span style='font-size:20px; color:green'>&#10004;</span></td>
                                @else
                                    <td><span style='font-size:20px; color:red'>&#10006;</span></td>
                                @endif
                                <td class="d-flex justify-content-end">
                                    <a href="{{ route('animais.edit', $animalId->id) }}" class="btn btn-warning mx-1"><i
                                            class="fas fa-pencil-alt"></i></a>

                                    <form action="{{ route('animais.destroy', $animalId->id) }}" method="POST"
                                        onsubmit="return confirm('هل تريد حذف هذا الحيوان؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- نهاية body البطاقة -->

            </div><!--  container -->

        </div><!-- content -->

        <!-- بدء التذييل -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-md-right justify-content-end d-none d-sm-block">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> - تم التطوير بواسطة <strong><a href="#" target="_blank">بيت
                                    كار</a></strong>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- نهاية التذييل -->

    </div>

    </div>

    <!-- ============================================================== -->
    <!-- نهاية محتوى الصفحة -->
    <!-- ============================================================== -->
@endsection
