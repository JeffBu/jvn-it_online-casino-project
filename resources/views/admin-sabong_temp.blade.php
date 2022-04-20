<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sabong</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
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
    <header class="flex flex-row bg-neutral-900 justify-between items-center py-5 px-5 h-16 text-sm tracking-widest fixed w-full z-50" id="header_frame">

        <a href="admin-dashboard.html" class="">
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
        </a>
        
        <div class="text-xl font-bold">Room Name</div>

        <div class="flex gap-8 items-center">
            <div class="cursor-pointer" id="user">
                <div class="flex items-center gap-3">
                    <img src="{{asset('media/img/logo.png')}}" alt="user-logo" class="h-8 w-8 rounded-full">
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
    <div class="flex w-full justify-center">
        <div class="justify-center bg-neutral-800 w-64 font-semi-bold min-h-screen left-0 fixed hidden md:flex">
            <nav class="mt-16 w-64 text-left">
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
        <div class="m-5 pt-12 text-xl font-semi-bold hidden flex-col md:flex lg:flex">
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

            <div class="py-3 justify-center items-center hidden xl:flex 2xl:hidden">
                <div id="stream-xl"></div>
            </div>
            <div class="py-3 justify-center items-center hidden 2xl:flex">
                <div id="stream-2xl"></div>
            </div>

        </div>
    <!--content ends here-->

    <!--bside-->
        <div class="justify-center bg-neutral-800 w-64 font-semi-bold fixed right-0 min-h-screen hidden md:flex">
            <nav class="w-64 mt-20 text-center">
                <div class="flex text-left">
                    <div class="block px-3 py-2 w-full border-x-0 border-2 border-neutral-600">Banker's Pot</div>
                    <div class="block px-3 py-2 w-full border-r-0 border-2 border-neutral-600">1,000,000</div>
                </div>

                <div class="mt-10 border-y-2 border-neutral-600">
                    <div class="list-none flex flex-wrap items-center">
                        <a href="#" onclick="toggleModal()" class="flex items-center px-5 py-2 w-full hover:bg-neutral-700 gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg> Create Room</a>
                    </div>
                </div>

                <div class="mt-10 px-10 py-2 w-full bg-yellow-400 hover:bg-yellow-300 cursor-pointer border-2 border-x-0 border-yellow-50"
                id="open-betting">Open Betting</div>
                <div class="mt-10 px-10 py-2 w-full bg-yellow-400 hover:bg-yellow-300 cursor-pointer border-2 border-x-0 border-yellow-50 hidden"
                id="close-betting">Close Betting</div>
                <div class="px-10 py-2 w-full bg-orange-400 hover:bg-orange-300 cursor-pointer border-t-0 border-2 border-x-0 border-yellow-50 hidden"
                id="game-finish">Game Finish</div>
                <div class="flex">
                    <div class="px-10 py-2 w-full bg-red-700 hover:bg-red-500 cursor-pointer border-t-0 border-l-0 border-2 border-yellow-50 hidden"
                    id="meron-wins">Meron Wins</div>
                    <div class="px-10 py-2 w-full bg-blue-700 hover:bg-blue-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50 hidden"
                    id="wala-wins">Wala Wins</div>
                </div>
                <div class="px-10 py-2 w-full bg-green-700 hover:bg-green-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50 hidden"
                id="draw">Draw</div>
            </nav>

        </div>
    </div>    
    <!--bside ends here-->

    <!--modal-->
    <div class="hidden fixed top-0 h-full w-full bg-neutral-800 bg-opacity-75 justify-center items-center py-20 px-56" id="modal">
        <div class="flex justify-center items-center rounded-lg bg-neutral-700 border-2 border-neutral-600">
            <div class="flex flex-col w-64 h-full rounded-l-md bg-neutral-800 text-left px-5 py-5 gap-5">
                <div class="bg-neutral-700 border-2 border-neutral-600 divide-y divide-neutral-600">
                    <div class="bg-neutral-800 text-center">Stakes</div>
                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Low-Stakes</div>
                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Mid-Stakes</div>
                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">High-Stakes</div>
                </div>
                <div class="bg-neutral-700 border-2 border-neutral-600">
                    <div class="bg-neutral-800 text-center">Scenes</div>
                    <table class="w-full">
                        <tbody class="divide-y divide-neutral-600">
                            <tr>
                                <td>
                                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Scene 1</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Scene 2</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Scene 3</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Scene 4</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Scene 5</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex items-center justify-start gap-2 bg-neutral-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 my-2 ml-2 text-neutral-200 hover:text-neutral-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 my-2 text-neutral-200 hover:text-neutral-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="bg-neutral-700 border-2 border-neutral-600 divide-y divide-neutral-600">
                    <div class="bg-neutral-800 text-center">Controls</div>
                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Start Streaming</div>
                    <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer" onclick="toggleModal()">Exit</div>
                </div>
            </div>
            <div class="flex flex-col px-4 py-2 gap-4">
                <div class="text-center font-semibold text-lg">Preview</div>
                <a href="/src/gameroom-sabong.html">
                    <video width="640" height="480" autoplay muted loop id="video" class="rounded-lg">
                        <source src="/videos/casino-trailer.mp4" type="video/mp4">
                    </video>
                </a>
            </div>
        </div>

    </div>
    <!--modal ends here-->

    <!--scripts-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src= "https://player.twitch.tv/js/embed/v1.js"></script>

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

        jQuery('#open-betting').on('click', function() {
            $('#close-betting').toggle();
            $('#open-betting').css('display', 'none');
            $('#meron-wins').css('display', 'none');
            $('#wala-wins').css('display', 'none');
            $('#draw').css('display', 'none');
            $('#game-finish').css('display', 'none');
        });

        jQuery('#close-betting').on('click', function() {
            $('#close-betting').toggle();
            $('#open-betting').toggle();
            $('#game-finish').toggle();
        });

        jQuery('#game-finish').on('click', function() {
            $('#game-finish').toggle();
            $('#meron-wins').toggle();
            $('#wala-wins').toggle();
            $('#draw').toggle();
        });

        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden')
        }

        var options = {
            controls: false,
            autoplay: true,
            width: 1440,
            height: 720,
            channel: "mch_AGG",
            parent: ["localhost", "online-casino.test"]
        };
        var player = new Twitch.Player("stream-2xl", options);

        var options = {
            controls: false,
            autoplay: true,
            width: 800,
            height: 450,
            channel: "mch_AGG",
            parent: ["localhost", "online-casino.test"]
        };
        var player = new Twitch.Player("stream-xl", options);

    </script>

    <!--scripts ends here-->
</body>
</html>