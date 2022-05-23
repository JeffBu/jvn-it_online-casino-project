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

    <style>
        .bg-custom
        {
            background-image: url("{{asset('media/img/cards-bg.png')}}");
            background-repeat: no-repeat;

        }

    </style>
</head>

<body class="bg-neutral-800 text-yellow-50">

    <!--header-->

    <header class="flex flex-row bg-neutral-900 justify-between items-center py-5 px-5 h-16 text-sm tracking-widest fixed w-full z-50" id="header_frame">

        <div>
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
        </div>

        <ul class="flex flex-row items-center align-middle gap-3">

            <li><a href="{{route('login')}}" class="bg-red-800 font py-2 px-4 rounded-full hover:bg-red-500 shadow-md">SIGN IN</a></li>

            <li><a href="{{route('register')}}" class="bg-red-800 font py-2 px-4 rounded-full hover:bg-red-500 shadow-md">SIGN UP</a></li>
        </ul>
    </header>

    <!--header ends here-->

    <!--content-->

    <div class="flex items-center justify-center opacity-75">
        <div class="bg-custom bg-cover h-96 md:min-h-screen w-full"></div>
    </div>

    <!--games-->

    <div>
        <div class="flex items-center text-center sm:text-left py-10 sm:py-20 px-20">
            <h2 class="font-medium text-4xl sm:text-5xl">Our Games</h2>
        </div>

        <div class="flex flex-col gap-10 sm:gap-4 lg:gap-10">
            <div class="flex flex-col sm:flex-row px-20 gap-10 sm:gap-4 lg:gap-10">
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

            <div class="flex flex-col sm:flex-row pb-20 px-20 gap-10 sm:gap-4 lg:gap-10">
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
    </div>

    <!--games ends here-->

    <!--partners-->

    <div class="pt-20 px-5 bg-yellow-50">
        <h3 class="font-medium text-3xl sm:text-4xl text-center tracking-widest text-neutral-800">Top-up Partners</h3>
    </div>

    <div class="flex flex-col sm:flex-row items-center justify-center pt-16 pb-32 px-5 bg-yellow-50 gap-14 lg:gap-20">
        <img src="{{asset('media/img/gcash-logo.png')}}" alt="gcash" class="h-10">
        <img src="{{asset('media/img/paymaya-logo.png')}}" alt="paymaya" class="h-16">
        <img src="{{asset('media/img/coinsph-logo.png')}}" alt="coinsph" class="h-7">
    </div>

    <!--partners ends here-->

    <!--content ends here-->

    <!--footer-->

    <footer class="flex flex-row justify-between items-center bg-neutral-900 py-2 px-4 lg:px-60 text-sm gap-4 w-full tracking-widest">
        <div class="flex items-center gap-2">
            <img src="{{asset('media/img/logo.png')}}" alt="logo" class="max-h-10">
            <p class="text-yellow-50">© 2022 Alpha Test. All rights reserved.</p>
        </div>
        <div class="flex items-center gap-2">
            <p>Back to top</p>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                </svg>
            </a>
        </div>
    </footer>

    <!--footer ends here-->

    <!--scripts-->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

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
