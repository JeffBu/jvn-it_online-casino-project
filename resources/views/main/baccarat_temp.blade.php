<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bacarrat</title>
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
<body class="bg-custom bg-fixed bg-cover text-yellow-50" onload="getcurrentgame()">
    <header class="flex flex-row bg-neutral-900 justify-between items-center py-5 px-5 h-16 text-sm tracking-widest fixed w-full z-50" id="header_frame">

        <a href="#" class="">
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
        </a>

        <div class="text-xl font-bold">Room Name</div>

        <div class="flex gap-8 items-center">
            <div>
                <div class="flex items-center gap-3 cursor-pointer" id="user">
                    <img src="{{asset('media/img/user-logo.png')}}" alt="user-logo" class="h-8 w-8 rounded-full">
                    <p id="" class="font-semibold">zombakel</p>
                </div>
                <div class="hidden items-center gap-2 border-2 border-neutral-700 hover:border-neutral-600 hover:bg-neutral-700 bg-neutral-800 justify-center mt-3 w-28 px-2 cursor-pointer absolute"
                id="logout">
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
                        <a href="#" class="block px-10 py-2 w-full hover:bg-neutral-700">My Coins / Wallet</a>
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
            <div class="flex flex-row items-center bg-neutral-800 mt-3 px-4 py-2 rounded-md">
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-green-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
            </div>
            <div class="py-3">
                <div>
                    <video width="w-full" autoplay muted loop id="video"
                    class="rounded-lg">
                        <source src="{{asset('media/videos/casino-trailer.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="px-2 bg-neutral-800 rounded-md overflow-auto">
                <h2 class="text-center pt-2">*SCROLL OR SWIPE DOWN TO SEE MATCH HISTORY</h2>

                <div class="flex items-start flex-start py-4 px-2">
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-green-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-red-600 p-2 mx-auto rounded-full"></div>
                    </div>
                    <div class="grid row grid-rows-10 gap-2 py-4 px-2">
                        <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                        <div class="border-2 border-yellow-50 bg-blue-600 p-2 mx-auto rounded-full"></div>
                    </div>
                </div>
            </div>

        </div>
    <!--content ends here-->

    <!--bside-->
        <div class="relative min-h-screen flex">
            <div class="flex justify-center bg-neutral-800 w-64 font-semi-bold">
                <nav class="pt-20 fixed w-64 text-left px-4">
                    <div class="pt-2 mb-4">
                        <h3 class="text-center" id="game_number">Game ID: </h3>
                    </div>
                    <div class="pt-2 pb-4">
                        <h2 class="text-center" id="status">New Game</h2>
                    </div>
                    <div class="radio-group">
                        <div class="flex justify-center pb-2 gap-2">
                            <button class="container bg-red-700 py-2 px-2 border-2 border-yellow-50 rounded-lg hover:bg-red-500 focus:bg-red-500 shadow-md text-center bet-option radio" data-value="B-" style="cursor: pointer"
                            id="banker">
                                <div>BANKER</div>
                                <div class="hidden" id="place-bet-b">
                                    <div class="flex justify-center items-center">
                                        <div  id="bg-bet-b" class="flex bg-neutral-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 shadow-md text-xs justify-center items-center absolute">
                                            <div class="absolute betValue">0</div>
                                        </div>
                                    </div>
                                </div>
                                <div>1:1</div>
                            </button>
                            <button data-value="T-" class="radio container bg-green-700 py-2 px-2 border-2 border-yellow-50 rounded-lg hover:bg-green-500 focus:bg-green-500 shadow-md text-center bet-option"
                            id="tie">
                                <div>TIE</div>
                                <div class="hidden" id="place-bet-t">
                                    <div class="flex justify-center items-center">
                                        <div id="bg-bet-t" class="flex bg-neutral-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 shadow-md text-xs justify-center items-center absolute">
                                            <div class="absolute betValue">0</div>
                                        </div>
                                    </div>
                                </div>
                                <div>8:1</div>
                            </button>
                            <button data-value="P-" class="radio container bg-blue-700 py-2 px-2 border-2 border-yellow-50 rounded-lg hover:bg-blue-500 focus:bg-blue-500 shadow-md text-center bet-option"
                            id="player">
                                <div>PLAYER</div>
                                <div class="hidden" id="place-bet-p">
                                    <div class="flex justify-center items-center">
                                        <div id="bg-bet-p" class="flex bg-neutral-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 shadow-md text-xs justify-center items-center absolute">
                                            <div class="absolute betValue">0</div>
                                        </div>
                                    </div>
                                </div>
                                <div>1:1</div>
                            </button>
                        </div>
                        <div class="flex justify-center pb-2 gap-2">
                            <button data-value="BP-" class="radio container bg-red-700 py-2 px-2 border-2 border-yellow-50 rounded-lg hover:bg-red-500 focus:bg-red-500 shadow-md text-center bet-option"
                            id="banker-pair">
                                <div>BANKER</div>
                                <div>PAIR</div>
                                <div class="hidden" id="place-bet-bp">
                                    <div class="flex justify-center items-center">
                                        <div id="bg-bet-bp" class="flex bg-neutral-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 shadow-md text-xs justify-center items-center absolute">
                                            <div class="absolute betValue">0</div>
                                        </div>
                                    </div>
                                </div>
                                <div>8:1</div>
                            </button>
                            <button data-value="PP-" class="radio container bg-blue-700 py-2 px-2 border-2 border-yellow-50 rounded-lg hover:bg-blue-500 focus:bg-blue-500 shadow-md text-center bet-option"
                            id="player-pair">
                                <div>PLAYER</div>
                                <div>PAIR</div>
                                <div class="hidden" id="place-bet-pp">
                                    <div class="flex justify-center items-center">
                                        <div id="bg-bet-pp" class="flex bg-neutral-700 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 shadow-md text-xs justify-center items-center absolute">
                                            <div class="absolute betValue">0</div>
                                        </div>
                                    </div>
                                </div>
                                <div>8:1</div>
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="py-4">
                            <h2 class="text-center">CHOOSE AMOUNT TO BET</h2>
                        </div>
                        <div class="flex justify-center flex-row gap-3">
                            <button onclick="addBet(20), addbet(20)" class="flex bg-orange-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-orange-300 focus:bg-orange-300 shadow-md text-xs justify-center items-center"
                            id="bet-20">
                                <div class="absolute">20</div>
                            </button>
                            <button onclick="addBet(50), addbet(50)" class="flex bg-red-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-red-300 focus:bg-red-300 shadow-md text-xs justify-center items-center"
                            id="bet-50">
                                <div class="absolute">50</div>
                            </button>
                            <button onclick="addBet(100), addbet(100)" class="flex bg-violet-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-violet-300 focus:bg-violet-300 shadow-md text-xs justify-center items-center"
                            id="bet-100">
                                <div class="absolute">100</div>
                            </button>
                        </div>
                        <div class="flex justify-center flex-row gap-3 pt-4">
                            <button onclick="addbet(500)" class="flex bg-yellow-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-yellow-300 focus:bg-yellow-300 shadow-md text-xs justify-center items-center"
                            id="bet-500">
                                <div class="absolute">500</div>
                            </button>
                            <button onclick="addbet(1000)" class="flex bg-blue-500 rounded-full py-4 px-4 border-dashed border-2 border-yellow-50 hover:bg-blue-300 focus:bg-blue-300 shadow-md text-xs justify-center items-center"
                            id="bet-1000">
                                <div class="absolute">1000</div>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="pb-4">
                            <h2 class="text-center">WINNING HAND</h2>
                        </div>
                        <div class="pb-4">
                            <h1> Your Bet: <span id="bet"></span></h1>
                            <h1> Your Winnings: </h1>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </div>
    <!--bside ends here-->

    <!--scripts-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var current_bet = 0;
        var bet = 0;
        jQuery(window).on('scroll', function() {
            if(jQuery(window).scrollTop() > 0) {
                jQuery('#header_frame').css('background-color', '#171717');
            }
            else {
                jQuery('#header_frame').css('background-color', '#171717');
            }
        });

        $(document).scroll(function() {})

        $(function () {
            setInterval(() => {
                getcurrentgame();
            }, 1000);

        })

        function getcurrentgame() {
            var url = "{{route('get-current-game')}}"

            axios.get(url, {
                room_id : 1
            }).then(function (response) {
                $('#game_number').text('Game ID: '+ response.data['id'])
                var status = response.data['status']
                switch(status) {
                    case 0 :
                        $('#status').text('New Game')
                        break;
                    case 1:
                        $('#status').text('Place Your Bets')
                        break;
                    case 2:
                        $('#status').text('Bets Closing')
                        break;
                    case 3:
                        $('#status').text('Wait for Next Game')
                        $('button').attr('disabled', 'disabled')
                        break;
                    default:
                        console.log('eloo')
                        break;
                    }
            }).catch(function (error) {
                console.log(error.response.data)
            })
        }
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

        jQuery('#user').on('click', function() {
            $('#logout').toggle();
        });

        jQuery('#banker').on('click', function() {
            $('.betValue').text(bet.toString())
            $('#place-bet-b').show();
            $('#place-bet-t').hide();
            $('#place-bet-p').hide();
            $('#place-bet-bp').hide();
            $('#place-bet-pp').hide();
        });

        jQuery('#tie').on('click', function() {
            $('.betValue').text(bet.toString())
            $('#place-bet-b').hide();
            $('#place-bet-t').show();
            $('#place-bet-p').hide();
            $('#place-bet-bp').hide();
            $('#place-bet-pp').hide();
        });

        jQuery('#player').on('click', function() {
            $('.betValue').text(bet.toString())
            $('#place-bet-b').hide();
            $('#place-bet-t').hide();
            $('#place-bet-p').show();
            $('#place-bet-bp').hide();
            $('#place-bet-pp').hide();
        });

        jQuery('#banker-pair').on('click', function() {
            $('.betValue').text(bet.toString())
            $('#place-bet-b').hide();
            $('#place-bet-t').hide();
            $('#place-bet-p').hide();
            $('#place-bet-bp').show();
            $('#place-bet-pp').hide();
        });

        jQuery('#player-pair').on('click', function() {
            $('.betValue').text(bet.toString())
            $('#place-bet-b').hide();
            $('#place-bet-t').hide();
            $('#place-bet-p').hide();
            $('#place-bet-bp').hide();
            $('#place-bet-pp').show();
        });

        $(document).click(function() {})
        
        function addbet(value) {
            var x = bet += value
            $('.betValue').text(bet.toString())

            if (x >= 20 && x <= 49) {
                $('#bg-bet-b').css('background', '#f97316');
                $('#bg-bet-t').css('background', '#f97316');
                $('#bg-bet-p').css('background', '#f97316');
                $('#bg-bet-bp').css('background', '#f97316');
                $('#bg-bet-pp').css('background', '#f97316');
            }
            else if (x >= 50 && x <= 99) {
                $('#bg-bet-b').css('background', '#ef4444');
                $('#bg-bet-t').css('background', '#ef4444');
                $('#bg-bet-p').css('background', '#ef4444');
                $('#bg-bet-bp').css('background', '#ef4444');
                $('#bg-bet-pp').css('background', '#ef4444');
            }
            else if (x >= 100 && x <= 499) {
                $('#bg-bet-b').css('background', '#a855f7');
                $('#bg-bet-t').css('background', '#a855f7');
                $('#bg-bet-p').css('background', '#a855f7');
                $('#bg-bet-bp').css('background', '#a855f7');
                $('#bg-bet-pp').css('background', '#a855f7');
            }
            else if (x >= 500 && x <= 999) {
                $('#bg-bet-b').css('background', '#eab308');
                $('#bg-bet-t').css('background', '#eab308');
                $('#bg-bet-p').css('background', '#eab308');
                $('#bg-bet-bp').css('background', '#eab308');
                $('#bg-bet-pp').css('background', '#eab308');
            }
            else if (x >= 1000 && x <= 4999) {
                $('#bg-bet-b').css('background', '#3b82f6');
                $('#bg-bet-t').css('background', '#3b82f6');
                $('#bg-bet-p').css('background', '#3b82f6');
                $('#bg-bet-bp').css('background', '#3b82f6');
                $('#bg-bet-pp').css('background', '#3b82f6');
            }
            else if (x >= 5000 && x <= 9999) {
                $('#bg-bet-b').css('background', '#22c55e');
                $('#bg-bet-t').css('background', '#22c55e');
                $('#bg-bet-p').css('background', '#22c55e');
                $('#bg-bet-bp').css('background', '#22c55e');
                $('#bg-bet-pp').css('background', '#22c55e');
            }
            else {
                $('#bg-bet-b').css('background', '#14b8a6');
                $('#bg-bet-t').css('background', '#14b8a6');
                $('#bg-bet-p').css('background', '#14b8a6');
                $('#bg-bet-bp').css('background', '#14b8a6');
                $('#bg-bet-pp').css('background', '#14b8a6');
            }
        }
    </script>

    <!--scripts ends here-->
</body>
</html>
