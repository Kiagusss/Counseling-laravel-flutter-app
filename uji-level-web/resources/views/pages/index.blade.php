<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav>
        <header class="header" class="nav" id="nav">
            <a class="logo rotate-12" href="#" id="navi5">t</a>
            <a class="logo rotate-[-17deg]" href="#" id="navi5">b</a>
            <a class="logo rotate-[17deg] ml-[-5px]" href="#" id="navi5">h</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn" id="menu-icon"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="#one" class="link link-theme link-arrow" id="nav-1">Get Started</a></li>
                <li><a href="#two" class="link link-theme link-arrow" id="nav-2">About Us</a></li>
                <li><a href="#three" class="link link-theme link-arrow" id="nav-3">Services</a></li>
                <li><a href="#four" class="link link-theme link-arrow" id="nav-4">FAQ</a></li>
                <li class="button-login"><a href="{{ route('login') }}"><button>Get Started</button></a></li>
            </ul>
        </header>

    </nav>


    <div class="containers pt-28">
        <div class="hero flex ml-[150px]">
            <div class="hero-left w-[600px]">
                <h1 class="font-['Darumadrop_One'] text-[80px] text-black">MENTAL HEALTH, PROVIDED FOR STUDENTS </h1>
                <h1 class="font-['Montserrat'] text-[20px] font-semibold text-black mt-6 text-justify">helping Your
                    Students to Control mental health Students, With Our Proffesional Counselor in our School. This
                    Application will make your Appointment Easier.</h1>
                <a class="group relative inline-block focus:outline-none focus:ring mt-7" href="/download">
                    <span
                        class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-yellow-300 transition-transform group-hover:translate-y-0 group-hover:translate-x-0"></span>

                    <span
                        class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold uppercase tracking-widest text-black group-active:text-opacity-75">
                        Join Now
                    </span>
                </a>
            </div>
            <div class="hero-right ml-[100px] mt-[50px]">
                <div class="top-hero-right flex">
                    <div class="container-orange">
                        <div class="orange-block w-[252px] rounded-xl h-[130px] bg-[#FF7E3E]"></div>
                        <div class="image-orange z-10 mt-[-186px] ml-[50px]">
                            <img src="{{ asset('image/girl-orange.png')}}" class="" alt="">
                        </div>
                    </div>
                    <div class="container-blue ml-[50px] rotate-[7.69deg]">
                        <div class="blue-block w-[252px] rounded-xl h-[130px]  bg-[#006CEB]"></div>
                        <div class="image-blue z-10 mt-[-188px] ml-[45px] rotate-[-8.25deg]">
                            <img src="{{ asset('image/boy-blue.png')}}" class="" alt="">
                        </div>
                    </div>
                </div>
                <div class="arrow-hero ml-[90px] flex">
                    <div class="left-arrow-hero w-[100px]">
                        <img src="{{asset('image/right-drawn-arrow.png')}}" alt="">
                    </div>
                    <div class="right-arrow-hero transform scale-x-[-1] w-[100px] ml-[150px]">
                        <img src="{{asset('image/right-drawn-arrow.png')}}" alt="">
                    </div>
                </div>
                <div class="bottom-hero-right mt-[50px] ml-[90px]">
                    <div class="container-green">
                        <div class="green-block w-[396px] rounded-xl h-[205px] bg-[#3EFFA2]"></div>
                        <div class="image-green z-10 mt-[-281px] ml-[60px]">
                            <img src="{{ asset('image/girl-green.png')}}" class="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="quotes w-full h-[360px]  mt-[220px] flex"
            style="background: linear-gradient(90deg, #E7FAF5 1.06%, rgba(224, 236, 253, 0.546875) 97.83%, rgba(254, 250, 252, 0) 100%);">
            <div class="container-kotak mt-[130px] ml-[100px]">
                <div
                    class="kotak-quotes1 w-[80px] h-[80px] bg-white rounded-xl rotate-[-10deg] justify-center flex items-center">
                    <img src="{{asset('image/console.png')}}" alt="" class="w-[50px] h-[50px]">
                </div>
                <img src="{{asset('image/bulb.png')}}" class="w-[30px] mt-[30px] ml-[30px] rotate-[-20deg]" alt="">
            </div>
            <div class="container-kotak mt-[40px] ml-[20px]">
                <div
                    class="kotak-quotes1 w-[80px] h-[80px] bg-white rounded-xl rotate-[10deg] justify-center flex items-center ml-[20px]">
                    <img src="{{asset('image/start-up.png')}}" alt="" class="w-[50px] h-[50px]">
                </div>
                <img src="{{asset('image/squiggle.png')}}" class="w-[30px] mt-[30px] ml-[30px] rotate-[-20deg]" alt="">
                <div
                    class="kotak-quotes1 w-[80px] h-[80px] bg-white rounded-xl rotate-[10deg] justify-center flex items-center ml-[10px] mt-[20px]">
                    <img src="{{asset('image/man.png')}}" alt="" class="w-[50px] h-[50px]">
                </div>
            </div>
            <div class="container-kotak mt-[40px] ml-[0px]">
                <div
                    class="kotak-quotes1 w-[80px] h-[80px] bg-white rounded-xl rotate-[10deg] justify-center flex items-center ml-[0px] mt-[80px]">
                    <img src="{{asset('image/paper-airplane.png')}}" alt="" class="w-[50px] h-[50px]">
                </div>
            </div>
            <div class="teks-quotes w-[492px] mt-[70px] ml-[150px]">
                <h1 class="font-['Montserrat'] text-center text-[50px]  text-black font-[800] ">Take Control of Your
                    Mental Well-Being</h1>
            </div>
            <div class="container-kotak mt-[150px] ml-[100px]">
                <div
                    class="kotak-quotes1 w-[80px] h-[80px] bg-white rounded-xl rotate-[-15deg] justify-center flex items-center">
                    <img src="{{asset('image/star (2).png')}}" alt="" class="w-[50px] h-[50px]">
                </div>
                <img src="{{asset('image/location.png')}}" class="w-[20px] mt-[50px] ml-[70px] rotate-[-20deg]" alt="">
            </div>
            <div class="container-kotak mt-[40px] ml-[20px]">
                <div
                    class="kotak-quotes1 w-[80px] h-[80px] bg-white rounded-xl rotate-[2deg] justify-center flex items-center">
                    <img src="{{asset('image/girl.png')}}" alt="" class="w-[50px] h-[50px]">
                </div>
                <div
                    class="kotak-quotes1 w-[80px] h-[80px] bg-white rounded-xl mt-[90px] ml-[30px]  rotate-[20deg] justify-center flex items-center">
                    <img src="{{asset('image/king.png')}}" alt="" class="w-[50px] h-[50px]">
                </div>

            </div>
            <div class="container-kotak mt-[20px] ml-[20px]">
                <img src="{{asset('image/chat-balloon.png')}}" class="w-[25px] mt-[50px] ml-[0px]" alt="">
                <div
                    class="kotak-quotes1 w-[100px] h-[100px] bg-white rounded-xl rotate-[15deg] justify-center flex items-center mt-[20px]">
                    <img src="{{asset('image/heart.png')}}" alt="" class="w-[60px] h-[60px]">
                </div>
            </div>
        </div>

        <div class="mission w-full h-[1000px]" style="background-color:#F1F3FA">
            <div class="text-center w-full pt-[30px]" style="">
                <h5 class="">Our Mission</h5>
                <h1 class="font-bold text-[50px]">Make Counseling Easier than Ever</h1>
            </div>

            <div class="hero h-[350px] w-full mt-[40px]" style="">
                <div class="udin w-full h-full flex pl-[150px] pr-[150px]">
                    <div class="left w-[750px] h-full" style="">
                        <h1 class="font-bold text-[30px]">App story</h1>
                        <p class="w-[90%] mt-[10px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
                            asperiores dolores fugiat ea obcaecati illum quo voluptatem quas nemo omnis ipsa cum culpa
                            perspiciatis tenetur veritatis temporibus numquam sint autem totam explicabo molestiae! Vero
                            iusto hic dicta incidunt sapiente rerum voluptatem, id itaque illo ea. Dicta sed nihil
                            veritatis numquam molestias eos voluptatum cumque obcaecati magnam recusandae quisquam aut
                            dolor deserunt illo, sit, nostrum temporibus suscipit alias aliquam consequatur debitis
                            dolores earum. Itaque magnam delectus, modi molestias illum quia maiores?</p>
                        <h5 class="font-bold text-[20px] ml-[250px] mt-[5px]">Layanan</h5>
                        <div class="kotak flex h-[60px] w-[90%] mt-[5px]" style="">
                            <div class="w-[60px] h-[60px] ml-[130px] rounded-[100px]"
                                style="background-color: yellowgreen"></div>
                            <div class="w-[60px] h-[60px] ml-[30px] rounded-[100px]" style="background-color: skyblue">
                            </div>
                            <div class="w-[60px] h-[60px] ml-[30px] rounded-[100px]" style="background-color: salmon">
                            </div>
                            <div class="w-[60px] h-[60px] ml-[30px] rounded-[100px]" style="background-color: plum">
                            </div>
                        </div>
                    </div>

                    <div class="left w-[550px] h-full " style="">
                        <div class="gambar overflow-hidden	 w-[80%] h-[75%] rounded-[20px] mt-[8%] ml-[10%]"
                            style="background-color: grey">
                            <img src="{{ asset('image/perpus.jpg')}}" class="" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero h-[400px] w-full mt-[40px]" style="">
                <div class="udin w-full h-full flex pl-[150px] pr-[150px]" style="">
                    <div class="left w-[700px] h-full" style="">
                        <div class="ml-[10px] w-[600px] h-[380px] shadow-md" style="background-color: white">
                            <div class="w-full h-[30px]"></div>
                            <div class="tebe w-[90%] h-[220px] ml-[30px] overflow-hidden">
                                <img src="{{ asset('image/tebe.png') }}" alt="" srcset="">
                            </div>

                            <div class="w-[90%] h-[100px] ml-[30px] mt-[10px]" style="">
                                <h1 class="font-bold text-[20px]">SMK Taruna Bhakti</h1>
                                <p class="mt-[5px]">pada tanggal 16 Juni 2004 didirikan SMK Taruna Bhakti Depok yang berada di Jalan Pekapuran Kelurahan Curug Kecamatan Cimanggis Depok.</p>
                            </div>
                        </div>
                    </div>
                    <div class="right w-[600px] h-full " style="">
                        <h1 class="font-bold text-[30px]">Where We Come From?</h1>
                        <p class="w-[500px] mt-[10px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eos doloremque nesciunt! Hic alias corrupti fuga suscipit, ab fugiat dolore ea eius, officiis, iusto dignissimos quisquam magni eveniet porro asperiores cupiditate incidunt? Ab quis dolore placeat dolor sit aliquid totam nisi autem ratione, aperiam libero cum temporibus, facere possimus odio voluptate tempore cumque fugiat recusandae nobis eos vitae esse! Assumenda fugiat totam ab neque aliquam.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="teach w-full h-[1150px]" style="background-color: white">
            <div class="text-center pt-[30px]" style="">
                <h5 class="">Our Teacher</h5>
                <h1 class="ml-[380px] font-bold text-[50px] w-[800px] h-[60px]">Meet Our Amazing Counselor Teacher</h1>
            </div>

            <div class="foto flex mt-[200px] ml-[70px] w-[90%] h-[400px] justify-around" style="">
                <div class="guru w-[20%] h-full" style="">
                    <div class="guru w-[80%] h-[80%] ml-[40px] overflow-hidden " style="">
                        <img src="{{ asset('image/21.png') }}" alt="" srcset="">
                    </div>
                    <p class="mt-[10px] w-full text-center text-[15px]">Kepala Koordinator Bimbingan Konseling Sekolah</p>
                    <h1 class="mt-[5px] w-full text-center text-[20px] font-bold">Bu Caca</h1>
                </div>

                <div class="guru w-[20%] h-full" style="">
                    <div class="guru w-[80%] h-[80%] ml-[40px] overflow-hidden " style="">
                        <img src="{{ asset('image/41.png') }}" alt="" srcset="">
                    </div>
                    <p class="mt-[10px] w-full text-center text-[15px]">Tenaga Pendidik Bimbingan Konseling</p>
                    <h1 class="mt-[5px] w-full text-center text-[20px] font-bold">Pak Gunawan</h1>
                </div>

                <div class="guru w-[20%] h-full" style="">
                    <div class="guru w-[80%] h-[80%] ml-[40px] overflow-hidden " style="">
                        <img src="{{ asset('image/53.jpg') }}" alt="" srcset="">
                    </div>
                    <p class="mt-[10px] w-full text-center text-[15px]">Tenaga Pendidik Bimbingan Konseling</p>
                    <h1 class="mt-[5px] w-full text-center text-[20px] font-bold">Bu Heni</h1>
                </div>
            </div>

            <div class="foto flex mt-[50px] ml-[70px] w-[90%] h-[400px] justify-around" style="">
                <div class="guru w-[20%] h-full" style="">
                    <div class="guru w-[80%] h-[80%] ml-[40px] overflow-hidden " style="">
                        <img src="{{ asset('image/36.png') }}" alt="" srcset="">
                    </div>
                    <p class="mt-[10px] w-full text-center text-[15px]">Tenaga Pendidik Bimbingan Konseling</p>
                    <h1 class="mt-[5px] w-full text-center text-[20px] font-bold">Bu Fika</h1>
                </div>

                <div class="guru w-[20%] h-full" style="">
                    <div class="guru w-[80%] h-[80%] ml-[40px] overflow-hidden " style="">
                        <img src="{{ asset('image/9.png') }}" alt="" srcset="">
                    </div>
                    <p class="mt-[10px] w-full text-center text-[15px]">Tenaga Pendidik Bimbingan Konseling</p>
                    <h1 class="mt-[5px] w-full text-center text-[20px] font-bold">Bu Sheila</h1>
                </div>

                <div class="guru w-[20%] h-full" style="">
                    <div class="guru w-[80%] h-[80%] ml-[40px] overflow-hidden " style="">
                        <img src="{{ asset('image/39.png') }}" alt="" srcset="">
                    </div>
                    <p class="mt-[10px] w-full text-center text-[15px]">Tenaga Pendidik Bimbingan Konseling</p>
                    <h1 class="mt-[5px] w-full text-center text-[20px] font-bold">Bu Nadia</h1>
                </div>
            </div>
        </div>

        <div class="prom flex justify-around w-full h-[500px]" style="background-color: white">
            <div class="w-[35%] h-full " style="">
                <div class="w-full h-[300px] " style="">
                    <img src="{{ asset('image/1.png') }}" style="width: " alt="" srcset="">
                </div>
            </div>
            <div class="w-[35%] h-full " style="">
                <div class="w-full h-[300px] " style="">
                    <img src="{{ asset('image/2.png') }}" style="width: " alt="" srcset="">
                </div>
            </div>
        </div>
        
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
