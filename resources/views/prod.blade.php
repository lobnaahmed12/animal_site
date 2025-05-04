<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Home</title>
    <style>
        .cards-list {
            z-index: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            margin: 30px auto;
            width: 300px;
            height: 300px;
            border-radius: 40px;
            box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
            cursor: pointer;
            transition: 0.4s;
        }

        .card .card_image {
            width: inherit;
            height: inherit;
            border-radius: 40px;
        }

        .card .card_image img {
            width: inherit;
            height: inherit;
            border-radius: 40px;
            object-fit: cover;
        }

        .card .card_title {
            text-align: center;
            border-radius: 0px 0px 40px 40px;
            font-family: sans-serif;
            font-weight: bold;
            font-size: 30px;
            margin-top: -80px;
            height: 40px;
        }

        .card:hover {
            transform: scale(0.9, 0.9);
            box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25),
                -5px -5px 30px 15px rgba(0, 0, 0, 0.22);
        }

        .title-white {
            color: white;
        }

        .title-black {
            color: black;
        }

        @media all and (max-width: 500px) {
            .card-list {
                /* On small screens, we are no longer using row direction but column */
                flex-direction: column;
            }
        }


        /*
.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
  background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-repeat: no-repeat;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  transition: 0.4s;
}
*/
    </style>
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
                            <a href="mailto:lucasporfirioa@gmail.com">mohamed@gmail.com</a>
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
                                <a href="{{ url('/') }}#main">الرئيسية</a>

                            </li>
                            <li>
                                <a href="{{ url('/') }}#about">
                                    من نحن
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}#tbny">
                                    التبني
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}#service">
                                    الخدمات
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('prod') }}">
                                    منتجاتنا
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}#team">
                                    فريقنا
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}#contact">
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


    <main class="z-20">

        <br>
        <br>
        <br>
        <br>
        <div class="cards-list">
            @foreach ($produtos as $produto )
            <div class="card 1">
                @if ($produto->produto_imagem)
                <div class="card_image"> <img src="{{ asset('images/' . $produto->produto_imagem) }}" /> </div>
                @endif
                <div class="card_title title-white">
                    <p style="color: #000">{{ $produto->produto_nome }}</p>
                </div>
            </div>

            @endforeach





        </div>


        <br>
        <br>
        <br>
        <br>
        <footer class="pt-[150px] pb-64 bg-lime-800 relative" id="contact">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">

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
                                        <span class="border-b-2 border-dashed min-w-[135px] text-right">8 صباحًا إلى 6
                                            مساءً</span>
                                    </li>
                                    <li class="pb-3 flex items-center justify-between">
                                        <span class="text-green-500 font-bold">السبت:</span>
                                        <span class="border-b-2 border-dashed min-w-[135px] text-right">8 صباحًا إلى 12
                                            ظهرًا</span>
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
                                <span>حقوق النشر 2023 <span class="text-green-500">بيت كار</span> جميع الحقوق
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
