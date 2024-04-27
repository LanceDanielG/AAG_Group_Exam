<!DOCTYPE html>
<html lang="en">
<head>
    <m<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body>
    @livewire('navigation-menu')
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    PRODUCTS
                </h2>
                <div>
                    @if(session()->has('success'))
                        <div class="text-red-500">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
            </div>
        </header>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-end pr-5 pt-3">
                        <a href="{{route('product.create')}}">
                            <button type="button" class="flex justify-center items-center bg-blue-500 hover:bg-blue-700 text-white font-bold focus:outline-none focus:ring-4 focus:ring-purple-300 rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                                Add Product
                            </button>
                        </a>
                    </div>
                    <div class="p-6 bg-gray-100 border-gray-900-b border-gray-900-gray-900 flex justify-center max-h-96 text-white">
                        <table border-gray-900="1" class="flex table-auto overflow-y-scroll scroll-mx-0 scroll-p-0 shadow-lg bg-gray-500">
                            <tr class="hover:bg-gray-50 focus:bg-blue-300">
                                <th class="bg-gray-800 border-gray-900 text-left text-[#ef3b2d] px-8 py-4">Product ID</th>
                                <th class="bg-gray-800 border-gray-900 text-left text-[#ef3b2d] px-8 py-4">Product Name</th>
                                <th class="bg-gray-800 border-gray-900 text-left text-[#ef3b2d] px-8 py-4">Product Quantity</th>
                                <th class="bg-gray-800 border-gray-900 text-left text-[#ef3b2d] px-8 py-4">Product Price</th>
                                <th class="bg-gray-800 border-gray-900 text-left text-[#ef3b2d] px-8 py-4">Product Description</th>
                                <th class="bg-gray-800 border-gray-900 text-left text-[#ef3b2d] px-8 py-4">Edit</th>
                                <th class="bg-gray-800 border-gray-900 text-left text-[#ef3b2d] px-8 py-4">Delete</th>
                            </tr>
                            @foreach($products as $product)
                                <tr class="hover:bg-gray-700 focus:bg-gray-800">
                                    <td class="border-gray-900 px-8 py-4">{{$product->id}}</td>
                                    <td class="border-gray-900 px-8 py-4">{{$product->product_name}}</td>
                                    <td class="border-gray-900 px-8 py-4">{{$product->product_quantity}}</td>
                                    <td class="border-gray-900 px-8 py-4">{{$product->product_price}}</td>
                                    <td class="border-gray-900 px-8 py-4">{{$product->product_description}}</td>
                                    <td class="border-gray-900 px-8 py-4">
                                        <a href="{{route('product.edit', ['product' => $product])}}" class="dark:md:hover:text-green-500">Edit</a>
                                    </td>
                                    <td class="border-gray-900 px-8 py-4">
                                        <form action="{{route('product.delete', ['product' => $product])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="dark:md:hover:text-red-500 hover:cursor-pointer">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
</body>
</html>