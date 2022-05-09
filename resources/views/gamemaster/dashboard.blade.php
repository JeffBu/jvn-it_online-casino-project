<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

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

        <a href="#" class="">
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
        </a>

        <div class="flex gap-8 items-center">
            <div class="cursor-pointer" id="user">
                <div class="flex items-center gap-3">
                    <img src="{{asset('media/img/logo.png')}}" alt="user-logo" class="h-8 w-8 rounded-full">
                    <p id="" class="font-semibold text-orange-400">admin354</p>
                </div>
                <div class="hidden items-center gap-2 border-2 border-neutral-700 hover:border-neutral-600 hover:bg-neutral-700 bg-neutral-800 justify-center mt-3 w-28 cursor-pointer absolute" id="logout">
                    <a href="{{route('logout')}}" class="py-2 flex justify-center gap-2">Log Out <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
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
                        <a href="#" onclick="toggleModal()" class="flex items-center px-5 py-2 w-full hover:bg-neutral-700 gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg> Create Room</a>
                    </div>
                </div>
            </nav>
        </div>
    <!--sidebar ends here-->

    <!--content-->
        <div class="flex-1 m-5 pt-14 text-xl font-semi-bold w-full">
            <div class="flex items-center gap-5 text-xl font-semibold w-full justify-center px-4 py-2 bg-neutral-800 rounded-lg border border-neutral-600">
                <a href="#" class="hover:text-orange-400 text-yellow-50 focus:text-orange-400 focus:outline-none" id="tabs-sabong">Sabong</a>
                <a href="#" class="hover:text-orange-400 text-yellow-50 focus:text-orange-400" id="tabs-baccarat">Baccarat</a>
            </div>
            <!--sabong-->
            <div id="content-sabong">
                <div class="grid col grid-cols-2 gap-8 px-5 py-5">

                    @foreach ($gamerooms as $gameroom)
                        @if ($gameroom->game_id == 1)
                            <a href="{{route('manage-game-room', ['game_room_id' => $gameroom->id])}}" class="hover:-m-0.5">
                                <div width="640" height="480"
                                class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5" >
                                    <div id="stream-sm" class="w-full"></div>
                                </div>

                                {{-- <video src="{{asset('media/videos/casino-trailer.mp4')}}" width="640" height="480" autoplay muted loop id="video"
                                class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                                    <source src="/videos/casino-trailer.mp4" type="video/mp4">
                                </video> --}}
                            </a>
                        @endif
                    @endforeach

                </div>
            </div>
            <!--sabong-->

            <!--baccarat-->
            <div id="content-baccarat" class="hidden">
                <div class="grid col grid-cols-2 gap-10 px-5 py-5">

                    <a class="hover:-m-0.5">
                        <video src="{{asset('media/videos/casino-trailer.mp4')}}" width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                            <source src="/videos/casino-trailer.mp4" type="video/mp4">
                        </video>
                    </a>

                </div>
            </div>
            <!--baccarat-->
        </div>
    </div>

    <!--modal-->
    <div class="hidden fixed top-0 h-full w-full bg-neutral-800 bg-opacity-75 justify-center items-center py-24 xl:px-56 2xl:px-96" id="modal">
        <div class="flex flex-row justify-start items-center rounded-lg bg-neutral-700 border-2 border-neutral-600 2xl:mx-48">
            <div class="flex flex-col w-64 h-full rounded-l-md bg-neutral-800 text-left px-5 py-5 gap-5">
                <form action="{{route('create-game-room')}}" method="post">
                    @csrf
                    <div class="bg-neutral-700 border-2 border-neutral-600 divide-y divide-neutral-600">
                        <div class="bg-neutral-800 text-center">Game Type</div>
                        <div class="pl-0 w-full bg-neutral-600">
                            <select name="game_id" id="game_id" class="block appearance-none w-full bg-neutral-700 border border-neutral-600 text-white focus:outline-none focus:bg-neutral-600 focus:border-gray-500 pl-2">
                                <option value="1">Sabong</option>
                                <option value="2">Baccarat</option>
                            </select>
                        </div>
                    </div>
                    <div class="bg-neutral-700 border-2 border-neutral-600 divide-y divide-neutral-600">
                        <div class="bg-neutral-800 text-center">Stakes</div>
                        <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer"><input type="checkbox" name="low_raise_enabled" id="low_raise_enabled" value="1"><span class="ml-2">Low Raise</span></div>
                        <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer"><input type="checkbox" name="common_table_enabled" id="common_table_enabled" value="1"><span class="ml-2">Commons</span></div>
                        <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer"><input type="checkbox" name="high_stakes_enabled" id="high_stakes_enabled" value="1"><span class="ml-2">High Stakes</span></div>
                    </div>
                    <div class="bg-neutral-700 border-2 border-neutral-600">
                        <div class="bg-neutral-800 text-center">Video Feed Source</div>
                        <table class="w-full">
                            <tbody class="divide-y divide-neutral-600">
                                <tr>
                                    <td>
                                        <div class="pl-2 w-full hover:bg-neutral-600 cursor-pointer"><input type="text" name="feed_source" id="feed_source" class="block appearance-none w-full bg-neutral-700 border border-neutral-600 text-white focus:outline-none focus:bg-neutral-600 focus:border-gray-500 px-2"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bg-neutral-700 border-2 border-neutral-600 divide-y divide-neutral-600">
                        <div class="bg-neutral-800 text-center">Controls</div>
                        <button type="submit" class="pl-2 w-full hover:bg-neutral-600 cursor-pointer">Go Live</button>
                        <button type="button" class="pl-2 w-full hover:bg-neutral-600 cursor-pointer" onclick="toggleModal()">Exit</button>
                    </div>
                </form>
            </div>
            <div class="flex flex-col px-4 py-2 gap-4">
                <div class="text-center font-semibold text-lg">Preview</div>
                <video width="640" height="480" autoplay muted loop id="video" class="rounded-lg">
                    <source src="{{asset('media/videos/casino-trailer.mp4')}}" type="video/mp4">
                </video>

            </div>
        </div>

    </div>
    <!--modal ends here-->

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

        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden')
        }

        $(document).click(function() {})

        var options = {
            muted: true,
            controls: false,
            autoplay: false,
            width: '100%',
            height: 250,
            channel: "mch_AGG",
            parent: ["localhost", "online-casino.test"]
        };
        var player = new Twitch.Player("stream-sm", options);
    </script>

    <!--scripts ends here-->
</body>
</html>
