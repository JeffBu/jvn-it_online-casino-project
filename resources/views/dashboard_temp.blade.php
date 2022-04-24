<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">

    <style>
        .bg-custom
        {
            background-image: url('{{asset("media/img/cards-bg.png")}}');
            background-repeat: no-repeat;

        }

    </style>

</head>
<body class="bg-custom bg-fixed bg-cover text-yellow-50">
    <header class="flex flex-row bg-neutral-900 justify-between items-center py-5 px-5 h-16 text-sm tracking-widest fixed w-full z-50">

        <div>
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
    </div>

        <div class="flex items-center gap-5 text-xl font-semibold">
            <a href="#" class="hover:text-orange-400 text-yellow-50 focus:text-orange-400 focus:outline-none" id="tabs-sabong">Sabong</a>
            <a href="#" class="hover:text-orange-400 text-yellow-50 focus:text-orange-400" id="tabs-baccarat">Baccarat</a>
        </div>
        
        <div class="flex gap-8 items-center">
            <div class="flex gap-2 items-center">
                <img src="{{asset('media/img/alpha-coin.png')}}" alt="" class="h-5">
                <p class="font-semibold">1,000,000</p>
            </div>
            <div class="cursor-pointer" id="user">
                <div class="flex items-center gap-3">
                    <img src="{{asset('media/img/user-logo.png')}}" alt="user-logo" class="h-6 w-6 rounded-full">
                    <p id="" class="font-semibold">zombakel</p>
                </div>
                <div class="hidden items-center gap-2 border-2 border-neutral-700 hover:border-neutral-600 hover:bg-neutral-700 bg-neutral-800 justify-center mt-3 w-28 cursor-pointer absolute" id="logout">
                    <a href="#" class="py-2 flex justify-center gap-2">Log Out <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </header>

    <!--sidebar-->

    <div class="relative min-h-screen flex">
        <div class="flex justify-center bg-neutral-800 w-64 font-semi-bold">
            <nav class="pt-16 fixed w-64 text-left">
                <div class="shadow mt-6">
                    <div class="list-none flex flex-wrap items-center">
                        <h3 class="flex flex-1 px-5 py-2 font-semibold">Account</h3>
                    </div>
                    <div class="list-none flex flex-wrap items-center divide-y divide-red-800">
                        <a href="http://127.0.0.1:8000/coins-wallet" class="block px-10 py-2 w-full hover:bg-neutral-700">My Coins / Cash-in</a>
                        <a href="#" class="block px-10 py-2 w-full hover:bg-neutral-700">My Profile</a>
                    </div>
                </div>
                <div class="shadow mt-6">
                    <div class="list-none flex flex-wrap items-center">
                        <h3 class="flex flex-1 px-5 py-2 font-semibold">Support</h3>
                    </div>
                    <div class="list-none flex flex-wrap items-center hover:bg-neutral-700 divide-y divide-red-800">
                        <a href="#" class="block px-10 py-2 w-full hover:bg-neutral-700">Chat with us</a>
                    </div>
                </div>
            </nav>

        </div>

    <!--content-->
    
        <div class="flex-1 m-5 pt-12 text-xl font-semi-bold">
            <!--sabong-->
            <div id="content-sabong">
                <div class="grid col grid-cols-2 gap-10 px-5 py-5">
                    
                    <a href="http://127.0.0.1:8000/sabong" class="hover:-m-0.5">
                        <video width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                            <source src="{{asset('media/videos/casino-trailer.mp4')}}" type="video/mp4">
                        </video>
                    </a>

                    <div class="hover:-m-0.5">
                        <video width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                            <source src="/videos/casino-trailer.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="hover:-m-0.5">
                        <video width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 p-0.5">
                            <source src="/videos/casino-trailer.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="hover:-m-0.5">
                        <video width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                            <source src="/videos/casino-trailer.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
            <!--sabong-->

            <!--baccarat-->
            <div id="content-baccarat" class="hidden">
                <div class="grid col grid-cols-2 gap-10 px-5 py-5">
                    
                    <a href="http://127.0.0.1:8000/baccarat" class="hover:-m-0.5">
                        <video width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                            <source src="{{asset('media/videos/casino-trailer.mp4')}}" type="video/mp4">
                        </video>
                    </a>

                    <div class="hover:-m-0.5">
                        <video width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                            <source src="/videos/casino-trailer.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="hover:-m-0.5">
                        <video width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 p-0.5">
                            <source src="/videos/casino-trailer.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
            <!--baccarat-->
        </div>
    </div>

    <!--scripts-->

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        jQuery('#tabs-baccarat').on('click' , function() {
                $('#content-baccarat').show();
                $('#content-sabong').hide();
        });
        jQuery('#tabs-sabong').on('click' , function() {
                $('#content-sabong').show();
                $('#content-baccarat').hide();
        });

        $(document).ready(function(){
            $('#tabs-sabong').focus();
        });

        
        jQuery('#user').on('click', function() {
            $('#logout').toggle();
        });

        $(document).click(function() {})
    </script>

    <!--scripts ends here-->
</body>
</html>