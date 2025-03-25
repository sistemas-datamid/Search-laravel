<div>

    <section>
        <button class="absolute top-16 m-4 ">
            <x-heroicon-s-arrow-left-circle class="h-12 w-12 text-gray-600 dark:text-gray-100" wire:click="btnBack" />
        </button>

        <div class="container items-center px-4 py-12 mt-8 mx-auto">
            <div class="lg:flex lg:items-top lg:-mx-6">
                <div class="lg:w-1/3 lg:mx-6">
                    @if ($cliente->Activo == 1)
                    <div class="flex items-center gap-x-2">
                        <div class="object-cover w-2 h-2 rounded-full bg-green-600"></div>
                        <h1 class="text-base font-semibold text-gray-700 capitalize dark:text-green-600">Activo</h1>
                    </div>
                    @else
                    <div class="flex items-center gap-x-2">
                        <div class="object-cover w-2 h-2 rounded-full bg-red-600"></div>
                        <h1 class="text-base font-semibold text-gray-700 capitalize dark:text-red-600">Inactivo</h1>
                    </div>
                    @endif

                    <h1 class=" flex text-2xl font-extrabold text-gray-800 capitalize dark:text-white lg:text-3xl">
                        {{$cliente->Razon_Social}}  

                        <button class="ml-2"> 
                        <x-heroicon-m-pencil-square class="w-6 h-6"/>
                        </button>
                    </h1>
                    <h2 class="text-2xl font-bold text-gray-800 capitalize dark:text-white lg:text-lg">
                        {{$cliente->Primer_Apellido}} {{$cliente->Segundo_Apellido}}
                    </h2>
                    <h2 class="text-2xl font-normal text-gray-800 capitalize dark:text-gray-400 lg:text-sm">
                        {{$cliente->Clave_Actividad}} - {{$cliente->Actividad_Fiscal}}
                    </h2>

                    <div class="mt-6 space-y-4 w-full">
                        <p class="flex items-center ">
                            <x-heroicon-o-identification class="h-6 w-6  dark:text-gray-400" />
                            <span class="mx-2 text-gray-700 truncate w-72  dark:text-gray-300">
                                {{$cliente->CURP}}
                            </span>
                        </p>

                        <p class="flex items-start ">
                            <x-heroicon-o-key class="h-6 w-6 dark:text-gray-400" />
                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-300">
                                {{$cliente->RFC}}
                            </span>
                        </p>

                        <!-- <p class="flex items-start -mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">acb@example.com</span>
                        </p> -->
                    </div>

                    <div class="mt-6 w-80 md:mt-8">
                        <h3 class="text-gray-600 dark:text-gray-300 ">Datos registro</h3>

                        <div class="flex mt-2 text-gray-600 dark:text-gray-300">
                            <p>Fecha alta: {{$cliente->Fecha_Alta}}<br>
                                Hora alta: {{$cliente->Hora_Alta}}</p>
                                
                            <p>Fecha alta: {{$cliente->Fecha_Alta}}<br>
                                Hora alta: {{$cliente->Hora_Alta}}</p>
                        </div>
                       
                    
                    </div>
                </div>

                <div class="w-full lg:w-2/3 mt-4 px-6 py-8 overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800  shadow-gray-300 dark:shadow-black/60">
                    <div class="mb-4">
                        <h1 class="text-xl font-black text-gray-700 dark:text-gray-300">Ubicación</h1>
                        <p class="text-gray-700 dark:text-gray-400">
                            Calle {{$direccion->Calle}} N° {{$direccion->Numero_Exterior}} {{$direccion->Numero_Interior}} - {{$direccion->Cruzamientos}},
                            {{$direccion->Codigo_Postal}}, {{$direccion->Colonia}}, {{$direccion->Entidad_Federativa}}, {{$direccion->Localidad}}, {{$direccion->Municipio}}
                        </p>
                    </div>

                    <div class="mb-4">
                    <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Pagos</h1>
                    </div>

                    <div class="mb-4">
                    <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Avisos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>