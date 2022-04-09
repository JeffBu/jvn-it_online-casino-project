<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bacarrat</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
                    <img src="{{asset('media/img/logo.png')}}" alt="user-logo" class="h-8 w-8 rounded-full">
                    <p id="" class="font-semibold text-orange-400">admin354</p>
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
                <div> </div>
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
                        <source src="{{asset('media/videos/casino-trailer.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    <!--content ends here-->

    <!--bside-->
        <div class="relative min-h-screen flex">
            <div class="flex justify-center bg-neutral-800 w-64 font-semi-bold">
                <nav class="mt-20 absolute w-64 text-center">
                    <div class="block px-10 py-2 w-full bg-yellow-400 hover:bg-yellow-300 cursor-pointer border-2 border-x-0 border-yellow-50"
                    id="open-table">Open Table</div>
                    <div class="hidden" id="close-table">
                        <div class="block px-10 py-2 w-full bg-yellow-400 hover:bg-yellow-300 cursor-pointer border-2 border-x-0 border-yellow-50">Close Table</div>
                    </div>
                        <div class="hidden px-10 py-2 w-full bg-orange-400 hover:bg-orange-300 cursor-pointer border-t-0 border-2 border-x-0 border-yellow-50"
                        id="open-betting">Open Betting</div>
                        <div class="hidden px-10 py-2 w-full bg-orange-400 hover:bg-orange-300 cursor-pointer border-t-0 border-2 border-x-0 border-yellow-50"
                        id="close-betting">Close Betting</div>
                        <div class="hidden" id="cards-drawn">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 1">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 3">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 1">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 3">
                        </div>
                    <div class="flex">
                        <div class="block px-10 py-2 w-full bg-red-700 hover:bg-red-500 cursor-pointer border-t-0 border-l-0 border-2 border-yellow-50">Banker Wins</div>
                        <div class="block px-10 py-2 w-full bg-blue-700 hover:bg-blue-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50">Player Wins</div>
                    </div>
                    <div class="block px-10 py-2 w-full bg-green-700 hover:bg-green-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50">Tie</div>
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

        jQuery('#open-table').on('click', function() {
            $('#open-betting').toggle();
            $('#close-table').toggle();
            $('#open-table').toggle();
        });

        jQuery('#open-betting').on('click', function() {
            $('#open-betting').toggle();
            $('#close-betting').toggle();
            $('#cards-drawn').css('display', 'none');
        });

        jQuery('#close-table').on('click', function() {
            $('#close-table').toggle();
            $('#open-table').toggle();
            $('#open-betting').css('display', 'none');
            $('#close-betting').css('display', 'none');
            $('#cards-drawn').css('display', 'none');
        });

        jQuery('#close-betting').on('click', function() {
            $('#close-betting').toggle();
            $('#open-betting').toggle();
            $('#cards-drawn').toggle();
        });

        jQuery('#user').on('click', function() {
            $('#logout').toggle();
        });

        $(document).click(function() {})
    </script>
    
    <!--scripts ends here-->
</body>
</html>
