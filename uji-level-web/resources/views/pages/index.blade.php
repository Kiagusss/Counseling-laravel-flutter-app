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

        <div class="teach w-full h-[750px]" style="background-color: white">
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
        <div class="faq">
            <div class="faq-title">
                <h1>FAQ</h1>
            </div>
            <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" /><label class="faq-drawer__title1" for="faq-drawer"> Apa itu aplikasi bimbingan konseling di sekolah?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </p>
                  </div>
                </div>
              </div>
              
              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-2" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer-2">Apa saja fitur yang tersedia dalam aplikasi bimbingan konseling di sekolah?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </p>
                  </div>
                </div>
              </div>
              
              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-3" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer-3">Apa manfaat menggunakan aplikasi bimbingan konseling di sekolah?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.            
                    </p>
                  </div>
                </div>
              </div>
              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-4" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer-4"> Apa kendala yang dapat dihadapi dalam penggunaan aplikasi bimbingan konseling di sekolah?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.            
                    </p>
                  </div>
                </div>
              </div>
              
        </div>
    

<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="lg:flex lg:items-start lg:gap-8">
        <div class="lg:flex lg:items-start">
            <a class="logo rotate-12 text-[2rem] font-bold text-white" href="#" id="navi5">t</a>
            <a class="logo rotate-[-17deg] text-[2rem] font-bold text-white" href="#" id="navi5">b</a>
            <a class="logo rotate-[17deg] ml-[-2px] text-[2rem] font-bold text-white" href="#" id="navi5">h</a>
          </div> 
        <div
          class="mt-8 grid grid-cols-2 gap-8 lg:mt-0 lg:grid-cols-5 lg:gap-y-16"
        >
          <div class="col-span-2">
            <div>
              <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                Get the latest news!
              </h2>
  
              <p class="mt-4 text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non
                cupiditate quae nam molestias.
              </p>
            </div>
          </div>
  
          <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
            <form class="w-full">
              <label for="UserEmail" class="sr-only"> Email </label>
  
              <div
                class="border border-gray-100 p-2 focus-within:ring dark:border-gray-800 sm:flex sm:items-center sm:gap-4"
              >
                <input
                  type="email"
                  id="UserEmail"
                  placeholder="john@rhcp.com"
                  class="w-full border-none focus:border-transparent focus:ring-transparent dark:bg-gray-900 dark:text-white sm:text-sm"
                />
  
                <button
                  class="mt-1 w-full bg-teal-500 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white transition-none hover:bg-teal-600 sm:mt-0 sm:w-auto sm:shrink-0"
                >
                  Sign Up
                </button>
              </div>
            </form>
          </div>
  
          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900 dark:text-white">Services</p>
  
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  1on1 Coaching
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Company Review
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Accounts Review
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  HR Consulting
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  SEO Optimisation
                </a>
              </li>
            </ul>
          </div>
  
          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900 dark:text-white">Company</p>
  
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  About
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Meet the Team
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Accounts Review
                </a>
              </li>
            </ul>
          </div>
  
          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900 dark:text-white">Helpful Links</p>
  
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Contact
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  FAQs
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Live Chat
                </a>
              </li>
            </ul>
          </div>
  
          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900 dark:text-white">Legal</p>
  
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Accessibility
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Returns Policy
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Refund Policy
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Hiring Statistics
                </a>
              </li>
            </ul>
          </div>
  
          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900 dark:text-white">Downloads</p>
  
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  Marketing Calendar
                </a>
              </li>
  
              <li>
                <a
                  href="#"
                  class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                >
                  SEO Infographics
                </a>
              </li>
            </ul>
          </div>
  
          <ul
            class="col-span-2 flex justify-start gap-6 lg:col-span-5 lg:justify-end"
          >
            <li>
              <a
                href="/"
                rel="noreferrer"
                target="_blank"
                class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
              >
                <span class="sr-only">Facebook</span>
  
                <svg
                  class="h-6 w-6"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
  
            <li>
              <a
                href="/"
                rel="noreferrer"
                target="_blank"
                class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
              >
                <span class="sr-only">Instagram</span>
  
                <svg
                  class="h-6 w-6"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
  
            <li>
              <a
                href="/"
                rel="noreferrer"
                target="_blank"
                class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
              >
                <span class="sr-only">Twitter</span>
  
                <svg
                  class="h-6 w-6"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                  />
                </svg>
              </a>
            </li>
  
            <li>
              <a
                href="/"
                rel="noreferrer"
                target="_blank"
                class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
              >
                <span class="sr-only">GitHub</span>
  
                <svg
                  class="h-6 w-6"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
  
            <li>
              <a
                href="/"
                rel="noreferrer"
                target="_blank"
                class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
              >
                <span class="sr-only">Dribbble</span>
  
                <svg
                  class="h-6 w-6"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
  
      <div class="mt-8 border-t border-gray-100 pt-8 dark:border-gray-800">
        <div class="sm:flex sm:justify-between">
          <p class="text-xs text-gray-500 dark:text-gray-400">
            &copy; 2022. Company Name. All rights reserved.
          </p>
  
          <ul
            class="mt-8 flex flex-wrap justify-start gap-4 text-xs sm:mt-0 lg:justify-end"
          >
            <li>
              <a
                href="#"
                class="text-gray-500 transition hover:opacity-75 dark:text-gray-400"
              >
                Terms & Conditions
              </a>
            </li>
  
            <li>
              <a
                href="#"
                class="text-gray-500 transition hover:opacity-75 dark:text-gray-400"
              >
                Privacy Policy
              </a>
            </li>
  
            <li>
              <a
                href="#"
                class="text-gray-500 transition hover:opacity-75 dark:text-gray-400"
              >
                Cookies
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

   
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
