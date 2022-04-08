<!DOCTYPE html>
<html lang="en" class="scroll-smooth font-sans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Sign Up</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">

    <style>
        .bg-custom
        {
            background-image: url("{{asset('media/img/cards-bg.png')}}");
            background-repeat: no-repeat;

        }
    </style>

</head>

<body class="text-yellow-50 w-full h-full bg-[url('{{asset("media/img/table.png")}}')] bg-no-repeat bg-cover">

    <!--header-->

    <header class="flex flex-row justify-between items-center pt-10 px-6 h-16 text-sm tracking-widest w-full z-50">

        <a href="{{route('/')}}" class="">
            <img src="{{asset('media/img/alpha-logo.png')}}" alt="alpha" class="h-14">
        </a>
    </header>

    <!--header ends here-->

    <!--content-->

    <div class="min-h-screen px-4 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl mx-auto text-left">
            <p class="text-2xl font-bold pb-1 pt-14">Create an Account</p>
            <div class="bg-custom bg-cover relative mt-4 border-yellow-50 text-yellow-50 text-center border-8 w-auto shadow-2xl sm:rounded-lg">
                <div class="py-6 px-12">
                    <p class="flex justify-left pt-3 font-semibold">Name</p>
                    <div class="grid col grid-cols-2 gap-3">
                        <input type="text" placeholder="First Name" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        <input type="text" placeholder="Last Name" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                    </div>
                    <p class="flex justify-left pt-3 font-semibold">Birthdate</p>
                    <div class="grid col grid-cols-3 gap-3">
                        <input type="text" placeholder="Month" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        <input type="number" placeholder="Date" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        <input type="number" placeholder="Year" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                    </div>
                    <p class="flex text-left pt-3 font-semibold">Username</p>
                    <input type="text" placeholder="Username" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                    <p class="flex text-left pt-3 font-semibold">Email</p>
                    <input type="text" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                    <p class="flex text-left pt-3 font-semibold">Password</p>
                    <input type="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                    <input type="password" placeholder="Confirm Password" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                    <div class="pt-3 font-semibold">
                        <label class="flex text-left" for="color">Select Gender</label>
                        <div>
                            <div class="flex items-center mb-3 last:mb-0 pt-3">
                                <input name="gender" type="radio" class="w-4 h-4 border border-gray-300 rounded-full outline-none cursor-pointer" value="male" checked=""/>
                                <label class="ml-2 text-sm" for="male">Male</label>
                            </div>
                        <div class="flex items-center mb-3 last:mb-0">
                            <input name="gender" type="radio" class="w-4 h-4 border border-gray-300 rounded-full outline-none cursor-pointer" value="female"/>
                            <label class="ml-2 text-sm" for="female">Female</label>
                        </div>
                    </div>
                    <div class="flex justify-center items-baseline pt-20">
                        <a href="#" class="bg-yellow-50 font-semibold text-neutral-800 py-2 px-6 rounded-lg shadow-md">Sign Up</a>
                    </div>
                    <div class="flex flex-row justify-center items-baseline gap-5 pb-4 pt-20 font-semibold">
                        <p class="text-sm">Already have an account?</p>
                        <a href="/src/login.html" class="text-md hover:underline">Sign In</a>
                    </div>
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
