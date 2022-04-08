<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sabong</title>
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

        <a href="admin-dashboard.html" class="">
            <img src="/img/alpha-logo.png" alt="alpha" class="h-10">
        </a>
        
        <div class="text-xl font-bold">Room Name</div>

        <div class="flex gap-8 items-center">
            <div class="cursor-pointer" id="user">
                <div class="flex items-center gap-3">
                    <img src="/img/logo.png" alt="user-logo" class="h-8 w-8 rounded-full">
                    <p id="" class="font-semibold text-orange-400">admin354</p>
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
            <nav class="mt-16 fixed w-64 text-left">
                <table class="mt-3">
                    <tbody class="divide-y-2 divide-neutral-600">
                        <tr>
                            <td class="pl-3 font-semibold pb-2">Total Bets</td>
                        </tr>
                        <tr>
                            <td class="pl-10 font-semibold bg-neutral-600">Meron</td>
                            <td class="bg-neutral-600"> </td>
                        </tr>
                        <tr>
                            <td class="pl-3">Total No. of Better</td>
                            <td class="px-3">123,456,789</td>
                        </tr>
                        <tr>
                            <td class="pl-3">Total Amount of Bet</td>
                            <td class="px-3">123,456,789</td>
                        </tr>
                        <tr>
                            <td class="pl-3 pb-2">Winning Percentage</td>
                            <td class="px-3">999.999%</td>
                        </tr>
                    </tbody>
                    <tbody class="divide-y-2 divide-neutral-600 pt-5">
                        <tr>
                            <td class="pl-3 font-semibold"></td>
                        </tr>
                        <tr>
                            <td class="pl-10 font-semibold bg-neutral-600">Wala</td>
                            <td class="bg-neutral-600"> </td>
                        </tr>
                        <tr>
                            <td class="pl-3">Total No. of Better</td>
                            <td class="px-3">123,456,789</td>
                        </tr>
                        <tr>
                            <td class="pl-3">Total Amount of Bet</td>
                            <td class="px-3">123,456,789</td>
                        </tr>
                        <tr>
                            <td class="pl-3 pb-2">Winning Percentage</td>
                            <td class="px-3">999.999%</td>
                        </tr>
                    </tbody>
                    <tbody class="divide-y-2 divide-neutral-600 pt-5">
                        <tr>
                            <td class="pl-3 font-semibold"></td>
                        </tr>
                        <tr>
                            <td class="pl-10 font-semibold bg-neutral-600">Draw</td>
                            <td class="bg-neutral-600"> </td>
                        </tr>
                        <tr>
                            <td class="pl-3">Total No. of Better</td>
                            <td class="px-3">123,456,789</td>
                        </tr>
                        <tr>
                            <td class="pl-3">Total Amount of Bet</td>
                            <td class="px-3">123,456,789</td>
                        </tr>
                        <tr>
                            <td class="pl-3">Winning Percentage</td>
                            <td class="px-3">999.999%</td>
                        </tr>
                    </tbody>
                </table>
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

        </div>
    <!--content ends here-->

    <!--bside-->
        <div class="flex justify-center bg-neutral-800 w-64 font-semi-bold">
            <nav class="w-64 mt-20 text-center">
                <div class="flex text-left">
                    <div class="block px-3 py-2 w-full border-x-0 border-2 border-neutral-600">Banker's Pot</div>
                    <div class="block px-3 py-2 w-full border-r-0 border-2 border-neutral-600">1,000,000</div>
                </div>
                <div class="block mt-10 px-10 py-2 w-full bg-yellow-400 hover:bg-yellow-300 cursor-pointer border-2 border-x-0 border-yellow-50">Close Betting</div>
                <div class="block px-10 py-2 w-full bg-orange-400 hover:bg-orange-300 cursor-pointer border-t-0 border-2 border-x-0 border-yellow-50">Game Finish</div>
                <div class="flex">
                    <div class="block px-10 py-2 w-full bg-red-700 hover:bg-red-500 cursor-pointer border-t-0 border-l-0 border-2 border-yellow-50">Meron Wins</div>
                    <div class="block px-10 py-2 w-full bg-blue-700 hover:bg-blue-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50">Wala Wins</div>
                </div>
                <div class="block px-10 py-2 w-full bg-green-700 hover:bg-green-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50">Draw</div>
            </nav>

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