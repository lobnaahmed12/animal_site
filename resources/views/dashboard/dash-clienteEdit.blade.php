@extends('layouts.dashboard')
@section('title', 'العملاء')
@section('dash-body')
           <!-- ============================================================== -->
            <!-- بداية محتوى الصفحة هنا -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- بداية المحتوى-->
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
                        <link href="{{url('assets/dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                        <link href="{{url('assets/dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                        <link href="{{url('assets/dashboard/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                        <link href="{{url('assets/dashboard/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                        <script src="{{url('assets/dashboard/libs/pdfmake/build/pdfmake.min.js')}}"></script>
                        <script src="{{url('assets/dashboard/libs/pdfmake/build/vfs_fonts.js')}}"></script>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
                        crossorigin="anonymous"></script>

                        <div class="card-body">
                        <div class="form-group">

                            <form role="form" action="{{ route('clientes.update', $clienteId->id) }}" method="POST" enctype="multipart/form-data" id="formEditcliente" autocomplete="on" >
                                @method('PUT')
                                @csrf
                                    <div class="column">
                                    <div class="col-md-12 col-12">
                                            <h4>تعديل العميل</h4>
                                            <input type="hidden" name="status" value="نشط">
                                            <div class="col-md-3 d-flex justify-content-between">
                                                <div class="form-check mr-3 ml-2 mt-1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{isset($clienteId->cpf) ? 'checked' : '' }} >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    CPF
                                                </label>
                                                </div>
                                                <div class="form-check mr-5 mt-1">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  {{isset($clienteId->cnpj) ? 'checked' : '' }} >
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        CNPJ
                                                    </label>
                                                </div>
                                                <div class="" id="cpf" >
                                                <input type="text" class="form-control cpf" name="cpf" placeholder="___.___.___-__" value="{{isset($clienteId->cpf) ? $clienteId->cpf : '' }}"  >
                                                </div>
                                                <div class="" id="cnpj" >
                                                <input type="text" class="form-control cnpj" name="cnpj" placeholder="__.___.___/____-__" value="{{isset($clienteId->cnpj) ? $clienteId->cnpj : '' }}"  >
                                                </div>
                                            </div>

                                            <div class="col-md-12 d-flex my-1">
                                                <div id="nome" class="col-md-6">
                                                    <label>الاسم</label>
                                                    <input type="text" class="form-control" name="nome" placeholder="أدخل الاسم" value="{{isset($clienteId->nome) ? $clienteId->nome : '' }}">
                                                </div>
                                                <div id="data_nascimento" class="col-md-3">
                                                    <label>تاريخ الميلاد</label>
                                                    <input type="date" class="form-control" name="data_nascimento" placeholder="أدخل تاريخ الميلاد" value="{{isset($clienteId->data_nascimento) ? $clienteId->data_nascimento : '' }}">
                                                </div>
                                                <div id="razao_social" class="col-md-6">
                                                    <label>الاسم التجاري</label>
                                                    <input type="text" class="form-control" name="razao_social" placeholder="أدخل الاسم التجاري" value="{{isset($clienteId->razao_social) ? $clienteId->razao_social : '' }}">
                                                </div>
                                                <div id="nome_fantasia" class="col-md-6">
                                                    <label>الاسم المستعار</label>
                                                    <input type="text" class="form-control" name="nome_fantasia" placeholder="أدخل الاسم المستعار" value="{{isset($clienteId->nome_fantasia) ? $clienteId->nome_fantasia : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 d-flex my-1">
                                                <div id="endereco" class="col-md-6">
                                                    <label>العنوان</label>
                                                    <input type="text" class="form-control" name="endereco" placeholder="أدخل العنوان" value="{{isset($clienteId->endereco) ? $clienteId->endereco : '' }}">
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-success my-1 mr-2" name="addCliente" value="adicionarCliente">إضافة</button>
                                            <a class="btn btn-danger my-1" id="cancelEdit" name="cancelEdit" value="cancelEdit" style="color:white;" href="{{ route('clientes.index')}}">إلغاء</a>
                                        </div>
                                    </div>
                            </form>


                            </div>



                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                <th>الرقم</th>
                                                    <th>الاسم/الاسم التجاري</th>
                                                    <th>العنوان</th>
                                                    <th>CPF/CNPJ</th>

                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr>
                                                    <td>{{$clienteId->id}}</td>
                                                    @if($clienteId->nome)
                                                        <td>{{$clienteId->nome}}</td>
                                                    @else
                                                        <td>{{$clienteId->razao_social}}</td>
                                                    @endif
                                                        <td>{{$clienteId->endereco}}</td>
                                                    @if($clienteId->cpf)
                                                        <td>{{$clienteId->cpf}}</td>
                                                    @else
                                                        <td>{{$clienteId->cnpj}}</td>
                                                    @endif
                                                    <td class="d-flex justify-content-end">
                                                    <form action="{{ route('clientes.destroy', $clienteId->id)}}" method="POST" onsubmit="return confirm('هل ترغب في حذف هذا العميل؟');">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

                                                    </form>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>

                                    </div> <!-- نهاية جسم البطاقة-->

                    </div><!--  الحاوية -->

                </div> <!-- المحتوى -->

                <!-- بداية التذييل -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-md-right justify-content-end d-none d-sm-block">
                                    <script>document.write(new Date().getFullYear())</script> - تم التطوير بواسطة <strong><a href="#" target="_blank">بيت كير</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- نهاية التذييل -->

            </div>

            <!-- ============================================================== -->
            <!-- نهاية محتوى الصفحة -->
            <!-- ============================================================== -->
            <!-- <script>
                $(document).ready(function() {
                $('#sort').DataTable( {
                    columnDefs: [
                    //"order": false,
                    { orderable: false, targets: 0 }
                    ].
                } );
            } );
            </script> -->

            <script>
                 $('#cpf').show(100).attr("required", true);
                $('#nome').show(100).attr("required", true);
                $('#data_nascimento').show(100).attr("required", true);
                $('#cnpj').hide();
                $('#razao_social').hide()
                $('#nome_fantasia').hide()

                $("#novoCliente").click(function(e){
                    e.preventDefault();
                    if($('#formEditCliente').is(':visible')){
                        $('#formEditCliente').hide(100);
                    }
                    $("#formnovoCliente").show(200);
                    $("#novoCliente").hide(100);
                });

                $("#cancelNew").click(function(e){
                        e.preventDefault();
                        $("#formnovoCliente").hide(200);
                        $("#novoCliente").show(100);

                });

                    $("#deleteTurma").click(function(e){
                        e.preventDefault();
                        $("#formEditCliente").hide();
                        $("#formnovoCliente").hide();

                });

                $(document).ready(function() {
                    if($("#flexRadioDefault2").is(':checked')){
                        console.log('checkado');
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
                    }
                    $("#flexRadioDefault1").on( "change", function() {

                        if($('#flexRadioDefault1').is(':checked')){
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
                    $("#flexRadioDefault2").on( "change", function() {
                        if($('#flexRadioDefault2').is(':checked')){

                            $('#cpf').hide();
                            $('#cpf input').removeAttr("required").val('');
                            $('#nome').hide();
                            $('#nome input').removeAttr("required").val('');
                            $('#data_nascimento').hide();
                            $('#data_nascimento input').removeAttr("required").val('');
                            $('#cnpj').show(100);
                            $('#cnpj input').attr("required", true);
                            $('#razao_social').show(100);
                            $('#razao_social input').attr("required", true);
                            $('#nome_fantasia').show(100);
                            $('#nome_fantasia input').attr("required", true);
                        }

                    });
                });
            </script>
        @endsection
