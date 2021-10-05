<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <title>Place Order</title>
</head>
<x-header/>
<body>
    <div class="w-4/12 flex m-auto my-10">
        @if(session()->get('admin') == 'category')

        <form method="post" action="{{ url('admin/add/category') }}" id="form"
            class="w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div><img src="{{ url('images/logo.png') }}" width="10%"></div>
            <br>
            <h1 class="block text-gray-700 font-bold mb-2 text-2xl text-center">Add Category</h1>
            <br>            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Category
                </label>

                <input type="text" name="category"placeholder="Enter Meal Category"
                class="shadow border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">              
            </div>        
        
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-utensils mr-1"></i> Add Category
                </button>
            </div>    
        </form>

        @elseif(session()->get('admin') == 'option')

        <form method="post" action="{{ url('admin/add/option') }}" id="form" class="w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div><img src="{{ url('images/logo.png') }}" width="10%"></div>
            <br>
            <h1 class="block text-gray-700 font-bold mb-2 text-2xl text-center">Add Option</h1>
            <br>        
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Category</label>
                <select name="category_id"
                class="shadow border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Select Category</option>
                    @foreach ($category as $data)
                      <option value="{{ $data['id'] }}">{{ $data['category_name'] }}</option>  
                    @endforeach   
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Option</label>            
                <input type="text" name="option" placeholder="Enter Meal Option"
                    class="shadow border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">            
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" 
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-utensils mr-1"></i> Submit Order
                </button>
            </div>
    
            <div class="mb-4">
    
    
        </form>

        @else

        <form method="post" action="{{ url('/order') }}" id="form"
            class="w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div><img src="{{ url('images/logo.png') }}" width="10%"></div>
            <br>
            <h1 class="block text-gray-700 font-bold mb-2 text-2xl text-center">Place your Order</h1>
            <br> 

            @foreach($orders as $order)
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    {{ $order['category_name'] }}
                </label>
        
                <select name="{{ $order['category_name'] }}"
                    class="shadow border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Select {{ $order['category_name'] }}</option>
                    @foreach ($order['options'] as $options)
                    <option value="{{ $options['id'] }}">{{ $options['option_name'] }}</option>
                    @endforeach
                </select>                
            </div>
            @endforeach
        
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-utensils mr-1"></i> Submit Order
                </button>
            </div>   
        </form>
        @endif

    </div>

    <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous"></script>
    <script src="assets/js/helpers.js"></script>
    <script src="assets/js/whatsapp.js"></script>
</body>
</html>