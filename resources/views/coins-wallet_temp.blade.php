<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Coins / Wallet</title>
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

    <!--header-->
    <header class="flex flex-row bg-neutral-900 justify-between items-center py-5 px-5 h-16 text-sm tracking-widest fixed w-full z-50" id="header_frame">
        <a href="/src/dashboard.html" class="">
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-10">
        </a>
    </header>
    <!--header ends here-->

    <!--content-->
    <div class="px-32 pt-32 min-h-fit">
        <div class="py-8 px-32 bg-neutral-900 rounded-t-xl bg-opacity-80">
            <div class="flex justify-center items-center pb-8 gap-4">
                <p class="font-bold text-xl">1 PHP</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                </svg>
                <div class="flex items-center gap-2">
                    <p class="font-bold text-xl">1</p>
                    <img src="{{asset('media/img/alpha-coin.png')}}" alt="" class="h-5 pl-1">
                    <p class="font-bold text-xl">COIN</p>
                </div>
            </div>
            <div class="bg-neutral-800 mb-8 rounded-xl">
                <div class="px-4 py-2 items-center text-left">
                    <p class="pb-2">Your Alpha Coins</p>
                    <div class="flex items-center px-4 py-4 bg-neutral-700 rounded-xl gap-4">
                        <img src="{{asset('media/img/user-logo.png')}}" alt="" class="h-10 rounded-full">
                        <div class="flex flex-col text-left">
                            <p class="font-semibold">zombakel</p>
                            <div class="flex gap-2 items-center">
                                <img src="{{asset('media/img/alpha-coin.png')}}" alt="" class="h-4">
                                <p class="font-semibold">1,000,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-neutral-800 mb-8 rounded-xl gap-2">
                <div class="flex items-center bg-neutral-700 px-4 py-2 rounded-t-xl font-semibold">
                    <div class="flex p-3 relative rounded-full text-center text-sm justify-center bg-red-800 border-2 border-yellow-50">
                        <p class="absolute top-0.5">1</p>
                    </div>
                    <p class="px-3 py-1">Select Payment Method</p>
                </div>
                <div class="flex flex-row items-center justify-center gap-4 py-4">
                    <a href="#" class="border-orange-400 focus:border-orange-400 focus:border-2 hover:border-2 rounded-lg hover:-m-0.5 focus:-m-0.5">
                        <img src="{{asset('media/img/gcash-cashin.png')}}" alt="baccarat"
                        class="rounded-lg p-0.5 h-32">
                    </a>
                    <a href="#" class="border-orange-400 focus:border-orange-400 focus:border-2 hover:border-2 rounded-lg hover:-m-0.5 focus:-m-0.5">
                        <img src="{{asset('media/img/paymaya-cashin.png')}}" alt=""
                        class="rounded-lg p-0.5 h-32">
                    </a>
                    <a href="#" class="border-orange-400 focus:border-orange-400 focus:border-2 hover:border-2 rounded-lg hover:-m-0.5 focus:-m-0.5">
                        <img src="{{asset('media/img/coinsph-cashin.png')}}" alt=""
                        class="rounded-lg p-0.5 h-32">
                    </a>
                </div>
            </div>
            <div class="bg-neutral-800 mb-32 rounded-xl gap-2">
                <div class="flex items-center bg-neutral-700 px-4 py-2 rounded-t-xl font-semibold">
                    <div class="flex p-3 relative rounded-full text-center text-sm justify-center bg-red-800 border-2 border-yellow-50">
                        <p class="absolute top-0.5">2</p>
                    </div>
                    <p class="px-3 py-1">Cash-in Amount</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-3 px-60 pb-4">
                    <label for="amount" class="px-4 pt-10 font-semibold">Input amount minimum of 100php</label>
                    <input type="number" placeholder="Minimum of 100php" name="amount" id=""
                    class="focus:text-neutral-900 hover:outline-none font-semibold focus:outline-none text-neutral-900 px-4 py-2 rounded-lg text-center w-full">
                    <a href="#" class="text-center px-4 py-2 mt-10 border-2 border-yellow-50 bg-red-800 rounded-lg font-semibold hover:bg-red-600">
                        Proceed
                    </a>
                </div>
            </div>
            <div class="bg-neutral-800 rounded-xl gap-2 mb-4">
                <div class="flex justify-center items-center bg-neutral-700 px-4 py-2 rounded-t-xl font-semibold">
                    <p class="px-3 py-1 text-xl">Transactions</p>
                </div>
                <div class="px-4 py-4">
                    <table class="table-auto w-full items-center text-center divide-y divide-neutral-700">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Transaction ID</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-700">
                            <tr class="mt-4">
                                <td>13-Mar-2022</td>
                                <td>Cash-in</td>
                                <td>10,000php</td>
                                <td>abcdefghi123456789</td>
                                <td>Success</td>
                            </tr>
                            <tr>
                                <td>08-Mar-2022</td>
                                <td>Cash-out</td>
                                <td>20,000php</td>
                                <td>123456789abcdefghi</td>
                                <td>Failed</td>
                            </tr>
                            <tr>
                                <td>01-Mar-2022</td>
                                <td>Cash-in</td>
                                <td>1,000php</td>
                                <td>1234abcde56789fghi</td>
                                <td>Success</td>
                            </tr>
                            <tr>
                                <td>21-Feb-2022</td>
                                <td>Cash-out</td>
                                <td>5,000php</td>
                                <td>abcde56789fghi1234</td>
                                <td>Success</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--content ends here-->

    <!--footer-->
    <footer class="flex flex-row justify-between items-center bg-neutral-900 py-2 px-60 text-sm tracking-widest">
        <div class="flex items-center gap-2">
            <img src="{{asset('media/img/logo.png')}}" alt="logo" class="max-h-10">
            <p class="text-yellow-50">© 2022 Alpha Test. All rights reserved.</p>
        </div>
        <div class="flex items-center gap-2">
            <p class="pl-96">Back to top</p>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                </svg>
            </a>
        </div>
    </footer>
    <!--footer ends here-->

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
    </script>
    <!--scripts ends here-->

</body>
</html>