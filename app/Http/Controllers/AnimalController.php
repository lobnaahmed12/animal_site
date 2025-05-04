<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalRequest;
use App\Models\Animal;
use App\Services\AnimalService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AnimalController extends Controller
{
        /**
      * Create a new controller instance.
      *
      * @return void
      */

      private $model;
      private $service;

      public function __construct(
        Animal $animal
        )
      {
        $this->model = $animal;
        $this->service = new AnimalService($this->model);
      }

     /**
      * Display a listing of the resource.
      *
      * @return Illuminate\Contracts\View\View
      */
     public function index(): View
     {
        $animals = $this->service->getAll();
        return view('dashboard/dash-animal', compact('animals'));

     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\RedirectResponse
      */
     public function create()
     {
         //
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  App\Http\Requests\AnimalRequest $request
      * @return \Illuminate\Http\RedirectResponse
      */
     public function store(AnimalRequest $request): RedirectResponse
     {
        try{
            $data = $request->all();
            if ($request->hasFile('animal_photo')) {
                // توليد اسم فريد للصورة
                $imageName = time() . '.' . $request->animal_photo->extension();
                // حفظ الصورة في المجلد العام 'public/images'
                $request->animal_photo->move(public_path('images'), $imageName);
                // حفظ اسم الصورة في قاعدة البيانات
                $data['animal_photo'] = $imageName;
                // @dd($data);
            }

            // @dd($data);
            $this->service->create($data);


        } catch (\Exception $e){
            throw $e;
        }

         return redirect(route('animais.index'));
     }

    //  /**
    //   * Show the form for editing the specified resource.
    //   *
    //   * @param  int  $id
    //   * @return Illuminate\Contracts\View\View
    //   */
     public function edit($id): View
     {
         $animalId = $this->service->find($id);
         return view('dashboard/dash-animalEdit', compact('animalId'));
     }

    //  /**
    //   * Update the specified resource in storage.
    //   *
    //   * @param  App\Http\Requests\AnimalRequest $request
    //   * @param  int  $id
    //   * @return \Illuminate\Http\RedirectResponse
    //   */
    public function update(AnimalRequest $request, $id): RedirectResponse
    {
        try {
            // الحصول على بيانات الطلب
            $data = $request->all();

            // التحقق من وجود صورة جديدة
            if ($request->hasFile('animal_photo')) {
                // توليد اسم فريد للصورة
                $imageName = time() . '.' . $request->animal_photo->extension();
                // حفظ الصورة في المجلد العام 'public/images'
                $request->animal_photo->move(public_path('images'), $imageName);
                // إضافة اسم الصورة إلى البيانات
                $data['animal_photo'] = $imageName;
            }

            // تحديث البيانات باستخدام خدمة الـ service
            $this->service->update($id, $data);

        } catch (\Exception $e) {
            throw $e;
        }

        // إعادة التوجيه إلى صفحة قائمة الحيوانات
        return redirect('animais');
    }


    //  /**
    //   * Remove the specified resource from storage.
    //   *
    //   * @param  int  $id
    //   * @return \Illuminate\Http\RedirectResponse
    //   */
     public function destroy($id): RedirectResponse
     {
         try{
            $this->service->delete($id);
         }catch(\Exception $e){
            throw $e;
        }
         return redirect(route('animais.index'));
     }
 }
