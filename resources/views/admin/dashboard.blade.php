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

            @include('admin.layout.sidebar')

            
            {{-- @include('admin.layout.dropdown') --}}

            @switch($type)

                @case('unset')
                    @include('admin.layout.content')
                    @break

                @case('novo-cliente')
                    @include('admin.components.form_clientes')
                    @break

                @case('listar-clientes')
                    @include('admin.components.table_clientes', ['listaClientes' => $listaClientes])
                    @break
                
            @endswitch


        </div>
    
    </body>
</html>
