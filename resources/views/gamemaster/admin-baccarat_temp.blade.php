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
<body class="bg-custom bg-fixed bg-cover text-yellow-50">
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


    <div class="w-full justify-center hidden px-64 xl:flex">
    <!--sidebar-->
        <div class="justify-center bg-neutral-800 w-64 font-semi-bold min-h-screen left-0 fixed hidden md:flex">
            <nav class="pt-16 w-64 text-left">
                <div> </div>
            </nav>
        </div>
    <!--sidebar ends here-->

    <!--content-->
        <div class="m-5 pt-12 text-xl font-semi-bold flex-col w-full px-4">
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

            <!--livestream-->
            <div class="py-3 justify-center items-center hidden xl:flex 2xl:hidden">
                <div id="stream-xl" class="w-full"></div>
            </div>
            <div class="py-3 justify-center items-center hidden 2xl:flex">
                <div id="stream-2xl" class="w-full"></div>
            </div>
            <!--livestream ends here-->

        </div>
    <!--content ends here-->

    <!--bside-->
        <div class="justify-center bg-neutral-800 w-64 font-semi-bold fixed right-0 min-h-screen hidden md:flex">
                <nav class="mt-20 w-64 text-center">
                    <div class="block px-10 py-2 w-full bg-yellow-400 hover:bg-yellow-300 cursor-pointer border-2 border-x-0 border-yellow-50"
                    id="open-table" onclick="openTable()">Open Table</div>
                    <div class="hidden" id="close-table">
                        <div class="block px-10 py-2 w-full bg-yellow-400 hover:bg-yellow-300 cursor-pointer border-2 border-x-0 border-yellow-50">Close Table</div>
                    </div>
                        <div class="hidden px-10 py-2 w-full bg-orange-400 hover:bg-orange-300 cursor-pointer border-t-0 border-2 border-x-0 border-yellow-50"
                        id="open-betting" onclick="openBetting()">Open Betting</div>
                        <div class="hidden px-10 py-2 w-full bg-orange-400 hover:bg-orange-300 cursor-pointer border-t-0 border-2 border-x-0 border-yellow-50"
                        id="close-betting" onclick="closeBetting()">Close Betting</div>
                        <div class="hidden" id="cards-drawn">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 1" id="p1" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 1" id="b1" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 2" id="p2" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 2" id="b2" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 3" id="pe" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 3" id="be" maxlength="2">
                        </div>
                </nav>
        </div>
    <!--bside ends here-->
    </div>


    <!--scripts-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src= "https://player.twitch.tv/js/embed/v1.js"></script>

    <script>
        var gameroom = "{{$gameroom->id}}";
        var urlforupdatingresults = "{{route('update-game-result')}}";
        var result_id = 0;
        var gameresult = 0;
        var game_id = 0;
        var playerhand = 0;
        var bankerhand = 0;
        var player3rd = 0;
        var p1, p2, p3, b1, b2, b3;

        function openTable() {
            var url = "{{route('baccarat-game-room.create')}}";

            axios.get(url, null).then((response) => {
                game_id = response.data
                $('#open-betting').toggle();
                $('#close-table').toggle();
                $('#open-table').toggle();
            }).catch((error) => {
                console.log(error.response.data);
            })
        }

        function closeTable() {
            reset();
        }

        function reset() {
            game_id = 0;
            playerhand = 0;
            bankerhand = 0;
            player3rd = 0;

            $('#close-table').toggle();
            $('#open-table').toggle();
            $('#open-betting').css('display', 'none');
            $('#close-betting').css('display', 'none');
            $('#cards-drawn').css('display', 'none');
        }

        function openBetting()
        {
            var url = "{{route('update-game-status')}}"

            axios.post(url, {
                status: 1,
                id: game_id
            }).then(function (response) {
                $('#open-betting').toggle();
                $('#close-betting').toggle();
                $('#cards-drawn').css('display', 'none');
            }).catch(function (error) {
                console.log(error.response.data)
            })
        }

        function closeBetting()
        {

            var url = "{{route('update-game-status')}}"

            axios.post(url, {
                status: 3,
                id: game_id
            }).then(function (response) {
                $('#close-betting').toggle();
                $('#open-betting').toggle();
                $('#cards-drawn').toggle();
            }).catch(function (error) {
                console.log(error.response.data)
            })

            var url2 = "{{route('baccarat-game-result.store')}}"
            axios.post(url2, {
                id: game_id
            }).then(function(response) {
                $('#p1').focus();
                result_id = response.data;
            }).catch(function (error) {
                console.log(error.response.data);
            })
        }

        $('#p1').on('input', function ()
        {
            p1 = $(this).val()
            if(p1.length == 2)
            {
                axios.post(urlforupdatingresults, {
                    id: result_id,
                    column: 'player_hand',
                    data: p1
                }).then(function (response) {
                    $('#b1').focus();
                    var x = p1.split("");
                    playerhand+=parseInt(x[1]);
                    console.log(playerhand);
                }).catch(function (error) {
                    console.log(error.response.data)
                })
            }
        })

        $('#b1').on('input', function ()
        {
            b1 = $(this).val()
            if(b1.length == 2)
            {
                axios.post(urlforupdatingresults, {
                    id: result_id,
                    column: 'banker_hand',
                    data: b1
                }).then(function (response) {

                    $('#p2').focus()
                    var x = b1.split("");
                    bankerhand+=parseInt(x[1]);
                    console.log(bankerhand);
                }).catch(function (error) {
                    console.log(error.response.data)
                })
            }
        })

        $('#p2').on('input', function ()
        {
            p2 = $(this).val()
            if(p2.length == 2)
            {
                axios.post(urlforupdatingresults, {
                    id: result_id,
                    column: 'player_hand',
                    data: p1+p2
                }).then(function (response) {
                    $('#b2').focus();
                    var x = p2.split("");
                    playerhand+=parseInt(x[1]);
                    console.log(playerhand);
                }).catch(function (error) {
                    console.log(error.response.data)
                })
            }
        })

        $('#b2').on('input', function ()
        {
            b2 = $(this).val()
            if(b2.length == 2)
            {
                axios.post(urlforupdatingresults, {
                    id: result_id,
                    column: 'banker_hand',
                    data: b1+b2
                }).then(function (response) {
                    var x = b2.split("");
                    bankerhand+=parseInt(x[1]);
                    checkPlayer();
                }).catch(function (error) {
                    console.log(error.response.data)
                })
            }
        })

        $('#pe').on('input', function ()
        {
            pe = $(this).val()
            if(pe.length == 2)
            {
                axios.post(urlforupdatingresults, {
                    id: result_id,
                    column: 'player_hand',
                    data: p1+p2+pe
                }).then(function (response) {
                    var x = pe.split("");
                    playerhand += parseInt(x[1]);
                    player3rd = parseInt(x[1]);
                    checkBanker();
                }).catch(function (error) {
                    console.log(error.response.data)
                })
            }
        })

        $('#be').on('input', function ()
        {
            be = $(this).val()
            if(be.length == 2)
            {
                axios.post(urlforupdatingresults, {
                    id: result_id,
                    column: 'banker_hand',
                    data: b1+b2+be
                }).then(function (response) {
                    var x = be.split("");
                    bankerhand += parseInt(x[1]);
                    checkWinner();
                }).catch(function (error) {
                    console.log(error.response.data)
                })
            }
        })

        function checkWinner()
        {
            if(playerhand > 10){
                playerhand -= 10
            }

            if(bankerhand > 10) {
                bankerhand -= 10
            }

            if(playerhand == bankerhand)
            {
                gameresult = 0;
            }
            else if(playerhand > bankerhand)
            {
                gameresult = 1;
            }
            else {
                gameresult = 2;
            }

            axios.post(urlforupdatingresults, {
                    id: result_id,
                    column: 'result',
                    data: gameresult
                }).then((response) => {
                    reset();
                }).catch((error) => {
                    console.log('error');
                })

        }

        function checkPlayer()
        {
            if(playerhand > 10)
            {
                playerhand -= 10;
            }

            var playerDraw = computePlayer();

            switch(playerDraw) {
                case 0:
                    $('#pe').focus();
                    break;
                case 1:
                    $('#be').focus();
                    break;
                case 2:
                    checkWinner();
                    break;
                default:
                    checkWinner();
                    break;

            }
        }

        function checkBanker()
        {
            if(bankerhand > 10)
            {
                bankerhand -= 10;
            }

            var bankerDraw = computeBanker();

            switch(bankerDraw) {
                case 1:
                    $('#be').focus();
                    break;
                case 0:
                    checkWinner();
                    break;
                default:
                    checkWinner();
                    break;
            }
        }

        function computePlayer()
        {
            if(playerhand <= 5)
            {
                return 0;
            }
            else if(playerhand == 6 || playerhand == 7){
                return 1;
            }
            else {
                return 2;
            }
        }

        function computeBanker()
        {
            switch(bankerhand)
            {
                case 0:
                case 1:
                case 2:
                    return 0;
                    break;
                case 3:
                    if(player3rd == 8)
                    {
                        return 0;
                    }
                    else {
                        return 1;
                    }
                    break;
                case 4:
                    if(player3rd <= 1 || player3rd == 8 || player3rd == 9)
                    {
                        return 0;
                    }
                    else {
                        return 1;
                    }
                    break;
                case 5:
                    if(player3rd >=4 && player3rd <= 7)
                    {
                        return 1;
                    }
                    else {
                        return 0;
                    }
                    break;
                case 6:
                    if(player3rd == 6 || player3rd == 7)
                    {
                        return 1;
                    }
                    else {
                        return 0;
                    }
                    break;
                case 7:
                    return 0;
                    break;
                case 8:
                case 9:
                    return 0;
                    break;
                default:
                    return 0;
            }
        }

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

        var channelT = "{{$gameroom->feed_source}}"

        var options = {
            muted: true,
            controls: false,
            autoplay: false,
            width: '100%',
            height: 720,
            channel: channelT,
            parent: ["localhost", "online-casino.test"]
        };
        var player = new Twitch.Player("stream-2xl", options);

        var options = {
            muted: true,
            controls: false,
            autoplay: false,
            width: '100%',
            height: 450,
            channel: channelT,
            parent: ["localhost", "online-casino.test"]
        };
        var player = new Twitch.Player("stream-xl", options);
    </script>

    <!--scripts ends here-->
</body>
</html>
