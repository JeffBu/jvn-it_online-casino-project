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
        <div class="relative py-3 sm:max-w-xl mx-auto text-left">
            <form action="{{route('player-registration')}}" method="post">
                @csrf
                <p class="text-2xl font-bold pb-1 pt-14">Create an Account</p>
                <div class="bg-custom bg-cover relative mt-4 border-yellow-50 text-yellow-50 text-center border-8 w-auto shadow-2xl sm:rounded-lg">
                    <div class="py-6 px-12">
                        <p class="flex justify-left pt-3 font-semibold">Name</p>
                        <div class="grid col grid-cols-1 gap-3">
                            <input type="text" name="name" placeholder="ex. Juan dela Cruz" value="{{old('name')}}" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <p class="flex justify-left pt-3 font-semibold">Birthdate</p>
                        <div class="grid col grid-cols-1 gap-3">
                            <input type="date" name="birthdate" placeholder="date" value="{{old('birthdate')}}" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <p class="flex text-left pt-3 font-semibold">Email</p>
                        <input type="email" name="email" placeholder="ex. juandelacruz@yahoo.com" value="{{old('email')}}" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <p class="flex text-left pt-3 font-semibold">Mobile Number</p>
                        <input type="text" name="phone" placeholder="ex. 09991234567"  value="{{old('phone')}}" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <p class="flex text-left pt-3 font-semibold">Username</p>
                        <input type="text" name="username" placeholder="ex. jdelacruz"  value="{{old('username')}}" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <p class="flex text-left pt-3 font-semibold">Password</p>
                        <input type="password" name="password" placeholder="Password"  class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="border w-full h-5 px-3 py-5 mt-3 text-neutral-800 focus:text-neutral-800 hover:outline-none focus:outline-none rounded-md">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        <div class="flex justify-center items-baseline pt-20">
                            <button type="submit" class="bg-yellow-50 font-semibold text-neutral-800 py-2 px-6 rounded-lg shadow-md">Register</button>
                        </div>
                        <div class="flex flex-row justify-center items-baseline gap-5 pb-4 pt-20 font-semibold">
                            <p class="text-sm">Already have an account?</p>
                            <a href="{{route('login')}}" class="text-md hover:underline">Sign In</a>
                        </div>
                    </div>
                </div>
            </form>
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
