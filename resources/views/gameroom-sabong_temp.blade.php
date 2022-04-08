<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabong</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">

    <style>
        .bg-custom 
        {
            background-image: url('/img/cards-bg.png');
            background-repeat: no-repeat;

        }

    </style>

</head>
<body class="bg-custom bg-fixed bg-cover text-yellow-50">
    <header class="flex flex-row bg-neutral-900 justify-between items-center py-5 px-5 h-16 text-sm tracking-widest fixed w-full z-50" id="header_frame">

        <a href="/src/dashboard.html" class="">
            <img src="/img/alpha-logo.png" alt="alpha" class="h-10">
        </a>
        
        <div class="text-xl font-bold">Room Name</div>

        <div class="flex gap-8 items-center">
            <div class="flex gap-3 items-center">
                <img src="/img/alpha-coin.png" alt="" class="h-5">
                <p class="font-semibold">1,000,000</p>
            </div>
            <div class="cursor-pointer" id="user">
                <div class="flex items-center gap-3">
                    <img src="/img/user-logo.png" alt="user-logo" class="h-8 w-8 rounded-full">
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
    <div class="flex">
    <div class="relative min-h-screen flex">
        <div class="flex justify-center bg-neutral-800 w-64 font-semi-bold">
            <nav class="pt-16 fixed w-64 text-left">
                <div class="shadow mt-6">
                    <div class="list-none flex flex-wrap items-center">
                        <h3 class="flex flex-1 px-5 py-2 font-semibold">Account</h3>
                    </div>
                    <div class="list-none flex flex-wrap items-center divide-y divide-red-800">
                        <a href="/src/coins-wallet.html" class="block px-10 py-2 w-full hover:bg-neutral-700">My Coins / Cash-in</a>
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
    <!--sidebar ends here-->

    <!--content-->
        <div class="flex-1 m-5 pt-12 px-2 text-xl font-semi-bold">
            <table class="flex flex-row justify-center items-center bg-neutral-800 mt-3 px-2 py-2 rounded-md">
                <tbody>
                    <tr>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-green-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-green-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        <td class="px-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                    </tr>
                </tbody>
            </table>
            <div class="py-3">
                <div>
                    <video width="w-full" autoplay muted loop id="video"
                    class="rounded-lg">
                        <source src="/videos/casino-trailer.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="px-2 bg-neutral-800 rounded-md overflow-auto">
                <h2 class="text-center pt-2">*SCROLL OR SWIPE DOWN TO SEE MATCH HISTORY</h2>

                <table class="flex items-start flex-start py-8 px-4">
                    <tbody>
                        <tr>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-green-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        </tr>
                        <tr>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div></td>
                        </tr>
                        <tr>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                        </tr>
                        <tr>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                        </tr>
                        <tr>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"><div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                            <td class="p-1"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    <!--content ends here-->

    <!--bside-->
        <div class="relative min-h-screen flex">
            <div class="flex justify-center bg-neutral-800 w-64 font-semi-bold">
                <nav class="pt-20 fixed w-64 px-4 text-left">

                    <div class="pb-4">
                        <h2 class="text-center">PLACE YOUR BET</h2>
                    </div>
                    <div class="flex justify-center pb-2">
                        <a href="#" class="container bg-red-700 py-2 px-4 border-2 border-yellow-50 rounded-lg hover:bg-red-500 focus:bg-red-500 shadow-md text-center">
                            <div class="pb-2">MERON</div>
                            <div class="pb-2">TOTAL AMOUNT OF BETS</div>
                            <div>WINNING PERCENTAGE</div>
                        </a>
                    </div>
                    <div class="flex justify-center pb-2">
                        <a href="#" class="container bg-green-700 py-2 px-4 border-2 border-yellow-50 rounded-lg hover:bg-green-500 focus:bg-green-500 shadow-md text-center">
                            <div class="px-16">DRAW</div>
                            <div>x3</div>
                        </a>
                    </div>
                    <div class="flex justify-center pb-9">
                        <a href="#" class="container bg-blue-700 py-2 px-4 border-2 border-yellow-50 rounded-lg hover:bg-blue-500 focus:bg-blue-500 shadow-md text-center">
                            <div class="pb-2">WALA</div>
                            <div class="pb-2">TOTAL AMOUNT OF BETS</div>
                            <div>WINNING PERCENTAGE</div>
                        </a>
                    </div>
                    <div>
                        <div class="pb-4">
                            <h2 class="text-center">CHOOSE AMOUNT TO BET</h2>
                        </div>
                        <div class="flex justify-center flex-row gap-3">
                            <a href="#" class="bg-orange-500 py-2 px-4 border-2 border-yellow-50 hover:bg-orange-300 focus:bg-orange-300 shadow-md text-center">20</a>
                            <a href="#" class="bg-red-500 py-2 px-4 border-2 border-yellow-50 hover:bg-red-300 focus:bg-red-300 shadow-md text-center">50</a>
                            <a href="#" class="bg-violet-500 py-2 px-4 border-2 border-yellow-50 hover:bg-violet-300 focus:bg-violet-300 shadow-md text-center">100</a>
                        </div>
                        <div class="flex justify-center flex-row gap-3 pt-4">
                            <a href="#" class="bg-yellow-500 py-2 px-4 border-2 border-yellow-50 hover:bg-yellow-300 focus:bg-yellow-300 shadow-md text-center">500</a>
                            <a href="#" class="bg-blue-500 py-2 px-4 border-2 border-yellow-50 hover:bg-blue-300 focus:bg-blue-300 shadow-md text-center">1000</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </div>
    <!--bside ends here-->

    <!--scripts-->
    <script src="https://cdn.tailwindcss.com"></script>
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

        jQuery('#user').on('click', function() {
            $('#logout').toggle();
        });

        $(document).click(function() {})
    </script>

    <!--scripts ends here-->
</body>
</html>