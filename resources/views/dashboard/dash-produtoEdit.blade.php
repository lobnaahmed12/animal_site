@extends('layouts.dashboard')
@section('title', 'المنتجات')
@section('dash-body')
           <!-- ============================================================== -->
            <!-- بداية محتوى الصفحة هنا -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- بداية المحتوى-->
                    <div class="container-fluid">

                        <!-- عنوان الصفحة -->
                        <div class="row">
                            <div class="col-12">
                                    <h4 class="page-title mt-4">المنتجات</h4>
                                </div>
                            </div>
                        </div>
                        <!-- نهاية عنوان الصفحة -->


                        <!-- نهاية الصف -->
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

                            <form role="form" action="{{ route('produtos.update', $produtoId->id) }}" method="POST" enctype="multipart/form-data" id="formEditProduto" autocomplete="on">
                                @method('PUT')
                                @csrf
                                <div class="column">
                                    <div class="col-md-12 col-12 justify-content-center">
                                        <h4>تعديل المنتج</h4>
                                        <div class="col-md-12 d-flex my-3">
                                            <div id="nome" class="col-md-4">
                                                <label>اسم المنتج</label>
                                                <input type="text" required class="form-control" name="produto_nome" placeholder="أدخل اسم المنتج" value="{{isset($produtoId->produto_nome) ? $produtoId->produto_nome : '' }}">
                                            </div>
                                            <div id="chip" class="col-md-3">
                                                <label>القيمة</label>
                                                <input type="number" required class="form-control" name="produto_valor" placeholder="أدخل قيمة المنتج" min="0.00" max="100000.00" step="0.05" value="{{isset($produtoId->produto_valor) ? number_format($produtoId->produto_valor,2) : '' }}">
                                            </div>
                                            <div id="quantidade" class="col-md-4">
                                                <label>أدخل الكمية</label>
                                                <input required type="number" class="form-control" name="produto_quantidade"
                                                step="1" min="0" max="10000" placeholder="أدخل كمية المنتج" value="{{isset($produtoId->produto_quantidade) ? $produtoId->produto_quantidade : '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex my-3">
                                            <div id="tipo" class="col-md-4">
                                                <label>وصف المنتج</label>
                                                <textarea type="text" style="height:100px;" class="form-control" name="produto_descricao" placeholder="أدخل وصف المنتج">{{isset($produtoId->produto_descricao) ? $produtoId->produto_descricao : '' }}</textarea>
                                            </div>
                                        </div>

                                        <!-- حقل صورة المنتج -->
                                        <div class="col-md-4 my-3">
                                            <label>صورة المنتج</label>
                                            <input type="file" class="form-control" name="produto_imagem">
                                            @if($produtoId->produto_imagem)
                                                <img src="{{ asset('images/' . $produtoId->produto_imagem) }}" alt="Image" width="100" height="100" class="mt-2">
                                            @endif
                                        </div>

                                        <div class="d-flex justify-content-start">
                                            <button type="submit" class="btn btn-success my-1 mr-2" name="updateProduto" value="updateProduto">تحديث</button>
                                            <a class="btn btn-danger my-1" id="cancelEdit" name="cancelEdit" value="cancelEdit" style="color:white;" href="{{ route('produtos.index')}}">إلغاء</a>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            </div>

                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>معرف</th>
                                                    <th>الاسم</th>
                                                    <th>القيمة</th>
                                                    <th>الوصف</th>
                                                    <th>الكمية في المخزون</th>
                                                    <th>الصورة</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr>
                                                    <td>{{$produtoId->id}}</td>

                                                    <td>{{$produtoId->produto_nome}}</td>

                                                    <td>ر.س {{number_format($produtoId->produto_valor,2)}}</td>

                                                    <td>{{$produtoId->produto_descricao}}</td>

                                                    <td>{{$produtoId->produto_quantidade}}</td>
                                                    <td>
                                                        @if ($produtoId->produto_imagem)
                                                            <img src="{{ asset('images/' . $produtoId->produto_imagem) }}" alt="Image"
                                                                width="50" height="50">
                                                        @else
                                                            <span>لا توجد صورة</span>
                                                        @endif
                                                    </td>
                                                    <td class="d-flex justify-content-end">

                                                    <a href="{{ route('produtos.edit', $produtoId->id) }}" class="btn btn-warning mx-1" ><i class="fas fa-pencil-alt"></i></a>

                                                        <form action="{{ route('produtos.destroy', $produtoId->id)}}" method="POST"
                                                             onsubmit="return confirm('هل ترغب في حذف هذا المنتج؟');">

                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

                                                    </form>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->

                    </div><!--  container -->

                </div> <!-- content -->

                <!-- بداية الفوتر -->
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
                <!-- نهاية الفوتر -->

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


                $("#novoProduto").click(function(e){
                    e.preventDefault();
                    if($('#formEditProduto').is(':visible')){
                        $('#formEditProduto').hide(100);
                    }
                    $("#formnovoProduto").show(200);
                    $("#novoProduto").hide(100);
                });

                $("#cancelNew").click(function(e){
                        e.preventDefault();
                        $("#formnovoProduto").hide(200);
                        $("#novoProduto").show(100);

                });

                    $("#deleteProduto").click(function(e){
                        e.preventDefault();
                        $("#formEditProduto").hide();
                        $("#formnovoProduto").hide();

                });
            </script>

@endsection
