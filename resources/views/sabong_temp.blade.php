<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabong</title>
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

        <a href="http://127.0.0.1:8000/dashboard" class="">
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
        </a>

        <div class="text-xl font-bold">Room Name</div>

        <div class="flex gap-6 items-center">
            <div class="gap-3 items-center hidden xl:flex">
                <img src="{{asset('media/img/alpha-coin.png')}}" alt="" class="h-5">
                <p class="font-semibold">1,000,000</p>
            </div>
            <div class="hidden xl:flex">
                <div class="flex items-center gap-3 cursor-pointer" id="user">
                    <img src="{{asset('media/img/user-logo.png')}}" alt="user-logo" class="h-6 w-6 rounded-full bg-neutral-900">
                    <p id="" class="font-semibold">zombakel</p>
                </div>
                <div class="hidden items-center border-2 border-neutral-700 hover:border-neutral-600 hover:bg-neutral-700 bg-neutral-800 justify-center mt-10 w-28 px-2 cursor-pointer absolute"
                id="logout">
                    <a href="#" class="py-2 flex justify-center gap-2">Log Out <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <button class="flex cursor-pointer xl:hidden 2xl:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                    id="menu">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="justify-center bg-neutral-800 w-60 font-semi-bold rounded-md right-5 top-14 fixed hidden border border-neutral-700"
                id="nav-menu">
                    <nav class="w-full text-left">
                        <div class="flex gap-3 items-center mt-2 py-2 px-5 border-b-neutral-700 border-b">
                            <img src="{{asset('media/img/user-logo.png')}}" alt="" class="h-5 w-5 bg-neutral-900 rounded-full">
                            <p class="font-semibold">zombakel</p>
                        </div>
                        <div class="flex gap-3 items-center py-2 px-5 border-b-neutral-700 border-b">
                            <img src="{{asset('media/img/alpha-coin.png')}}" alt="" class="h-5">
                            <p class="font-semibold">1,000,000</p>
                        </div>
                        
                        <div class="shadow mt-4">
                            <div class="list-none flex flex-wrap items-center">
                                <h3 class="flex flex-1 px-5 py-2 font-semibold">Account</h3>
                            </div>
                            <div class="items-center">
                                <a href="#" class="block px-10 py-2 w-full hover:bg-neutral-700 border-b-neutral-700 border-b">My Coins / Wallet</a>
                                <a href="#" class="block px-10 py-2 w-full hover:bg-neutral-700 border-b-neutral-700 border-b">My Profile</a>
                                <a href="#" class="flex gap-2 px-10 py-2 w-full hover:bg-neutral-700">Log Out <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="my-4">
                            <div class="list-none flex flex-wrap items-center">
                                <h3 class="flex flex-1 px-5 py-2 font-semibold">Support</h3>
                            </div>
                            <div class="list-none flex flex-wrap items-center hover:bg-neutral-700">
                                <a href="#" class="block px-10 py-2 w-full hover:bg-neutral-700">Chat with us</a>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            
        </div>

    </header>

    <!--sidebar-->
    <div class="flex w-full justify-center">
    <div class="justify-center bg-neutral-800 w-64 font-semi-bold min-h-screen left-0 fixed hidden md:flex">
            <nav class="pt-16 w-64 text-left">
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
            
            <!--livestreams-->
            <div class="py-3 justify-center items-center hidden xl:flex 2xl:hidden">
                <div id="stream-xl"></div>
            </div>
            <div class="py-3 justify-center items-center hidden 2xl:flex">
                <div id="stream-2xl"></div>
            </div>
            <!--livestreams ends here-->

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
        <div class="justify-center bg-neutral-800 w-64 font-semi-bold fixed right-0 min-h-screen hidden md:flex">
                <nav class="pt-20 fixed w-64 px-4 text-left">

                    <div class="pb-4">
                        <h2 class="text-center">PLACE YOUR BET</h2>
                    </div>
                    <div class="radio-group pb-6 flex flex-col gap-2">
                        <button data-value="MERON-" class="radio container bg-red-700 py-2 px-2 border-2 border-yellow-50 rounded-lg hover:bg-red-500 focus:bg-red-500 shadow-md text-center bet-option"
                            id="meron">
                                <div class="pb-2">MERON</div>
                                <div class="pb-2">TOTAL AMOUNT OF BETS</div>
                                <div class="hidden" id="place-bet-meron">
                                    <div class="flex justify-center items-center">
                                        <div id="bg-bet-meron" class="flex bg-neutral-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 shadow-md text-xs justify-center items-center absolute">
                                            <div class="absolute betValue">0</div>
                                        </div>
                                    </div>
                                </div>
                                <div>WINNING PERCENTAGE</div>
                        </button>
                        <button data-value="DRAW-" class="radio container bg-green-700 py-2 px-2 border-2 border-yellow-50 rounded-lg hover:bg-green-500 focus:bg-green-500 shadow-md text-center bet-option"
                            id="draw">
                                <div class="pb-2">DRAW</div>
                                <div class="hidden" id="place-bet-draw">
                                    <div class="flex justify-center items-center">
                                        <div id="bg-bet-draw" class="flex bg-neutral-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 shadow-md text-xs justify-center items-center absolute">
                                            <div class="absolute betValue">0</div>
                                        </div>
                                    </div>
                                </div>
                                <div>x3</div>
                        </button>
                        <button data-value="WALA-" class="radio container bg-blue-700 py-2 px-2 border-2 border-yellow-50 rounded-lg hover:bg-blue-500 focus:bg-blue-500 shadow-md text-center bet-option"
                            id="wala">
                                <div class="pb-2">WALA</div>
                                <div class="pb-2">TOTAL AMOUNT OF BETS</div>
                                <div class="hidden" id="place-bet-wala">
                                    <div class="flex justify-center items-center">
                                        <div id="bg-bet-wala" class="flex bg-neutral-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 shadow-md text-xs justify-center items-center absolute">
                                            <div class="absolute betValue">0</div>
                                        </div>
                                    </div>
                                </div>
                                <div>WINNING PERCENTAGE</div>
                        </button>
                    </div>
                    
                    <div class="pb-4">
                        <h2 class="text-center">CHOOSE AMOUNT TO BET</h2>
                    </div>
                    <div class="flex justify-center flex-row gap-3">
                        <button onclick="addBet(5), addbet(5)" class="flex bg-green-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-green-300 focus:bg-green-300 shadow-md text-xs justify-center items-center">
                            <div class="absolute">5</div>
                        </button>
                        <button onclick="addBet(10), addbet(10)" class="flex bg-amber-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-amber-500 focus:bg-amber-500 shadow-md text-xs justify-center items-center">
                            <div class="absolute">10</div>
                        </button>
                        <button onclick="addBet(20), addbet(20)" class="flex bg-orange-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-orange-300 focus:bg-orange-300 shadow-md text-xs justify-center items-center">
                            <div class="absolute">20</div>
                        </button>
                        <button onclick="addBet(50), addbet(50)" class="flex bg-red-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-red-300 focus:bg-red-300 shadow-md text-xs justify-center items-center">
                            <div class="absolute">50</div>
                        </button>
                    </div>
                    <div class="flex justify-center flex-row gap-3 pt-4">
                        <button onclick="addBet(100), addbet(100)" class="flex bg-violet-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-violet-300 focus:bg-violet-300 shadow-md text-xs justify-center items-center">
                            <div class="absolute">100</div>
                        </button>
                        <button onclick="addbet(500)" class="flex bg-yellow-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-yellow-300 focus:bg-yellow-300 shadow-md text-xs justify-center items-center">
                            <div class="absolute">500</div>
                        </button>
                        <button onclick="addbet(1000)" class="flex bg-blue-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-blue-300 focus:bg-blue-300 shadow-md text-xs justify-center items-center">
                            <div class="absolute">1000</div>
                        </button>
                    </div>
                    <div class="flex justify-center flex-row gap-3 pt-6">
                        <button onclick="clearBet()" class="flex bg-red-700 rounded-lg py-2 px-4 border-2 border-yellow-50 hover:bg-red-500 shadow-md justify-center items-center">
                            <div>CLEAR</div>
                        </button>
                    </div>
                </div>
                </nav>
        </div>
    </div>
    <!--bside ends here-->

    <!--scripts-->
    <script src= "https://player.twitch.tv/js/embed/v1.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var current_bet = 0;
        var bet =0;

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

        var choice
        $('.radio-group .radio').click(function(){
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
            choice = $(this).attr('data-value');

            $('#bet').text(choice+current_bet)
        });

        function addBet(amount)
        {
            current_bet += amount
            $('#bet').text(choice+current_bet)
        }

        function addbet(value) {
            var x = bet += value
            $('.betValue').text(bet.toString())

            if (x >= 5 && x <= 9) {
                $('#bg-bet-meron').css('background', '#22c55e');
                $('#bg-bet-draw').css('background', '#22c55e');
                $('#bg-bet-wala').css('background', '#22c55e');
            }
            else if (x >= 10 && x <= 19) {
                $('#bg-bet-meron').css('background', '#b45309');
                $('#bg-bet-draw').css('background', '#b45309');
                $('#bg-bet-wala').css('background', '#b45309');
            }
            else if (x >= 20 && x <= 49) {
                $('#bg-bet-meron').css('background', '#f97316');
                $('#bg-bet-draw').css('background', '#f97316');
                $('#bg-bet-wala').css('background', '#f97316');
            }
            else if (x >= 50 && x <= 99) {
                $('#bg-bet-meron').css('background', '#ef4444');
                $('#bg-bet-draw').css('background', '#ef4444');
                $('#bg-bet-wala').css('background', '#ef4444');
            }
            else if (x >= 100 && x <= 499) {
                $('#bg-bet-meron').css('background', '#a855f7');
                $('#bg-bet-draw').css('background', '#a855f7');
                $('#bg-bet-wala').css('background', '#a855f7');
            }
            else if (x >= 500 && x <= 999) {
                $('#bg-bet-meron').css('background', '#eab308');
                $('#bg-bet-draw').css('background', '#eab308');
                $('#bg-bet-wala').css('background', '#eab308');
            }
            else if (x >= 1000 && x <= 4999) {
                $('#bg-bet-meron').css('background', '#3b82f6');
                $('#bg-bet-draw').css('background', '#3b82f6');
                $('#bg-bet-wala').css('background', '#3b82f6');
            }
            else if (x >= 5000 && x <= 9999) {
                $('#bg-bet-meron').css('background', '#84cc16');
                $('#bg-bet-draw').css('background', '#84cc16');
                $('#bg-bet-wala').css('background', '#84cc16');
            }
            else {
                $('#bg-bet-meron').css('background', '#14b8a6');
                $('#bg-bet-draw').css('background', '#14b8a6');
                $('#bg-bet-wala').css('background', '#14b8a6');
            }
        }

        jQuery('#meron').on('click', function() {
            $('.betValue').text(bet.toString())
            $('#place-bet-meron').show();
            $('#place-bet-draw').hide();
            $('#place-bet-wala').hide();
        });

        jQuery('#draw').on('click', function() {
            $('.betValue').text(bet.toString())
            $('#place-bet-meron').hide();
            $('#place-bet-draw').show();
            $('#place-bet-wala').hide();
        });

        jQuery('#wala').on('click', function() {
            $('.betValue').text(bet.toString())
            $('#place-bet-meron').hide();
            $('#place-bet-draw').hide();
            $('#place-bet-wala').show();
        });

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