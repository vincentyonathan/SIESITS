<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang ke SIEITS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="/images/its.ico" />
    <style>
        .activity:hover #hoveritem1{
            display:none;
        }
        .activity:hover #hoveritem2{
            display: block;
        }
        .activity:hover #hovertext{
            margin-left: 2rem;
        }
        .modal {
            transition: opacity 0.25s ease;
        }
        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
        .bggaris
        {
            background-color: #BFB6B5;
        }
        .warnatulisan
        {
            color: #FE705F;
        }
        .title1
        {
            color: #414141;
        }
        .desc1
        {
            color:#848484;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="grid grid-cols-14">
            <div class="col-span-3 h-screen bg-white">
                <ul class="pt-10 flex flex-col items-center">
                    <li>
                        <button>
                            <a href="#">
                                <img src="/images/SIETS.png" alt="" class="w-40">
                            </a>
                        </button>    
                    </li>
                    <div class="py-0.3 rounded-full bggaris w-3/4"></div>
                    <li class="mt-10 w-3/4 h-10">
                        <button class="activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                            <a href="/public/admin_home.html" class="flex items-center">
                                <img src="/images/kegiatanabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/kegiatanoren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Kegiatan</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-10 w-3/4 h-10">
                        <button class="activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                            <a href="/public/admin_home.html" class="flex items-center">
                                <img src="/images/tambahabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/tambahoren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Tambah Kegiatan</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-10 w-3/4 h-10">
                        <button class="activity bg-transparent rounded-md px-2 py-2 w-full h-12 text-secondary hover:bg-primary hover:text-primary">
                            <a href="/public/admin_home.html" class="flex items-center">
                                <img src="/images/keluarabu.png" alt="" id="hoveritem1" class="relative w-8 pl-1">
                                <img src="/images/keluaroren.png" alt="" id="hoveritem2" class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Keluar</span>
                            </a>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="py-0.3 rounded-full bggaris h-fullz w-1"></div>
            
            <div class="col-span-9 flex flex-col">
                <h1 class="absolute text-secondary pt-12">Kegiatan</h1>
                <div class="rounded-sm absolute top-20 w-8/12 h-fullz bg-danger items-center z-0">
                    <div class="flex flex-wrap px-4">
                        <div class="flex flex-col my-2 px-2 w-full md:w-full lg:w-full xl:w-full">
                            <div class="flex flex-row items-center md:items-start py-4 px-4 bg-transparent overflow-hidden rounded-lg bg-cover h-landing bg-local relative h-32 md:h-32">
                                <div class="pl-6 pr-16 flex flex-col pt-2">
                                    <h2 class="title1 text-footer text-base font-semibold pt-4 md:pt-0">Mengadakan Pesta Perjamuan</h2>
                                    <span class="desc1 hidden md:block md:text-sm lg:text-base text-footer pt-2 md:pb-6 lg:pb-4">
                                    Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .
                                    </span>
                                </div>
                                <div class="flex flex-col pr-40 w-1/3 pt-2">
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">20 November 2021</p>
                                    </div>
                                    <h2 class="text-secondary ml-16 mr-16 text-sm">Hingga</h2>
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">13 Desember 2021</p>
                                    </div>
                                </div>      
                                <div class="relative mr-auto ml-auto pt-8">
                                    <button class="py-1 md:py-2 rounded-md bg-haha">
                                        <a href="#" class="px-8 md:px-16 text-xs md:text-sm text-white">Aktif</a>
                                    </button>
                                </div>                           
                            </div>
                            <div class="pt-2 px-8">
                                <div class="py-0.1 rounded-full bggaris w-full"></div>
                            </div>
                        </div>
                        <div class="flex flex-col my-2 px-2 w-full md:w-full lg:w-full xl:w-full">
                            <div class="flex flex-row items-center md:items-start py-4 px-4 bg-transparent overflow-hidden rounded-lg bg-cover h-landing bg-local relative h-32 md:h-32">
                                <div class="pl-6 pr-16 flex flex-col pt-2">
                                    <h2 class="title1 text-footer text-base font-semibold pt-4 md:pt-0">Mengadakan Pesta Perjamuan</h2>
                                    <span class="desc1 hidden md:block md:text-sm lg:text-base text-footer pt-2 md:pb-6 lg:pb-4">
                                    Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .
                                    </span>
                                </div>
                                <div class="flex flex-col pr-40 w-1/3 pt-2">
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">20 November 2021</p>
                                    </div>
                                    <h2 class="text-secondary ml-16 mr-16 text-sm">Hingga</h2>
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">13 Desember 2021</p>
                                    </div>
                                </div>      
                                <div class="relative mr-auto ml-auto pt-8">
                                    <button class="py-1 md:py-2 rounded-md bg-btn">
                                        <a href="#" class="px-8 md:px-16 text-xs md:text-sm text-white">Tutup</a>
                                    </button>
                                </div>                          
                            </div>
                            <div class="pt-2 px-8">
                                <div class="py-0.1 rounded-full bggaris w-full"></div>
                            </div>
                        </div>
                        <div class="flex flex-col my-2 px-2 w-full md:w-full lg:w-full xl:w-full">
                            <div class="flex flex-row items-center md:items-start py-4 px-4 bg-transparent overflow-hidden rounded-lg bg-cover h-landing bg-local relative h-32 md:h-32">
                                <div class="pl-6 pr-16 flex flex-col pt-2">
                                    <h2 class="title1 text-footer text-base font-semibold pt-4 md:pt-0">Mengadakan Pesta Perjamuan</h2>
                                    <span class="desc1 hidden md:block md:text-sm lg:text-base text-footer pt-2 md:pb-6 lg:pb-4">
                                    Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .
                                    </span>
                                </div>
                                <div class="flex flex-col pr-40 w-1/3 pt-2">
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">20 November 2021</p>
                                    </div>
                                    <h2 class="text-secondary ml-16 mr-16 text-sm">Hingga</h2>
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">13 Desember 2021</p>
                                    </div>
                                </div>      
                                <div class="relative mr-auto ml-auto pt-8">
                                    <button class="py-1 md:py-2 rounded-md bg-haha">
                                        <a href="#" class="px-8 md:px-16 text-xs md:text-sm text-white">Aktif</a>
                                    </button>
                                </div>                           
                            </div>
                            <div class="pt-2 px-8">
                                <div class="py-0.1 rounded-full bggaris w-full"></div>
                            </div>
                        </div>
                        <div class="flex flex-col my-2 px-2 w-full md:w-full lg:w-full xl:w-full">
                            <div class="flex flex-row items-center md:items-start py-4 px-4 bg-transparent overflow-hidden rounded-lg bg-cover h-landing bg-local relative h-32 md:h-32">
                                <div class="pl-6 pr-16 flex flex-col pt-2">
                                    <h2 class="title1 text-footer text-base font-semibold pt-4 md:pt-0">Mengadakan Pesta Perjamuan</h2>
                                    <span class="desc1 hidden md:block md:text-sm lg:text-base text-footer pt-2 md:pb-6 lg:pb-4">
                                    Duis sagittis aliquam arcu, vel cursus tellus sodales et. Quisque eu urna eget dolor ultrices vehicula nec nec dolor. Nulla porta urna vel. . .
                                    </span>
                                </div>
                                <div class="flex flex-col pr-40 w-1/3 pt-2">
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">20 November 2021</p>
                                    </div>
                                    <h2 class="text-secondary ml-16 mr-16 text-sm">Hingga</h2>
                                    <div class="flex flex-row">
                                        <img src="/images/tanggal.png" alt="" class="w-1/6 pt-1">
                                        <p class="text-sm ml-2 pt-2.5">13 Desember 2021</p>
                                    </div>
                                </div>      
                                <div class="relative mr-auto ml-auto pt-8">
                                    <button class="py-1 md:py-2 rounded-md bg-haha">
                                        <a href="#" class="px-8 md:px-16 text-xs md:text-sm text-white">Aktif</a>
                                    </button>
                                </div>                           
                            </div>
                            <div class="pt-2 px-8">
                                <div class="py-0.1 rounded-full bggaris w-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
          openmodal[i].addEventListener('click', function(event){
            event.preventDefault()
            toggleModal()
          })
        }
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
          closemodal[i].addEventListener('click', toggleModal)
        }
        document.onkeydown = function(evt) {
          evt = evt || window.event
          var isEscape = false
          if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
          } else {
            isEscape = (evt.keyCode === 27)
          }
          if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
          }
        };
        function toggleModal () {
          const body = document.querySelector('body')
          const modal = document.querySelector('.modal')
          modal.classList.toggle('opacity-0')
          modal.classList.toggle('pointer-events-none')
          body.classList.toggle('modal-active')
        }
      </script> 
</body>
</html>