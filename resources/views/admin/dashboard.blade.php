<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css'>
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- <link rel="stylesheet" href=" {{ @asset('css/style-basic.css') }} "> --}}
    </head>
    <body>
        <div class="flex w-screen h-screen text-gray-400 bg-gray-900">

            @include('admin.components.sidebar')

            @include('admin.components.dropdown')

            @include('admin.components.content')

        </div>
    
    </body>
</html>
