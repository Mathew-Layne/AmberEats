<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Document</title>
</head>
<body>

    <header class="relative z-50 w-full h-24">
        <div
            class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <div class="logo flex">
                <img class="h-10 m-1" src="{{ url('images/logo.png') }}" alt="">
                <h2 class="logo_text tracking-tighter font-bold text-blue-500 text-3xl">amber eats</h2>
            </div>

            <nav id="nav"
                class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                <a href="{{ url('/') }}"
                    class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
                <a href="{{ url('/order') }}"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Place Order</a>
                <a href="{{ url('/order/view') }}"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">View Order</a>
                <a href="{{ url('/menu') }}"
                    class="font-bold duration-100 transition-color hover:text-indigo-600">Todays Menu</a>
                <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                    <a href="{{ url('/login') }}" class="w-full py-2 font-bold text-center text-pink-500">Login</a>
                    <a href="{{ url('/register') }}"
                        class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">Get
                        Started</a>
                </div>
            </nav>
            

        </div>
    </header>
    
</body>
</html>