<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Todays Menu</title>
</head>
<x-header/>
<body>
    <div id="menu" class="container mx-auto px-4 lg:pt-24 lg:pb-64">
        <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
                <h2 class="text-4xl font-semibold text-black">Todays Menu</h2>
                <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut mollis nulla, ut efficitur massa.
                    Praesent vitae iaculis orci
                </p>
            </div>
        </div>
        <div class="flex flex-wrap mt-12 justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
                @foreach ($orders as $order)                    
                
                <div class="col-span-2 sm:col-span-1 xl:col-span-1">
                    <img alt="..." src="images/{{ $order['category_name'] }}.jpeg" class="h-24 w-24 rounded  mx-auto" />
                </div>
                <div class="col-span-2 sm:col-span-4 xl:col-span-4">
                    <h3 class="font-bold underline text-black">{{ $order['category_name'] }}</h3>
                   @foreach ($order['options'] as $options)
                        <span>
                            {{ $options['option_name'] }},
                        </span>                  
                   @endforeach
                    
                </div>
                <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic text-blue-500">
                    <a href="{{ url('/order') }}">Order Now</a> 
                </div>

                @endforeach
            </div>
        </div>
    </div>
</body>
</html>