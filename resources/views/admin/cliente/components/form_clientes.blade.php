<div class="flex flex-col flex-grow">
    
    <div class="flex items-center flex-shrink-0 h-16 px-8 border-b border-gray-800">
        <h1 class="text-lg font-medium">Adicionar Cliente</h1>
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
    
    <div class="flex-grow p-6 overflow-auto bg-gray-800">

        

        <form action="{{ route('admin.novo-cliente') }}" method="POST">
            @csrf

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="nome_completo"> 
                  Nome Completo
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nome_completo" name="nome_completo" type="text" placeholder="Nome completo" required>
              </div>

              <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="genero">
                    Gênero
                </label>
                <div class="inline-block relative w-full">
                    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="genero" name="genero" required>
                      <option disabled selected>Selecione o sexo</option>
                      <option value="F">Feminino</option>
                      <option value="M">Masculino</option>
                      <option>ND</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div>
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/4 px-3">
                <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="data_nascimento">
                  Data de Nascimento
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="data_nascimento" name="data_nascimento" type="date" required>
              </div>

              <div class="w-full md:w-1/4 px-3">
                <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="celular">
                  Celular
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="celular" name="celular" type="text">
              </div>

              <div class="w-full md:w-1/4 px-3">
                <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="email">
                  E-mail
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email">
              </div>

              <div class="w-full md:w-1/4 px-3">
                <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="instagram">
                  Instagram
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="instagram" name="instagram" type="text">
              </div>
            </div>

            <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                <span>Salvar</span>
            </button>

        </form>
        
    </div>

</div>