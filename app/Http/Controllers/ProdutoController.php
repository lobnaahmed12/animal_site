<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
        /**
      * Create a new controller instance.
      *
      * @return void
      */

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          if(Auth::check()){
             $produtos = Produto::all();
             $low_stock = [];
             foreach($produtos as $p){
                 if(($p->produto_quantidade)<=3){

                    $low_stock[] = [
                        'id'=> $p->id,
                        'nome' => $p->produto_nome,
                        'quantidade' =>$p->produto_quantidade
                    ];
                 };
             }
             (json_encode($low_stock,true));
             return view('dashboard/dash-produto', compact('produtos'))->with('json',$low_stock);

          }
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = new Produto();
        $produtos->produto_nome = $request->input('produto_nome');
        $produtos->produto_valor = $request->input('produto_valor');
        $produtos->produto_descricao = $request->input('produto_descricao');
        $produtos->produto_quantidade = $request->input('produto_quantidade');
        if ($request->hasFile('produto_imagem')) {
            // توليد اسم فريد للصورة
            $imageName = time() . '.' . $request->produto_imagem->extension();
            // حفظ الصورة في المجلد العام 'public/images'
            $request->produto_imagem->move(public_path('images'), $imageName);
            // حفظ اسم الصورة في قاعدة البيانات
            $produtos->produto_imagem = $imageName;
        }
        $produtos->save();

        return redirect(route('produtos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()){
        $produtoId = Produto::find($id);
        return view('dashboard/dash-produtoEdit', compact('produtoId'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // العثور على المنتج بناءً على الـ ID
        $produtos = Produto::find($id);

        // التحقق من وجود المنتج
        if (!$produtos) {
            return redirect('produtos')->with('error', 'المنتج غير موجود');
        }

        // تحديث البيانات الخاصة بالمنتج
        $produtos->produto_nome = $request->input('produto_nome');
        $produtos->produto_valor = $request->input('produto_valor');
        $produtos->produto_descricao = $request->input('produto_descricao');
        $produtos->produto_quantidade = $request->input('produto_quantidade');

        // التحقق إذا كان هناك صورة جديدة
        if ($request->hasFile('produto_imagem')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($produtos->produto_imagem && file_exists(public_path('images/' . $produtos->produto_imagem))) {
                unlink(public_path('images/' . $produtos->produto_imagem));
            }

            // حفظ الصورة الجديدة
            $imageName = time() . '.' . $request->produto_imagem->extension();
            $request->produto_imagem->move(public_path('images'), $imageName);

            // حفظ اسم الصورة في قاعدة البيانات
            $produtos->produto_imagem = $imageName;
        }

        // حفظ التغييرات
        $produtos->save();

        // إعادة التوجيه إلى صفحة المنتجات مع رسالة نجاح
        return redirect('produtos')->with('success', 'تم تعديل المنتج بنجاح');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produtos = Produto::find($id);

        try{
        $produtos->delete();
        }catch(\Exception $e){
            if( $e->errorInfo[1] == 1451){
            $e->errorInfo[2] = 'Existe um procedimento que utiliza este produto!';
            return redirect(route('produtos.index'))->withErrors(['message1'=>$e->errorInfo[2]]);}
        }
        return redirect(route('produtos.index'));
    }
}
