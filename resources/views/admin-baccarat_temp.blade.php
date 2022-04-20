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

    
    <div class="flex w-full justify-center">
    <!--sidebar-->
        <div class="justify-center bg-neutral-800 w-64 font-semi-bold min-h-screen left-0 fixed hidden md:flex">
            <nav class="pt-16 w-64 text-left">
                <div> </div>
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
                <nav class="mt-20 w-64 text-center">
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
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 1" id="p1" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 1" id="b1" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 2" id="p2" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 2" id="b2" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Player Card 3" id="pe" maxlength="2">
                            <input class="block px-10 py-2 w-full bg-neutral-700 focus:outline-none border-t-0 border-2 border-x-0 border-yellow-50" type="text" placeholder="Banker Card 3" id="be" maxlength="2">
                        </div>
                    <div class="flex">
                        <div class="hidden px-10 py-2 w-full bg-red-700 hover:bg-red-500 cursor-pointer border-t-0 border-l-0 border-2 border-yellow-50" id="banker-wins" style="display: hidden">Banker Wins</div>
                        <div class="hidden px-10 py-2 w-full bg-blue-700 hover:bg-blue-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50" id="player-wins" style="display: hidden">Player Wins</div>
                    </div>
                    <div class="hidden px-10 py-2 w-full bg-green-700 hover:bg-green-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50" id="game-tie" style="display: hidden">Tie</div>
                    <div class="hidden px-10 py-2 w-full bg-green-700 hover:bg-green-500 cursor-pointer border-t-0 border-x-0 border-2 border-yellow-50" id="game-new" style="display: hidden">New Game</div>

                </nav>
        </div>
    <!--bside ends here-->
    </div>
    

    <!--scripts-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src= "https://player.twitch.tv/js/embed/v1.js"></script>

    <script>
        var p1, b1, p2, b2, pe, be
        var game_id
        var urlforupdatingresults = "{{route('update-game-result')}}"
        var result_id
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
                    console.log(response.data)
                }).catch(function (error) {
                    console.log(error.response.data)
                })
                $('#b1').focus()
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
                    console.log(response.data)
                }).catch(function (error) {
                    console.log(error.response.data)
                })
                $('#p2').focus()
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
                    console.log(response.data)
                }).catch(function (error) {
                    console.log(error.response.data)
                })
                $('#b2').focus()
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
                    $('#banker-wins').toggle()
                    $('#player-wins').toggle()
                    $('#game-tie').toggle()
                }).catch(function (error) {
                    console.log(error.response.data)
                })
                $('#pe').focus()
            }

            console.log(p1+p2+b1+b2)
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
                    console.log(response.data)
                }).catch(function (error) {
                    console.log(error.response.data)
                })
                $('#be').focus()
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
                    console.log(response.data)
                }).catch(function (error) {
                    console.log(error.response.data)
                })
            }
        })

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
                game_id = response.data['id']
            }).catch(function (error) {
                console.log(error.response.data)
            })
        }

        jQuery('#open-table').on('click', function() {
            $('#open-betting').toggle();
            $('#close-table').toggle();
            $('#open-table').toggle();

            new_game()
        });

        function new_game()
        {
            var url = "{{route('baccarat-game-room.create')}}"

            axios.get(url, null).then(function (response) {
                game_id = response.data
            }).catch(function (error) {
                console.log(error.response.data)
            })
        }

        jQuery('#open-betting').on('click', function() {
            $('#open-betting').toggle();
            $('#close-betting').toggle();
            $('#cards-drawn').css('display', 'none');

            var url = "{{route('update-game-status')}}"

            axios.post(url, {
                status: 1,
                id: game_id
            }).then(function (response) {
                console.log(response.data)
            }).catch(function (error) {
                console.log(error.response.data)
            })
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
            var url = "{{route('update-game-status')}}"

            axios.post(url, {
                status: 3,
                id: game_id
            }).then(function (response) {
                console.log(response.data)
            }).catch(function (error) {
                console.log(error.response.data)
            })

            var url2 = "{{route('baccarat-game-result.store')}}"
            axios.post(url2, {
                id: game_id
            }).then(function(response) {
                result_id = response.data
            }).catch(function (error) {
                console.log(error.response.data);
            })
            $('#p1').focus();
        });

        jQuery('#user').on('click', function() {
            $('#logout').toggle();
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

        $('#player-wins').on('click', function() {
            axios.post(urlforupdatingresults, {
                id: result_id,
                column: 'result',
                data: 1
            }).then(function (response) {
                reset()
            }).catch(function (error) {
                console.log(error.response.data)
            })
        })

        $('#banker-wins').on('click', function() {
            axios.post(urlforupdatingresults, {
                id: result_id,
                column: 'result',
                data: 2
            }).then(function (response) {
                reset()
            }).catch(function (error) {
                console.log(error.response.data)
            })
        })

        $('#game-tie').on('click', function () {
            axios.post(urlforupdatingresults, {
                id: result_id,
                column: 'result',
                data: 3
            }).then(function (response) {
                reset()
            }).catch(function (error) {
                console.log(error.response.data)
            })
        })


        function reset(){
            $('#p1').val('')
            $('#p2').val('')
            $('#pe').val('')
            $('#b1').val('')
            $('#b2').val('')
            $('#be').val('')
            $('#close-table').toggle()
            $('#open-table').toggle()
            $('#open-betting').css('display', 'none')
            $('#close-betting').css('display', 'none')
            $('#cards-drawn').css('display', 'none')
            $('#player-wins').toggle()
            $('#banker-wins').toggle()
            $('#game-tie').toggle()
            new_game()
        }
    </script>

    <!--scripts ends here-->
</body>
</html>
