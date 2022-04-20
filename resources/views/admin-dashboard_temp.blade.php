<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        <a href="#" class="">
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
        </a>

        <div class="flex items-center gap-5 text-xl font-semibold">
            <a href="#" class="hover:text-orange-400 text-yellow-50 focus:text-orange-400 focus:outline-none" id="tabs-sabong">Sabong</a>
            <a href="#" class="hover:text-orange-400 text-yellow-50 focus:text-orange-400" id="tabs-baccarat">Baccarat</a>
        </div>
        
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
        <div class="flex-1 m-5 pt-12 text-xl font-semi-bold">
            <!--sabong-->
            <div id="content-sabong">
                <div class="grid col grid-cols-2 gap-8 px-5 py-5">

                    <a href="#" class="hover:-m-0.5">
                        <video src="{{asset('media/videos/casino-trailer.mp4')}}" width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                            <source src="/videos/casino-trailer.mp4" type="video/mp4">
                        </video>
                    </a>

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

                    <a class="hover:-m-0.5">
                        <video src="{{asset('media/videos/casino-trailer.mp4')}}" width="640" height="480" autoplay muted loop id="video"
                        class="rounded-lg hover:border-2 hover:border-orange-400 -m-0.5 p-0.5">
                            <source src="/videos/casino-trailer.mp4" type="video/mp4">
                        </video>
                    </a>

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
    </script>

    <!--scripts ends here-->
</body>
</html>