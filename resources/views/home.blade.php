<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>الرئيسية</title>

</head>

<body class="bg-gray-200">
    <div>
        <a id="back-to-top" href="#"
            class="hidden w-12 h-12 bg-green-500 p-2 fixed flex items-center justify-center right-6 bottom-6 rounded text-white z-30 hover:bg-green-600">
            <span class="material-symbols-outlined">
                arrow_upward
            </span>
        </a>
    </div>
    <header class="w-100 min-w-full fixed z-50">
        <div id="top-bar"
            class="bg-lime-600 text-white w-100 p-5 flex items-center justify-center transition-transform duration-300">
            <div class="container  mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="flex flex-row items-center gap-10 justify-between">
                    <div class="flex flex-row items-center gap-10 text-sm">
                        <div class="flex gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-map-pin">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            "المنصورة - الدقهلية"


                        </div>
                        <div class="flex gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <a href="#">mohamed@gmail.com</a>
                        </div>
                        <div class="flex gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-smartphone">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                <line x1="12" y1="18" x2="12.01" y2="18"></line>
                            </svg>
                            <a href="#">0123456789</a>
                        </div>
                    </div>
                    <div class="md:flex md:flex-nowrap md:items-stretch md:w-auto md:max-w-full">
                        <div class="flex gap-10">
                            <a href="{{ route('login') }}">لوحة التحكم </a>
                            <div class="flex gap-2">
                                <span>روابط </span>
                                <a target="_blank" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>
                                </a>
                                <a target="_blank" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                                        </rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="nav-bar"
            class="bg-lime-600/50 text-slate-500 w-100 p-5 text-white flex items-center justify-center ">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="flex items-center justify-between mx-auto max-w-screen-x gap-2">
                    <div>
                        <img src="{{ url('cuidar_files/logo.png') }}" alt="" width="20px" height="20px"
                            style="width: 140px; height: 100px;">
                    </div>
                    <div class="flex items-center content-center ">
                        <ul class="flex gap-10 text-lg font-bold items-start justify-center">
                            <li>
                                <a href="#main">
                                    الرئيسية
                                </a>
                            </li>
                            <li>
                                <a href="#about">
                                    من نحن
                                </a>
                            </li>
                            <li>
                                <a href="#tbny">
                                    التبني
                                </a>
                            </li>
                            <li>
                                <a href="#service">
                                    الخدمات
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('prod') }}">
                                    منتجاتنا
                                </a>
                            </li>
                            <li>
                                <a href="#team">
                                    فريقنا
                                </a>
                            </li>
                            <li>
                                <a href="#contact">
                                    اتصل بنا
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div>
                        {{-- <button     class="p-4 px-6 bg-lime-500 rounded hover:brightness-105">اكتشف الخدمات</button> --}}
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="min-w-screen min-h-screen z-10" id="main">
        <div class="p-0 relative">
            <img src="{{ url('cuidar_files/banner2.png') }}" class="min-w-full max-h-screen absolute top-0 left-0" />
            <div class="absolute flex flex-col z-10 left-[240px] top-64 gap-10">
                <h1 class="flex flex-col max-w-md text-white gap-10">
                    <span class="font-sans font-bold text-xl">رعاية بيطرية على أعلى مستوى</span>
                    <span class="font-sans font-black text-6xl">بننقذ، بنعالج، وبنلاقي بيت جديد لحيوانات محتاجة
                        حب</span>
                </h1>

                <div class="flex text-white items-center gap-10 font-sans font-bold">
                    <a href="#"
                        class="py-6 px-8 bg-green-700 uppercase flex flex-col items-center justify-center transition-all duration-250 hover:opacity-75 hover:transition-all hover:duration-250">
                        <span>اتصل</span>
                        <span>بنا</span>
                    </a>
                    <span class="text-lg">0100 123 4567</span>
                </div>

            </div>
        </div>
    </section>

    <main class="z-20">
        <section class="pt-[150px] pb-[250px]" id="about">
            <div class="container  mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="col-span-1">
                        <img src="{{ url('cuidar_files/home_welcome.png') }}" alt="">
                    </div>
                    <div class="col-span-1 w-100">
                        <h1 class="text-4xl lg:text-5xl font-extrabold mb-4 flex flex-col font-sans gap-2">
                            <small class="text-sm text-black">جودة وخبرة</small>
                            <span class="text-green-700">مرحبًا بكم في <span class="text-green-500">بيت
                                    كار</span></span>
                        </h1>

                        <p class="mb-6 font-sans w-10/12 text-lg font-medium">
                            نشأت مؤسسة بيت كار بهدف أن تكون كيانًا مستدامًا وقويًا يهتم برعاية الحيوانات الضالة والتي لا
                            تملك أملًا في الرعاية. نحن نؤمن بأن الحيوانات المتروكة أو التي ليس لها راعٍ قد تتسبب في
                            مشاكل صحية عامة أو حوادث مختلفة، ومن هنا جاءت فكرة تأسيس "بيت كار" حتى نكون نقطة أمان
                            للأفراد، والشركات، والجهات الحكومية في مثل هذه الحالات.
                        </p>

                        <ul class="list-inside mb-6 text-lg font-semibold py-5">
                            <li class="my-3 flex items-center"><span
                                    class="material-symbols-outlined mr-3">pets</span>نمتلك مساحة تتجاوز 3000 متر مربع
                            </li>
                            <li class="my-3 flex items-center"><span
                                    class="material-symbols-outlined mr-3">pets</span>هيكل وتجهيزات في تطور مستمر</li>
                            <li class="my-3 flex items-center"><span
                                    class="material-symbols-outlined mr-3">pets</span>فريق عمل متخصص لخدمة الحيوانات
                                طوال أيام الأسبوع</li>
                        </ul>

                        <a href="#contact"
                            class="bg-lime-800 text-white py-4 px-8 rounded-full inline-block transition duration-300 hover:brightness-110">تواصل
                            معنا الآن</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="pb-[100px] bg-lime-800">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="mx-0 rounded">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 relative -top-[150px]">

                        <!-- الكارت الأول -->
                        <div class="col-span-1 lg:col-span-1" id="tbny">
                            <div class="relative py-4 overflow-hidden">
                                <img src="{{ url('cuidar_files/cuidamos.png') }}" alt=""
                                    class="flex w-full rounded-l">
                                <div
                                    class="text-white before:rounded-l gradient-bg-green font-bold flex flex-col items-center justify-end absolute text-center top-0 left-0 bottom-8 w-full h-full z-[1] text-white pb-6 before:absolute before:content-[''] before:left-0 before:top-0 before:h-full before:w-full before:-z-[1] before:w-full before:h-full before:object-contain">
                                    <span class="material-symbols-outlined mr-3">pets</span>
                                    <h3 class="text-4xl font-extrabold font-sans my-5">إحنا بنهتم</h3>
                                    <div>عيادة بيطرية بأسعار مناسبة للكبار والصغار</div>
                                </div>
                            </div>
                        </div>

                        <!-- الكارت الثاني -->
                        <div class="col-span-1 lg:col-span-1">
                            <div class="relative py-4 overflow-hidden">
                                <img src="{{ url('cuidar_files/abrigamos.png') }}" alt=""
                                    class="flex w-full">
                                <div
                                    class="text-white gradient-bg-orange font-bold flex flex-col items-center justify-end absolute text-center top-0 left-0 bottom-8 w-full h-full z-[1] text-white pb-6 before:absolute before:content-[''] before:left-0 before:top-0 before:h-full before:w-full before:-z-[1] before:w-full before:h-full before:object-contain">
                                    <span class="material-symbols-outlined mr-3">pets</span>
                                    <h3 class="text-4xl font-extrabold font-sans my-5">إحنا بنأوي</h3>
                                    <div>مأوى خاص للحيوانات مع رعاية طبية مستمرة</div>
                                </div>
                            </div>
                        </div>

                        <!-- الكارت الثالث -->
                        <div class="col-span-1 lg:col-span-1">
                            <div class="relative py-4 overflow-hidden">
                                <img src="{{ url('cuidar_files/adote.png') }}" alt=""
                                    class="flex w-full rounded-r">
                                <div
                                    class="text-white before:rounded-r gradient-bg-blue font-bold flex flex-col items-center justify-end absolute text-center top-0 left-0 bottom-8 w-full h-full z-[1] text-white pb-6 before:absolute before:content-[''] before:left-0 before:top-0 before:h-full before:w-full before:-z-[1] before:w-full before:h-full before:object-contain">
                                    <span class="material-symbols-outlined mr-3">pets</span>
                                    <h3 class="text-4xl font-extrabold font-sans my-5">ماتشتريش! تبنّى!</h3>
                                    <div>لما تتبنى حيوان، الإحساس بيبقى مختلف تمامًا</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex items-center justify-center -mt-20 mx-20">
                    <div class="mx-auto text-center text-white text-xl">
                        <p id="mahmoud">مؤسسة بيت كارمش بتستقبل حيوانات بشكل عشوائي أو مجاني. كل الحيوانات اللي بننقذها بيكون من خلال
                            شراكات واتفاقات مع شركات وجهات حكومية بتستعين بخدماتنا علشان نساعد في تقليل مشكلات الإهمال
                            وسوء المعاملة.</p>
                        <div class="mt-20">
                            <a href="#contact"
                                class="rounded-full border-white border-2 border-solid py-3 px-6 hover:opacity-75">تواصل
                                معانا</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-[150px]">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl flex flex-col items-center"
                id="service">
                <div class="">
                    <h1
                        class="text-4xl lg:text-5xl font-extrabold mb-4 flex flex-col font-sans gap-2 items-center justify-center">
                        <small class="text-sm text-black">إزاي نقدر نساعدك؟</small>
                        <span class="text-green-700">خدمات <span class="text-green-500">بيطرية</span></span>
                    </h1>
                </div>
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 mt-10">
                    <!-- الصف الأول -->
                    <div class="bg-white px-16 py-12 rounded shadow-md">
                        <div class="flex items-center gap-4">
                            <img src="{{ url('cuidar_files/serv-veterinario.png') }}" />
                            <div>
                                <h1 class="text-2xl text-green-500 font-sans font-bold">الكشف الطبي البيطري</h1>
                                <p class="text-md font-sans font-semibold text-gray-600">عندنا دكاترة بيطريين شاطرين
                                    متواجدين طول اليوم. كل الكشوفات بتتعمل باحترافية وبأسعار في متناول الجميع.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white px-16 py-12 rounded shadow-md">
                        <div class="flex items-center gap-4">
                            <img src="{{ url('cuidar_files/serv-vacinacao.png') }}" />
                            <div>
                                <h1 class="text-2xl text-green-500 font-sans font-bold">التطعيم</h1>
                                <p class="text-md font-sans font-semibold text-gray-600">ممكن نطعم حيوانك الأليف عندنا
                                    في العيادة أو نوصل لحد عندك، زي ما تحب.</p>
                            </div>
                        </div>
                    </div>

                    <!-- الصف التاني -->
                    <div class="bg-white px-16 py-12 rounded shadow-md">
                        <div class="flex items-center gap-4">
                            <img src="{{ url('cuidar_files/serv-castracao.png') }}" />
                            <div>
                                <h1 class="text-2xl text-green-500 font-sans font-bold">التعقيم / الإخصاء</h1>
                                <p class="text-md font-sans font-semibold text-gray-600">بنقدم خدمة تعقيم للكلاب والقطط
                                    بأسعار مناسبة علشان نساعد كل الناس تهتم بحيواناتها.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white px-16 py-12 rounded shadow-md">
                        <div class="flex items-center gap-4">
                            <img src="{{ url('cuidar_files/serv-levatras.png') }}" />
                            <div>
                                <h1 class="text-2xl text-green-500 font-sans font-bold">خدمة التوصيل (الرايح جاي)</h1>
                                <p class="text-md font-sans font-semibold text-gray-600">عندنا عربية مخصوص بتيجي تاخد
                                    حيوانك الأليف من البيت للعيادة. بنقدم كمان الكشف والتطعيم في البيت. اسأل فريقنا
                                    للمزيد.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--
                <div class="mt-20">
                    <a href="#" class="rounded-full text-green-700 font-semibold border-green-700 border-2 border-solid py-4 px-8 hover:bg-green-700 hover:text-white transition duration-200">
                        شوف كل خدماتنا
                    </a>
                </div> --}}
            </div>
        </section>

        <section class="py-[250px]">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl flex flex-col items-center"
                id="team">
                <div class="">
                    <h1
                        class="text-4xl lg:text-5xl font-extrabold mb-4 flex flex-col font-sans gap-2 items-center justify-center">
                        <small class="text-sm text-black">الفريق والشركاء</small>
                        <span class="text-green-700">الناس دي هي اللي <span class="text-green-500">بتفرق</span></span>
                    </h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-10">
                    <!-- الصف الأول -->
                    <div class="bg-white px-8 py-12 rounded shadow-md">
                        <div class="flex flex-col justify-center items-center gap-4 ">
                            <img src="{{ url('cuidar_files/equipe3.jpg') }}" class="rounded" />
                            <div
                                class="flex flex-col items-center relative justify-center after:content-[''] after:absolute after:-bottom-4 after:left-[50%] after:h-[1px] after:w-10 after:bg-gray-300 after:transform after:translate-x-[-50%]">
                                <h1 class="text-2xl text-green-500 font-sans font-bold">الدكتور معاذ</h1>
                                <p class="text-md font-sans font-semibold text-gray-600">دكتور بيطري</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white px-8 py-12 rounded shadow-md">
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="{{ url('cuidar_files/equipe2.jpg') }}" class="rounded" />
                            <div
                                class="flex flex-col items-center  relative justify-center after:content-[''] after:absolute after:-bottom-4 after:left-[50%] after:h-[1px] after:w-10 after:bg-gray-300 after:transform after:translate-x-[-50%]">
                                <h1 class="text-2xl text-green-500 font-sans font-bold">الدكتورة مريم</h1>
                                <p class="text-md font-sans font-semibold text-gray-600">دكتورة بيطرية</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white px-8 py-12 rounded shadow-md">
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="{{ url('cuidar_files/equipe6.jpg') }}" class="rounded" />
                            <div
                                class="flex flex-col items-center  relative justify-center after:content-[''] after:absolute after:-bottom-4 after:left-[50%] after:h-[1px] after:w-10 after:bg-gray-300 after:transform after:translate-x-[-50%]">
                                <h1 class="text-2xl text-green-500 font-sans font-bold">دكتور حسن</h1>
                                <p class="text-md font-sans font-semibold text-gray-600">مُربي/مُعتني بالحيوانات</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="pt-[150px] pb-64 bg-lime-800 relative" id="contact">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="mx-0 rounded">
                    <div class="flex w-full gap-2  relative -top-[250px] rounded bg-gray-100">
                        <div class="flex gap-5 items-center justify-center">
                            <img src="{{ url('cuidar_files/entreemcontato.png') }}" alt=""
                                class="rounded-l">
                            <div class="flex gap-5">
                                <div
                                    class="flex items-center justify-center bg-green-700 rounded-full text-white w-24 h-24 min-w-[96px] min-h-[96px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-headphones">
                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                        <path
                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-3 ml-3">
                                    <h1 class="text-3xl text-green-700 font-sans font-bold">محتاج خدماتنا؟<span
                                            class="text-green-500"> اتصل بينا على: 0123456789</span></h1>
                                    <p class="text-md font-sans font-semibold text-gray-600">لو محتاج توضح حاجة عن
                                        خدماتنا أو شغلنا، إحنا جاهزين دايمًا نساعدك. اتكل علينا.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-20 -mt-[150px]">
                    <div class="col-span-1 lg:col-span-1">
                        <div class="flex flex-col ">
                            <h1
                                class="text-white font-sans font-bold text-2xl mb-8 relative after:absolute after:content-[''] after:-top-[20px] after:left-0 after:h-[1px] after:w-10 after:bg-gray-50">
                                عن بيت كار</h1>
                            <p class="text-gray-100 font-sans font-medium text-lg">بيت كار هي شركة هدفها تقدم خدمات
                                رعاية صحية للحيوانات وتساعد في الرعاية الاجتماعية، من خلال تقديم خدمات بيطرية عالية
                                الجودة مع التركيز على الرعاية البيطرية الشعبية وعلاج الحيوانات الضالة.</p>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-1">
                        <div class="flex flex-col ">
                            <h1
                                class="text-white font-sans font-bold text-2xl mb-8 relative after:absolute after:content-[''] after:-top-[20px] after:left-0 after:h-[1px] after:w-10 after:bg-gray-50">
                                القائمة</h1>
                            <div>
                                <ul class="text-gray-100 font-sans font-semibold flex flex-col gap-4">
                                    <li>
                                        <a href="#" class="flex items-center">
                                            <span class="material-symbols-outlined text-green-500">
                                                navigate_next
                                            </span>
                                            من نحن
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center" href="#">
                                            <span class="material-symbols-outlined text-green-500">
                                                navigate_next
                                            </span>
                                            التبني
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center" href="#">
                                            <span class="material-symbols-outlined text-green-500">
                                                navigate_next
                                            </span>
                                            الخدمات
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center" href="#">
                                            <span class="material-symbols-outlined text-green-500">
                                                navigate_next
                                            </span>
                                            المدونة
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center" href="#">
                                            <span class="material-symbols-outlined text-green-500">
                                                navigate_next
                                            </span>
                                            اتصل بنا
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-1">
                        <div class="flex flex-col ">
                            <h1
                                class="text-white font-sans font-bold text-2xl mb-8 relative after:absolute after:content-[''] after:-top-[20px] after:left-0 after:h-[1px] after:w-10 after:bg-gray-50">
                                مواعيد العمل</h1>
                            <p class="text-gray-100 font-sans font-medium text-lg">نستقبل الطوارئ للعملاء المسجلين 24
                                ساعة، وعلاج الحيوانات الأليفة في مراكزنا بيتم طوال أيام الأسبوع. مواعيد عملنا كالتالي:
                            </p>
                            <div>
                                <ul class="text-gray-100 mt-8">
                                    <li class="pb-3 flex items-center justify-between">
                                        <span class="text-green-500 font-bold">من الاثنين للجمعة:</span>
                                        <span class="border-b-2 border-dashed min-w-[135px] text-right"> صباحا الي 8
                                            مساء <span style="float: inline-end;">8</span> </span>
                                    </li>
                                    <li class="pb-3 flex items-center justify-between">
                                        <span class="text-green-500 font-bold">السبت:</span>
                                        <span class="border-b-2 border-dashed min-w-[135px] text-right"> صباحًا إلى 12
                                            ظهرًا <span style="float: inline-end;">8</span> </span>
                                    </li>
                                    <li class="pb-3 flex items-center justify-between">
                                        <span class="text-green-500 font-bold">الأحد:</span>
                                        <span class="border-b-2 border-dashed min-w-[135px] text-right">مغلق</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-20 text-white font-sans font-bold bg-lime-700 absolute bottom-0 w-full py-10">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                    <div class="relative">
                        <div class="doggo absolute bottom-2 z-[1]">
                            <img src="{{ url('cuidar_files/final_dog.png') }}" class="transform scale-150" />
                        </div>
                        <div class="pl-[300px] flex justify-between">
                            <div>
                                <span>حقوق النشر 2025 <span class="text-green-500">بيت كار</span> جميع الحقوق
                                    محفوظة.</span>
                            </div>
                            <div>
                                <span>تم التطوير بواسطة <a href="#" target="_blank" class="text-green-500">بيت
                                        كار</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main>
    <script>
        const topbar = document.getElementById("top-bar");
        const backToTopBtn = document.getElementById("back-to-top");
        window.addEventListener("scroll", function() {
            if (!topbar.classList.contains("hidden") && window.scrollY >= 80) {
                topbar.classList.add("hidden");
            } else if (topbar.classList.contains("hidden") && window.scrollY < 80) {
                topbar.classList.remove("hidden");
            }

            if (backToTopBtn.classList.contains("hidden") && window.scrollY >= 160) {
                backToTopBtn.classList.remove("hidden");
            } else if (!backToTopBtn.classList.contains("hidden") && window.scrollY < 160) {
                backToTopBtn.classList.add("hidden");
            }
        });
    </script>
</body>

</html>
