<div>

    <section class="container px-4 mx-auto">

        <!-- ALERTAS -->
        <div class="sm:flex sm:items-end sm:justify-end mt-4">
            @if (session('success'))
            <div class="p-4 mb-4 text-sm text-white rounded-xl bg-emerald-500 font-normal" role="alert">
                <span class="font-semibold mr-2">Success</span> {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="p-4 mb-4 text-sm text-white rounded-xl bg-red-500 font-normal" role="alert">
                <span class="font-semibold mr-2">Error</span> {{ session('error') }}
            </div>
            @endif
        </div>

        <div class="sm:flex sm:items-center sm:justify-between gap-4 mb-4">
            <!-- Campo de búsqueda -->
            <div class="relative flex items-center flex-1">
                <span class="absolute left-3 top-1/2 transform -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
                <input type="text" placeholder="Search" class="block w-full py-3 pr-5 pl-11 text-gray-700 bg-white border border-gray-200 rounded-lg placeholder-gray-400/70 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <!-- Formulario de importación -->
            <form wire:submit.prevent="importCVS" class="w-full sm:w-auto">
                <div class="flex flex-col sm:flex-row items-center gap-4">
                    <!-- Input de archivo -->
                    <div class="w-full sm:w-auto">
                        <input type="file" wire:model="file" id="file" class="block w-full px-3 py-2 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full dark:file:bg-gray-800 dark:file:text-gray-200 dark:text-gray-300 placeholder-gray-400/70 dark:placeholder-gray-500 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:focus:border-blue-300" accept=".xlsx,.csv,.txt">
                    </div>

                    <!-- Botón de importación -->
                    <div class="sm:mt-0 w-full sm:w-auto">
                        <button type="submit" class="flex items-center justify-center px-4 py-2 text-sm font-medium border border-gray-400 rounded-lg text-gray-600 transition-colors duration-200 sm:text-base sm:px-6 dark:hover:bg-gray-800 dark:text-gray-300 gap-x-3 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                            </svg>
                            <span>Importar</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>



        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden border rounded-lg border-gray-300 dark:border-gray-500 shadow-md dark:shadow-lg">
                        <table class="min-w-full rounded-xl bg-white dark:bg-gray-800">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 dark:text-gray-100 capitalize"> ID </th>
                                    <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 dark:text-gray-100 capitalize"> RFC </th>
                                    <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 dark:text-gray-100 capitalize"> Primer apellido </th>
                                    <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 dark:text-gray-100 capitalize"> Segundo apellido </th>
                                    <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 dark:text-gray-100 capitalize"> Razon social </th>
                                    <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 dark:text-gray-100 capitalize"> CURP</th>
                                    <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 dark:text-gray-100 capitalize"> Activo </th>
                                    <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 dark:text-gray-100 capitalize"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contribuyentes as $contribuyente)
                                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-500">
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 dark:text-gray-100"> {{ $contribuyente->Excel_id}}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 dark:text-gray-100"> {{ $contribuyente->RFC}}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 dark:text-gray-100"> {{ $contribuyente->Primer_Apellido}}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 dark:text-gray-100"> {{ $contribuyente->Segundo_Apellido}}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 dark:text-gray-100"> {{ $contribuyente->Razon_Social}}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 dark:text-gray-100"> {{ $contribuyente->CURP}}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 dark:text-gray-100"> {{ $contribuyente->Activo}}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 dark:text-gray-100"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $contribuyentes->links() }}
                </div>
            </div>
        </div>

    </section>
</div>