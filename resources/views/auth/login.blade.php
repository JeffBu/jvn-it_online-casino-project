<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Sign In</title>
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

        .bg-auth
        {
            background-image: url("{{asset('media/img/table.png')}}");
            background-repeat: no-repeat;

        }
    </style>

</head>

<body class="text-yellow-50 w-full h-full bg-auth bg-no-repeat bg-cover">

    <!--header-->

    <header class="flex flex-row justify-between items-center pt-10 px-6 h-16 text-sm tracking-widest w-full z-50">

        <a href="{{route('frontpage')}}" class="">
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-14">
        </a>
    </header>

    <!--header ends here-->

    <!--content-->

    <div class="min-h-screen px-4 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl mx-auto text-center">
            <p class="text-2xl font-bold pb-4 pt-14">Sign in to your account</p>
            <div class="bg-custom bg-cover relative mt-4 border-yellow-50 text-yellow-50 text-center border-8 w-80 shadow-2xl rounded-lg">
                <div class="py-6 px-8">
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <label class="block font-semibold">Username / Email<label>
                        <input type="text" name="username" placeholder="Username" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        <label class="block mt-6 font-semibold">Password<label>
                        <input type="password" name="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-3 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        <div class="flex justify-between items-baseline mt-9">
                            <button type="password" class="bg-yellow-50 font-semibold text-neutral-800 py-2 px-6 rounded-lg shadow-md">Sign In</button>
                            <a href="#" class="text-sm hover:underline">Forgot password?</a>
                        </div>
                        <div class="flex flex-row justify-center items-baseline gap-5 pb-4 pt-20 font-semibold">
                            <p class="text-sm">Don't have an account?</p>
                            <a href="{{route('register')}}" class="text-md hover:underline">Sign Up</a>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!--content ends here-->

    <!--footer-->

    <footer class="flex flex-row justify-center align-middle items-center py-5 px-5 text-sm tracking-widest gap-5 pt-40">

        <img src="{{asset('media/img/logo.png')}}" alt="logo" class="max-h-10">

        <p class="text-yellow-50">© 2022 Alpha Test. All rights reserved.</p>

    </footer>

    <!--footer ends here-->

    <!--scripts-->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

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
