@extends('layouts.dashboard')
@section('title', 'العملاء')
@section('dash-body')
    <!-- ============================================================== -->
    <!-- بدأ المحتوى هنا -->
    <!-- ============================================================== -->


    <div class="content-page">
        <div class="content">

            <!-- بداية المحتوى -->
            <div class="container-fluid">

                <!-- بداية عنوان الصفحة -->
                <div class="row">
                    <div class="col-12">
                        <h4 class="page-title mt-4">العملاء</h4>
                    </div>
                </div>
            </div>
            <!-- نهاية عنوان الصفحة -->

      
            <!-- نهاية السطر -->
            <link href="{{ url('assets/dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <link href="{{ url('assets/dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            {{-- <link href="{{ url('assets/dashboard/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" /> --}}
            {{-- <link href="{{ url('assets/dashboard/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" /> --}}
            <script src="{{ url('assets/dashboard/libs/pdfmake/build/pdfmake.min.js') }}"></script>
            <script src="{{ url('assets/dashboard/libs/pdfmake/build/vfs_fonts.js') }}"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

            <div class="card-body">
                @if (session()->get('error'))
                    <div class="alert alert-danger alert-dismissible show alert-estoque bg-danger" role="alert">
                        <button type="button" class="close alert-close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong class="text-light">تنبيه! {{ session()->get('error') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <form role="form" action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data"
                        id="formnovoCliente" autocomplete="on" style="display: none;">
                        @csrf
                        <div class="column">
                            <div class="col-md-12 col-12">
                                <h4>عميل جديد</h4>
                                <input type="hidden" name="status" value="نشط">
                                <div class="col-md-3 d-flex justify-content-between">
                                    <div class="form-check mr-3 ml-2 mt-1">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            رقم البطاقة
                                        </label>
                                    </div>
                                    <div class="form-check mr-5 mt-1">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            سجل التجاري
                                        </label>
                                    </div>
                                    <div class="" id="cpf">
                                        <input type="text" class="form-control cpf" name="cpf"
                                            placeholder="___.___.___-__" value="">
                                    </div>
                                    <div class="" id="cnpj">
                                        <input type="text" class="form-control cnpj" name="cnpj"
                                            placeholder="__.___.___/____-__" value="">
                                    </div>
                                </div>

                                <div class="col-md-12 d-flex my-1">
                                    <div id="nome" class="col-md-6">
                                        <label>الاسم</label>
                                        <input type="text" class="form-control" name="nome" placeholder="أدخل الاسم"
                                            value="">
                                    </div>
                                    <div id="data_nascimento" class="col-md-3">
                                        <label>تاريخ الميلاد</label>
                                        <input type="date" class="form-control" name="data_nascimento"
                                            placeholder="أدخل تاريخ الميلاد" value="">
                                    </div>
                                    <div id="razao_social" class="col-md-6">
                                        <label>الاسم التجاري</label>
                                        <input type="text" class="form-control" name="razao_social"
                                            placeholder="أدخل الاسم التجاري" value="">
                                    </div>
                                    <div id="nome_fantasia" class="col-md-6">
                                        <label>اسم الشهرة</label>
                                        <input type="text" class="form-control" name="nome_fantasia"
                                            placeholder="أدخل اسم الشهرة" value="">
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex my-1">
                                    <div id="endereco" class="col-md-6">
                                        <label>العنوان</label>
                                        <input type="text" class="form-control" name="endereco"
                                            placeholder="أدخل العنوان" value="">
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success my-1 mr-2" name="addCliente"
                                    value="adicionarCliente">إضافة</button>
                                <button type="button" class="btn btn-danger my-1" id="cancelNew" name="cancelNew"
                                    value="cancelNew">إلغاء</button>
                            </div>
                        </div>
                    </form>



                </div>

                <div class="">
                    <button type="button" id="novoCliente" class="btn btn-success my-1">جديد</button>
                </div>



                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>الاسم/الاسم التجاري</th>
                            <th>العنوان</th>
                            <th>رقم السجل /بطافة</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                @if ($cliente->nome)
                                    <td>{{ $cliente->nome }}</td>
                                @else
                                    <td>{{ $cliente->razao_social }}</td>
                                @endif
                                <td>{{ $cliente->endereco }}</td>
                                @if ($cliente->cpf)
                                    <td>{{ $cliente->cpf }}</td>
                                @else
                                    <td>{{ $cliente->cnpj }}</td>
                                @endif

                                <td class="d-flex justify-content-end">

                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning mx-1"><i
                                            class="fas fa-pencil-alt"></i></a>

                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST"
                                        onsubmit="return confirm('هل تريد حذف هذا العميل؟');">

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

            </div> <!-- نهاية بطاقة المحتوى-->

        </div><!--  الحاوية -->

    </div> <!-- المحتوى -->

    <!-- بداية الفوتر -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-md-right justify-content-end d-none d-sm-block">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> - تم التطوير بواسطة <strong><a href="#"
                                target="_blank">بيت كار</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- نهاية الفوتر -->

    </div>

    <!-- ============================================================== -->
    <!-- نهاية المحتوى -->
    <!-- ============================================================== -->


    <script>
        $('#cpf').show(100).attr("required", true);
        $('#nome').show(100).attr("required", true);
        $('#data_nascimento').show(100).attr("required", true);
        $('#cnpj').hide();
        $('#razao_social').hide()
        $('#nome_fantasia').hide()

        $("#novoCliente").click(function(e) {
            e.preventDefault();
            if ($('#formEditCliente').is(':visible')) {
                $('#formEditCliente').hide(100);
            }
            $("#formnovoCliente").show(200);
            $("#novoCliente").hide(100);
        });

        $("#cancelNew").click(function(e) {
            e.preventDefault();
            $("#formnovoCliente").hide(200);
            $("#novoCliente").show(100);

        });

        $("#deleteTurma").click(function(e) {
            e.preventDefault();
            $("#formEditCliente").hide();
            $("#formnovoCliente").hide();

        });

        $(document).ready(function() {
            $("#flexRadioDefault1").on("change", function() {

                if ($('#flexRadioDefault1').is(':checked')) {
                    console.log('aki')
                    $('#cnpj').hide()
                    $('#cnpj input').removeAttr("required").val('');
                    $('#razao_social').hide()
                    $('#razao_social input').removeAttr("required").val('');
                    $('#nome_fantasia').hide()
                    $('#nome_fantasia input').removeAttr("required").val('');
                    $('#cpf').show(100)
                    $('#cpf input').attr("required", true);
                    $('#nome').show(100)
                    $('#nome input').attr("required", true);
                    $('#data_nascimento').show(100)
                    $('#data_nascimento input').attr("required", true);
                    $('#endereco input').attr("required", true).val('');

                }
            });
            $("#flexRadioDefault2").on("change", function() {

                if ($('#flexRadioDefault2').is(':checked')) {
                    console.log('aki2')
                    $('#cpf').hide();
                    $('#cpf input').removeAttr("required").val('');
                    $('#nome').hide()
                    $('#nome input').removeAttr("required").val('');
                    $('#data_nascimento').hide()
                    $('#data_nascimento input').removeAttr("required").val('');
                    $('#cnpj').show(100);
                    $('#cnpj input').attr("required", true);
                    $('#razao_social').show(100);
                    $('#razao_social input').attr("required", true);
                    $('#nome_fantasia').show(100);
                    $('#nome_fantasia input').attr("required", true);
                    $('#endereco input').attr("required", true).val('');
                }
            });


        });


        $('#datatable-buttons').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});

// لحذف زر الطباعة:
$('#datatable-buttons').DataTable().button('.buttons-pdf').destroy();

    </script>

@endsection
