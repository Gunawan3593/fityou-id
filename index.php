<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css?<?= time() ?>">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700&display=swap" rel="stylesheet">
  <title>Fityou.id</title>
</head>

<body class="bg-primary dark:bg-dark">
  <!-- Header start -->
  <header class="bg-transparent w-full flex items-center z-10">
    <div class="w-full">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#home" class="block"><img class="w-14 lg:w-20" src="assets/images/logo.png?v=1" alt="logo"></a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span id="hamburger-line-top" class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span id="hamburger-line-mid" class="hamburger-line transition duration-300 ease-in-out"></span>
            <span id="hamburger-line-bottom" class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>

          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none z-30 dark:bg-dark lg:dark:bg-transparent dark:shadow-slate-500">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:group-hover:text-dark dark:text-white">Tentang Kami</a>
              </li>
              <li class="group">
                <a href="#service" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:group-hover:text-dark dark:text-white">Layanan</a>
              </li>
              <li class="group">
                <a href="https://api.whatsapp.com/send?phone=+6281238841818&text=Hallo,%20saya%20mau%20konsultasi%20mengenai%20Fityou.id" target="_blank" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white dark:group-hover:text-dark">Konsultasi</a>
              </li>
              <li class="flex items-center pl-8 mt-3 lg:mt-0">
                <div class="flex">
                  <span class="mr-2 text-sm text-dark dark:text-white">Light</span>
                  <input type="checkbox" class="hidden" id="dark-toggle" />
                  <label for="dark-toggle">
                    <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                      <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-out"></div>
                    </div>
                  </label>
                  <span class="ml-2 text-sm text-slate-500 dark:text-white"">Dark</span>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header end -->

  <!-- Hero Section start -->
  <section id="home" class="relative h-[300px] lg:h-[800px]">
    <div class="w-full h-full absolute bg-black opacity-50 z-10"></div>
    <div class="flex sm:hidden absolute right-0 top-[50%] -translate-y-[50%] flex-col gap-5 z-10">
      <!-- Facebook -->
      <a href="#" target="__blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white hover:border-primary hover:bg-primary hover:text-white">
        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <title>Facebook</title>
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
        </svg>
      </a>
      <!-- Instagram -->
      <a href="#" target="__blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white hover:border-primary hover:bg-primary hover:text-white">
        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <title>Instagram</title>
          <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
        </svg>
      </a>
      <!-- Tiktok -->
      <a href="#" target="__blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white hover:border-primary hover:bg-primary hover:text-white">
        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <title>TikTok</title>
          <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
        </svg>
      </a>
    </div>
    <div id="slider-image">
      <img class="fixed bg-cover object-cover h-[300px] lg:h-full w-full animate-slide-in-right" src="assets/images/slider-1.jpg?v=1" alt="Slider 1">
      <img class="fixed bg-cover object-cover h-[300px] lg:h-full w-full hidden" src="assets/images/slider-2.jpg?v=1" alt="Slider 2">
      <img class="fixed bg-cover object-cover h-[300px] lg:h-full w-full hidden" src="assets/images/slider-3.jpg?v=1" alt="Slider 3">
    </div>
    <div id="slider-caption">
      <p class="absolute z-20 bottom-5 text-sm px-5 text-center lg:fixed lg:right-8 lg:top-[300px] lg:max-w-md lg:text-3xl font-semibold text-secondary animate-slide-in-up">Izinkan kami membantu membuat bisnismu menjadi nomor 1</p>
      <p class="absolute z-20 bottom-5 text-sm px-5 text-center lg:fixed lg:right-8 lg:top-[300px] lg:max-w-md lg:text-3xl font-semibold text-secondary hidden">Beritahu semua orang tentang produk atau jasa yang kalian miliki lewat iklan</p>
      <p class="absolute z-20 bottom-5 text-sm px-5 text-center lg:fixed lg:right-8 lg:top-[300px] lg:max-w-md lg:text-3xl font-semibold text-secondary hidden">Optimalkan Reveneu Bisnis anda bersama kami</p>
    </div>
    <div class="top-0 pt-5 w-[100px] h-[100px] lg:w-[260px] lg:h-[170px] dark:bg-slate-600 bg-secondary absolute rounded-br-[100px] lg:px-[60px] lg:pt-[30px] lg:pb-[20px] left-0 font-bold text-sm lg:text-2xl leading-[1rem] z-20">
      <span class="block ml-10 lg:ml-20 dark:text-white">/ 03</span>
      <span class="text-3xl lg:text-7xl ml-2 text-tertiary">0<span id="current-slider">1</span></span>
      <div class="hidden lg:flex gap-10 justify-center mt-1 w-full">
        <button type="button" id="btnPrevSlider" class="text-slate-400 hover:text-tertiary">
          <svg class="fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="17.515px" viewBox="0 0 40 17.515" enable-background="new 0 0 40 17.515" xml:space="preserve">
            <polygon fill-rule="evenodd" clip-rule="evenodd" points="8.757,0 0,8.757 8.757,17.515 10.545,15.727 4.841,10.022 40,10.022 
