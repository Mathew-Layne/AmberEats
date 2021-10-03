<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>My Order</title>
</head>
<x-header/>
<body class=" w-3/4 m-auto">
    <div class="text-gray-900 bg-white mt-20">
        <div class="p-4 flex">
            <h1 class="text-3xl">
                My Order
            </h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="bg-indigo-600 text-white border-b">
                        <th class="text-left p-3 px-3">First Name</th>
                        <th class="text-left p-3 px-3">Last Name</th>
                        <th class="text-left p-3 px-5">Meat</th>
                        <th class="text-left p-3 px-5">Starch</th>
                        <th class="text-left p-3 px-5">Vegetable</th>
                        <th class="text-left p-3 px-5">Beverage</th>
                        <th class="text-left p-3 px-5">Action</th>
                    </tr>
                    @foreach($data as $info)
    
                    <tr class="border-b bg-gray-100 hover:bg-gray-200">
                        <td class="p-3 px-5">{{ $info['first_name'] }}</td>
                        <td class="p-3 px-5">{{ $info['last_name'] }}</td>
                        {{-- <td class="p-3 px-5">{{ $info->dob }}</td>
                        <td class="p-3 px-5">{{ $info->email }}</td>
                        <td class="p-3 px-5">{{ $info->username }}</td>
                        <td class="p-3 px-5">{{ $info->phone_number }}</td> --}}
                        <td class="p-3 px-5">
                            {{-- <button type="button"
                        class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Activate</button> --}}
                            <a class="user_delete" href="">
                                <button type="button"
                                    class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                    Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>