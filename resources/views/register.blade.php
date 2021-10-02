<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Register</title>
</head>

<body>
    <div class="font-sans">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
            <div class="relative sm:max-w-sm w-full">
                <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
                <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
                <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                    <label for="" class="block mt-3 text-2xl font-bold text-gray-700 text-center">
                        Register
                    </label>
                    <form method="Post" action="{{ url('/register') }}" class="mt-10">
                        @csrf

                        <div>
                            <input type="text" name="fname" value="{{ old('fname') }}" placeholder="First Name"
                                class="mt-1 block w-full border-none bg-white px-4 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                            @error('fname') {{ $message }} @enderror
                        </div>

                        <div class="mt-7">
                            <input type="text" name="lname" value="{{ old('lname') }}" placeholder="Last Name"
                                class="mt-1 block w-full border-none bg-white px-4 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                            @error('lname') {{ $message }} @enderror
                        </div>

                        <div class="mt-7">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Eamil Address"
                                class="mt-1 block w-full border-none bg-white px-4 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                            @error('email') {{ $message }} @enderror
                        </div>

                        <div class="mt-7">
                            <input type="password" name="pwd" value="{{ old('pwd') }}" placeholder="Password"
                                class="mt-1 block w-full border-none bg-white px-4 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                            @error('pwd') {{ $message }} @enderror
                        </div>



                        <div class="mt-7">
                            <button type="submit"
                                class="bg-blue-500 w-full py-3 font-bold rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Register
                            </button>
                        </div>

                        <div class="mt-4 mb-4">
                            <div class="flex justify-center items-center">

                                <a href="{{ url('login') }}"
                                    class=" text-blue-500 text-xs transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    <label class="mr-2">Already have an account?</label>
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>