40,7.493 4.841,7.493 10.545,1.788 " />
          </svg>
        </button>

        <button type="button" id="btnNextSlider" class="text-slate-400 hover:text-tertiary">
          <svg class="fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="17.515px" viewBox="0 0 40 17.515" enable-background="new 0 0 40 17.515" xml:space="preserve">
            <polygon fill-rule="evenodd" clip-rule="evenodd" points="31.242,0 40,8.757 31.242,17.515 29.455,15.727 35.159,10.022 0,10.022 
0,7.493 35.159,7.493 29.455,1.788 " />
          </svg>
        </button>
      </div>
    </div>
    <div class="absolute bg-white w-28 h-full hidden sm:flex z-10 dark:bg-dark">
      <div class="w-[2px] h-[600px] bg-primary absolute left-[50%] -translate-x-[50%]"></div>
      <div class="absolute bottom-5 left-[50%] -translate-x-[50%] flex flex-col gap-5">
        <!-- Facebook -->
        <a href="#" target="__blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-sky-600 text-sky-600 dark:border-white dark:text-white hover:border-primary hover:bg-primary hover:text-white">
          <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <title>Facebook</title>
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
          </svg>
        </a>
        <!-- Instagram -->
        <a href="#" target="__blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-orange-500 text-orange-500 dark:border-white dark:text-white hover:border-primary hover:bg-primary hover:text-white">
          <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <title>Instagram</title>
            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
          </svg>
        </a>
        <!-- Tiktok -->
        <a href="#" target="__blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-800 text-slate-800 dark:border-white dark:text-white hover:border-primary hover:bg-primary hover:text-white">
          <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <title>TikTok</title>
            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
          </svg>
        </a>
      </div>
    </div>
    </section>
    <!-- Hero Section end-->

    <!-- About Section -->
    <section id="about" class="pb-20 relative bg-white dark:bg-slate-600 z-50">
      <div class="flex gap-5">
        <div class="flex-1">
          <h1 class="text-5xl text-center lg:text-left lg:text-[4rem] font-bold text-primary ml-1 dark:text-slate-500">Tentang Kami</h1>
          <div class="container">
            <h4 class="text-3xl text-dark dark:text-slate-300 font-semibold mt-5">FitYou adalah Agensi pemasaran Digital</h4>
            <p class="mt-5 text-md mb-20 text-dark dark:text-slate-300">Kami berada di Jakarta, Surabaya, dan Bali. Kami membantu berbagai bisnis untuk mengoptimalkan pendapatannya dengan strategi promosi Online yang tepat.
              FitYou Mengedepankan strategi marketing yang berfokus pada akuisisi traffic dan leads yang berkualitas utuk memudahkan klien dalam melakukan penjualan.</p>
            <div class="flex justify-center">
              <a href="https://api.whatsapp.com/send?phone=+6281238841818&text=Hallo,%20saya%20mau%20tau%20info%20tentang%20Fityou.id" target="_blank" class="text-xl text-dark font-semibold rounded-full bg-tertiary px-5 py-3 hover:bg-opacity-90 hover:text-tertiary hover:bg-transparent  border border-transparent hover:border-tertiary transition duration-300 ease-in-out dark:text-white dark:bg-orange-400 dark:hover:bg-transparent dark:hover:text-white animate-bounce">Hubungi Kami</a>
            </div>
          </div>
        </div>
        <img class="hidden lg:flex w-[60%] h-[600px] rounded-bl-[30%] bg-cover object-cover" src="assets/images/about.jpg?v=1" alt="about image">
      </div>
    </section>
    <!-- About Section end -->

    <!-- Benefit start -->
    <section id="benefit" class="bg-white dark:bg-dark cursor-pointer relative z-50">
      <div class="container">
        <div class="flex flex-col lg:flex-row justify-center items-center">
          <div class="h-[600px] w-full max-w-none md:max-w-md lg:w-1/2 bg-secondary dark:bg-slate-500 relative flex flex-col group z-10 overflow-hidden items-center">
            <div class="absolute h-full w-full opacity-0 group-hover:opacity-40 z-30 bg-white dark:bg-dark transition-opacity duration-1000 ease-in-out"></div>
            <h3 class="absolute text-center left-[50%] top-[50%] -translate-x-[50%] translate-y-[5rem] group-hover:-translate-y-[50%] opacity-0 group-hover:opacity-90 z-50 text-2xl font-bold text-dark transition duration-1000 uppercase dark:text-white">Harga Terjangkau</h3>
            <img class="w-[300px] h-[300px] bg-cover absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] group-hover:scale-[2] transition duration-[3000ms] ease-in-out" src="assets/images/benefit-1.png?v=1" alt="benefit 1">
            <p class="text-xl text-dark font-semibold opacity-80 text-center mt-20 absolute  group-hover:-translate-y-[20rem] transition duration-[1500ms] ease-out dark:text-slate-200">Menawarkan solusi pemasaran digital yang terintegrasi dengan harga yang ramah.</p>
            <h1 class="uppercase text-2xl lg:text-3xl text-dark font-bold opacity-80 lg:-rotate-90 absolute bottom-5 lg:origin-bottom-left lg:left-[2.75rem] text-center lg:text-left max-w-md group-hover:translate-y-[40rem] transition duration-[1500ms] ease-out dark:text-white">Harga Terjangkau</h1>
          </div>
          <div class="h-[600px] w-full max-w-none md:max-w-md lg:w-1/2 bg-tertiary dark:bg-slate-700 relative group flex flex-col overflow-hidden items-center">
            <div class="absolute h-full w-full opacity-0 group-hover:opacity-40 z-30 bg-white dark:bg-dark transition-opacity duration-1000 ease-in-out"></div>
            <h3 class="absolute text-center left-[50%] top-[50%] -translate-x-[50%] translate-y-[5rem] group-hover:-translate-y-[50%] opacity-0 group-hover:opacity-90 z-50 text-2xl font-bold text-dark transition duration-1000 uppercase dark:text-white">Layanan Terbaik dan Full Support</h3>
            <img class="w-[300px] h-[300px] bg-cover absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] group-hover:scale-[2] transition duration-[3000ms] ease-in-out" src="assets/images/benefit-2.png?v=1" alt="benefit 2">
            <p class="text-xl text-dark font-semibold opacity-80 text-center mt-20 absolute  group-hover:-translate-y-[20rem] transition duration-[1500ms] ease-out dark:text-slate-200">Dengan tim yang beragam kami bekerjasams untuk memastikan iklan anda berhasil di berbagai kanal media.</p>
            <h1 class="uppercase text-2xl lg:text-3xl text-dark font-bold opacity-80 lg:-rotate-90 absolute bottom-5 lg:origin-bottom-left lg:left-20 text-center lg:text-left group-hover:translate-y-[40rem] transition duration-[1500ms] ease-out dark:text-white">Layanan Terbaik dan Full Support</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Benefit end -->

    <!-- Services start -->
    <section id="service" class="bg-secondary dark:bg-slate-700 relative z-50">
      <h1 class="text-5xl text-center lg:text-left lg:text-[4rem] font-bold text-primary ml-1 dark:text-slate-500">Layanan Kami</h1>
      <div class="container relative flex flex-col min-h-[500px]">
        <div class="w-[260px] h-[170px] bg-transparent absolute rounded-br-[100px] px-[60px] pt-[30px] pb-[20px] lg:left-0 lg:translate-x-[0%] left-[50%] -translate-x-[50%] font-bold text-2xl leading-[1rem] z-50 font">
          <span class="block ml-20 text-dark dark:text-white">/ 03</span>
          <span class="text-7xl ml-2 text-tertiary">0<span id="current-service">1</span></span>
          <div class="flex gap-10 justify-center mt-1 w-full">
            <button type="button" id="btnPrevService" class="text-slate-400 hover:text-tertiary">
              <svg class="fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="17.515px" viewBox="0 0 40 17.515" enable-background="new 0 0 40 17.515" xml:space="preserve">
                <polygon fill-rule="evenodd" clip-rule="evenodd" points="8.757,0 0,8.757 8.757,17.515 10.545,15.727 4.841,10.022 40,10.022 
