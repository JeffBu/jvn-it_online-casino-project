<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-neutral-800 text-yellow-50">

    <!--header-->

    <header class="flex flex-row bg-neutral-900 justify-between items-center py-5 px-5 h-16 text-sm tracking-widest fixed w-full z-50" id="header_frame">

        <div>
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
        </div>

        <ul class="hidden md:flex flex-row items-center align-middle gap-3">

            <li class="flex flex-row bg-transparent border-yellow-50 border-2 py-1 px-5 rounded-full">
                <input class="bg-transparent placeholder:text-yellow-50 text-yellow-50 tracking-widest appearance-none leading-tight focus:outline-none focus:bg-transparent shadow-md" id="search" type="text" placeholder="SEARCH">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </a>
            </li>

            <li><a href="http://127.0.0.1:8000/login" class="bg-red-800 font py-2 px-4 rounded-full hover:bg-red-500 shadow-md">SIGN IN</a></li>

            <li><a href="http://127.0.0.1:8000/register" class="bg-red-800 font py-2 px-4 rounded-full hover:bg-red-500 shadow-md">SIGN UP</a></li>
        </ul>

        <button class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </header>

    <!--header ends here-->

    <!--content-->

    <div class="flex items-center justify-center opacity-75">
        <img src="{{asset('media/img/cards-bg.png')}}" alt="bg-1">

    </div>

    <!--games-->

    <div>
        <div class="flex items-center justify-start py-20 px-20 gap-20">
            <h2 class="font-medium text-5xl">Our Games</h2>
        </div>

        <div class="grid col grid-cols-2 pb-10 px-20 gap-10">
            <a href="#">
                <div class="hover:-m-0.5">
                    <img src="{{asset('media/img/baccarat.png')}}" alt="baccarat" class="rounded-xl shadow-2xl border-orange-400 hover:border-2 p-0.5">
                </div>
            </a>

            <a href="#">
                <div class="hover:-m-0.5">
                    <img src="{{asset('media/img/sabong.png')}}" alt="sabong" class="rounded-xl shadow-2xl border-orange-400 hover:border-2 p-0.5">
                </div>
            </a>
        </div>

        <div class="grid grid-cols-3 pb-20 px-20 gap-10">
            <a href="#">
                <div class="hover:-m-0.5">
                    <img src="{{asset('media/img/black-jack.png')}}" alt="black-jack" class="rounded-xl shadow-2xl border-orange-400 hover:border-2 p-0.5">
                </div>
            </a>

            <a href="#">
                <div class="hover:-m-0.5">
                    <img src="{{asset('media/img/poker.png')}}" alt="poker" class="rounded-xl shadow-2xl border-orange-400 hover:border-2 p-0.5">
                </div>
            </a>

            <a href="#">
                <div class="hover:-m-0.5">
                    <img src="{{asset('media/img/coming-soon.png')}}" alt="coming-soon" class="rounded-xl shadow-2xl border-orange-400 hover:border-2 p-0.5">
                </div>
            </a>
        </div>
    </div>

    <!--games ends here-->

    <!--partners-->

    <div class="pt-20 px-5 bg-yellow-50">
        <h3 class="font-medium text-4xl text-center tracking-widest text-neutral-800">Top-up Partners</h3>
    </div>

    <div class="flex items-center justify-center pt-16 pb-32 px-5 bg-yellow-50">
        <div class="grid col grid-cols-3 gap-20 items-center justify-center">

            <img src="{{asset('media/img/gcash-logo.png')}}" alt="gcash" class="h-10">
            <img src="{{asset('media/img/paymaya-logo.png')}}" alt="paymaya" class="h-16">
            <img src="{{asset('media/img/coinsph-logo.png')}}" alt="coinsph" class="h-7 pl-5">

        </div>
    </div>

    <!--partners ends here-->

    <!--content ends here-->

    <!--footer-->

    <footer class="flex flex-row justify-center align-middle items-center py-5 px-5 text-sm tracking-widest gap-5">

        <img src="{{asset('media/img/logo.png')}}" alt="logo" class="max-h-10">

        <p class="text-yellow-50">© 2022 Alpha Test. All rights reserved.</p>

        <p class="pl-96">Back to top</p>

        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
        </a>

        </div>
    </footer>

    <!--footer ends here-->

    <!--scripts-->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        jQuery(window).on('scroll', function() {
            if(jQuery(window).scrollTop() > 0) {
                jQuery('#header_frame').css('background-color', '#171717');
            }
            else {
                jQuery('#header_frame').css('background-color', '#171717');
            }
        });

        $(document).scroll(function() {})
    </script>

    <!--scripts ends here-->

</body>
</html>
