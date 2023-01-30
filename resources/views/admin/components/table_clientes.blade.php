<div class="flex flex-col flex-grow">
    
  <div class="flex items-center flex-shrink-0 h-16 px-8 border-b border-gray-800">
      <h1 class="text-lg font-medium">Clientes</h1>
      <button class="flex items-center justify-center h-10 px-4 ml-auto text-sm font-medium rounded hover:bg-gray-800">
          Action 1
      </button>
      <button class="flex items-center justify-center h-10 px-4 ml-2 text-sm font-medium bg-gray-800 rounded hover:bg-gray-700">
          Action 2
      </button>
      <button class="relative ml-2 text-sm focus:outline-none group">
          <div class="flex items-center justify-between w-10 h-10 rounded hover:bg-gray-800">
              <svg class="w-5 h-5 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
              </svg>
          </div>
          <div class="absolute right-0 flex-col items-start hidden w-40 mt-1 pb-1 bg-gray-800 border border-gray-800 shadow-lg group-focus:flex">
              <a class="w-full px-4 py-2 text-left hover:bg-gray-900" href="#">Menu Item 1</a>
              <a class="w-full px-4 py-2 text-left hover:bg-gray-900" href="#">Menu Item 2</a>
              <a class="w-full px-4 py-2 text-left hover:bg-gray-900" href="#">Menu Item 3</a>
          </div>
      </button>
  </div>
  
  <div class="w-full overflow-auto	">

      <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nome / Email</th>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Gênero</th>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nascimento / Signo</th>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Celular</th>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Instagram</th>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Ações</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
          @foreach ($listaClientes as $cliente)
            <tr class="hover:bg-gray-50">

              {{-- Nome / Email --}}
              <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                <div class="text-sm">
                  <div class="font-medium text-gray-700">{{$cliente->nome_completo}}</div>
                  <div class="text-gray-400">{{$cliente->email}}</div>
                </div>
              </th>

              {{-- Gênero --}}
              <td class="px-6 py-4">
                <div class="font-medium text-gray-700">{{$cliente->genero}}</div>
              </td>
              
              {{-- Nascimento / Signo --}}
              <td class="px-6 py-4">
                <div class="text-gray-400">{{$cliente->data_nascimento}}</div>
                <div class="font-medium text-gray-700">{{$cliente->signo}}</div>
              </td>

              {{-- Celular --}}
              <td class="px-6 py-4">
                <div class="flex gap-2">
                  <div class="text-gray-400">{{$cliente->celular}}</div>
                </div>
              </td>

              {{-- Instagram --}}
              <td class="px-6 py-4">
                <div class="flex gap-2">
                  <div class="text-gray-400">{{$cliente->instagram}}</div>
                </div>
              </td>

              {{-- Ações --}}
              <td class="px-6 py-4">
                <div class="flex">
                  <a x-data="{ tooltip: 'Delete' }" href="#">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6"
                      x-tooltip="tooltip"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                      />
                    </svg>
                  </a>
                  <a x-data="{ tooltip: 'Edite' }" href="#">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6"
                      x-tooltip="tooltip"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                      />
                    </svg>
                  </a>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      
  </div>

</div>