40,7.493 4.841,7.493 10.545,1.788 " />
              </svg>
            </button>

            <button type="button" id="btnNextService" class="text-slate-400 hover:text-tertiary">
              <svg class="fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="17.515px" viewBox="0 0 40 17.515" enable-background="new 0 0 40 17.515" xml:space="preserve">
                <polygon fill-rule="evenodd" clip-rule="evenodd" points="31.242,0 40,8.757 31.242,17.515 29.455,15.727 35.159,10.022 0,10.022 
0,7.493 35.159,7.493 29.455,1.788 " />
              </svg>
            </button>
          </div>
        </div>
        <div id="service-desc">
          <div class="absolute flex flex-col mt-40 max-w-md z-10">
            <h4 class="text-3xl text-dark font-semibold dark:text-slate-200">Paket Zero Risk</h4>
            <p class="mt-5 text-md mb-20 text-dark dark:text-white">paket zero risk memberikan garansi kepada klien karena klien hanya membayar sesuai dengan leads yang di dapatkan
              (performance based fee).</p>
            <div class="flex">
              <a href="https://api.whatsapp.com/send?phone=+6281238841818&text=Hallo,%20saya%20mau%20tau%20info%20tentang%20Paket%20Zero%20Risk%20Fityou.id" target="_blank" class="text-md text-dark font-semibold rounded-full bg-tertiary px-5 py-3 hover:bg-opacity-90 hover:bg-transparent hover:text-tertiary  border border-transparent hover:border-tertiary transition duration-300 ease-in-out dark:text-white dark:bg-orange-400 dark:hover:bg-transparent dark:hover:text-white animate-bounce">Pelajari lebih lanjut</a>
            </div>
          </div>
          <div class="absolute mt-40 max-w-md z-10 hidden">
            <h4 class="text-3xl text-dark font-semibold dark:text-slate-200">Paket Flexible</h4>
            <p class="mt-5 text-md mb-20 text-dark dark:text-white">paket flexible memberikan kebebasan pada klien untuk menentukan berapa budget yang diinginkan untuk beriklan.</p>
            <div class="flex">
              <a href="https://api.whatsapp.com/send?phone=+6281238841818&text=Hallo,%20saya%20mau%20tau%20info%20tentang%20Paket%20Flexible%20Fityou.id" target="_blank" class="text-md text-dark font-semibold rounded-full bg-tertiary px-5 py-3 hover:bg-opacity-90 hover:bg-transparent hover:text-tertiary  border border-transparent hover:border-tertiary transition duration-300 ease-in-out dark:text-white dark:bg-orange-400 dark:hover:bg-transparent dark:hover:text-white animate-bounce">Pelajari lebih lanjut</a>
            </div>
          </div>
          <div class="absolute mt-40 max-w-md z-10 hidden">
            <h4 class="text-3xl text-dark font-semibold dark:text-slate-200">Paket Instagram</h4>
            <p class="mt-5 text-md mb-20 text-dark dark:text-white">Paket Instagram sangat cocok untuk startup atau UMKM yang baru ingin membangun awareness di media social instagram.</p>
            <div class="flex">
              <a href="https://api.whatsapp.com/send?phone=+6281238841818&text=Hallo,%20saya%20mau%20tau%20info%20tentang%20Paket%20Instagram%20Fityou.id" target="_blank" class="text-md text-dark font-semibold rounded-full bg-tertiary px-5 py-3 hover:bg-opacity-90 hover:bg-transparent hover:text-tertiary  border border-transparent hover:border-tertiary transition duration-300 ease-in-out dark:text-white dark:bg-orange-400 dark:hover:bg-transparent dark:hover:text-white animate-bounce">Pelajari lebih lanjut</a>
            </div>
          </div>
        </div>
      </div>
      <div id="service-image">
        <img class="absolute bg-cover object-cover bottom-0 right-0 rounded-tl-[300px] opacity-50 lg:opacity-90" src="assets/images/paket-1.jpg?v=1" alt="paket 1">
        <img class="absolute bg-cover object-cover bottom-0 right-0 rounded-tl-[300px] opacity-50 lg:opacity-90 hidden" src="assets/images/paket-2.jpg?v=1" alt="paket 2">
        <img class="absolute bg-cover object-cover bottom-0 right-0 rounded-tl-[300px] opacity-50 lg:opacity-90 hidden" src="assets/images/paket-3.jpg?v=1" alt="paket 3">
      </div>
    </section>
    <!-- Services end -->

    <!-- Footer Start -->
    <footer class="relative z-50">
      <div class="flex lg:flex-row flex-col-reverse items-center lg:justify-between px-5 py-3 bg-tertiary text-dark dark:bg-slate-900 dark:text-white">
        <div class="text-center lg:text-left text-xs lg:text-base pt-5 lg:pt-0">
          <a href="#home"><img class="w-14 lg:w-20 mx-auto lg:mx-0" src="assets/images/logo.png?v=1" alt="logo"></a>
          <h3>PT. FitYou Agency Media&copy;2022</h3>
        </div>
        <div class="max-w-sm text-center lg:text-right text-sm lg:text-base">
          <h1>Jl. Pulau Maluku II no. 2C, Lingk. Pelitasari. Denpasar. Bali</h1>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=+6281238841818&text=Hallo,%20saya%20mau%20tau%20info%20tentang%20Fityou.id">0812-3884-1818</a>
        </div>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Back to Top start -->
    <a href="#home" class="hidden fixed justify-center items-center z-50 bottom-5 lg:bottom-28 p-4 right-4 h-14 w-14 bg-secondary rounded-full hover:animate-pulse" id="to-top">
      <span class="block h-5 w-5 border-t-2 border-l-2 rotate-45 mt-2 border-slate-500"></span>
    </a>
    <!-- Back to Top end -->

    <!-- My Script -->
    <script src="assets/js/script.js?<?= time() ?>"></script>
</body>

</html>