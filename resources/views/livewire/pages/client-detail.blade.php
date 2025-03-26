<div>
    <section>
        <button class="absolute top-16 m-4 ">
            <x-heroicon-s-arrow-left-circle class="h-12 w-12 text-gray-800 dark:text-gray-100" wire:click="btnBack" />
        </button>

        <div class="container items-center px-4 py-12 mt-8 mx-auto">
            <div class="lg:flex lg:items-top lg:-mx-6">
                <div class="lg:w-1/3 lg:mx-6">
                    @if ($cliente->Activo == 1)
                    <div class="flex items-center gap-x-2">
                        <div class="object-cover w-2 h-2 rounded-full bg-green-600"></div>
                        <h1 class="text-base font-semibold text-gray-800 capitalize dark:text-green-400">Activo</h1>
                    </div>
                    @else
                    <div class="flex items-center gap-x-2">
                        <div class="object-cover w-2 h-2 rounded-full bg-red-600"></div>
                        <h1 class="text-base font-semibold text-gray-800 capitalize dark:text-red-400">Inactivo</h1>
                    </div>
                    @endif

                    <h1 class="flex text-2xl font-extrabold text-gray-800 capitalize dark:text-white lg:text-3xl">
                        {{$cliente->Razon_Social}}
                        <button class="ml-2">
                            <x-heroicon-m-pencil-square class="w-6 h-6 text-gray-600 dark:text-gray-400" />
                        </button>
                    </h1>
                    <h2 class="text-2xl font-bold text-gray-800 capitalize dark:text-white lg:text-lg">
                        {{$cliente->Primer_Apellido}} {{$cliente->Segundo_Apellido}}
                    </h2>
                    <h2 class="font-normal text-gray-800 capitalize dark:text-gray-400 text-sm">
                        {{$cliente->Clave_Actividad}} - {{$cliente->Actividad_Fiscal}}
                    </h2>

                    <div class="mt-4 space-y-2 w-full">
                    <p class="flex items-center ">
                            <x-heroicon-o-building-office class="h-6 w-6 text-gray-600 dark:text-gray-400" />
                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-300">
                                {{$cliente->REC}}
                            </span>
                        </p>
                        <p class="flex items-center ">
                            <x-heroicon-o-star class="h-6 w-6 text-gray-600 dark:text-gray-400" />
                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-300">
                                {{$cliente->Excel_id}}
                            </span>
                        </p>
                        <p class="flex items-center ">
                            <x-heroicon-o-identification class="h-6 w-6 text-gray-600 dark:text-gray-400" />
                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-300">
                                {{$cliente->CURP}}
                            </span>
                        </p>

                        <p class="flex items-start ">
                            <x-heroicon-o-key class="h-6 w-6 text-gray-600 dark:text-gray-400" />
                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-300">
                                {{$cliente->RFC}}
                            </span>
                        </p>
                    </div>

                    <div class="mt-8 w-80 md:mt-8">
                        <h3 class="text-gray-600 dark:text-gray-300">Datos registro</h3>
                        <div class="flex mt-2 text-gray-600 dark:text-gray-300">
                            <p>Fecha alta: {{$cliente->Fecha_Alta}}<br>
                                Hora alta: {{$cliente->Hora_Alta}}</p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-2/3 mt-4 px-6 py-8 overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800 shadow-gray-300 dark:shadow-black/60">
                    <div class="mb-4">
                        <h1 class="text-xl font-black text-gray-700 dark:text-gray-300">Ubicación</h1>
                        <p class="text-gray-700 dark:text-gray-400">
                            Calle {{$direccion->Calle}} N° {{$direccion->Numero_Exterior}} {{$direccion->Numero_Interior}} - {{$direccion->Cruzamientos}},
                            {{$direccion->Codigo_Postal}}, {{$direccion->Colonia}}, {{$direccion->Entidad_Federativa}}, {{$direccion->Localidad}}, {{$direccion->Municipio}}
                        </p>
                    </div>

                    <div class="border-t border-gray-300 my-4"></div>

                    <div class="mb-4">
                        <div class="grid grid-cols-3 gap-4 text-gray-800 text-sm text-center font-bold">
                        </div>
                        <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Pagos</h1>
                    </div>

                    <div class="border-t border-gray-300 my-4"></div>

                    <div class="mb-4">
                        <div class="grid grid-cols-2 gap-4 text-gray-800 text-sm text-center font-bold">
                            <div class="w-full flex-col items-start flex">
                                <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Primer aviso</h1>
                                <div class="w-full flex-col justify-center items-start flex">
                                    <h4 class="text-gray-700 dark:text-gray-300 text-lg text-start">{{$aviso->Primer_Aviso}}</h4>
                                </div>
                                <span class="w-full text-gray-500 text-base font-normal leading-relaxed text-start">{{$aviso->Fecha_Primer_Aviso}}</span>
                            </div>

                            <div class="w-full flex-col items-start flex">
                                <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Ultimo aviso</h1>
                                <div class="w-full flex-col justify-center items-start flex">
                                    <h4 class="text-gray-700 dark:text-gray-300 text-lg text-start">{{$aviso->Ultimo_Aviso}}</h4>
                                </div>
                                <span class="w-full text-gray-500 text-base font-normal leading-relaxed text-start">{{$aviso->Fecha_Ultimo_Aviso}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-300 my-4"></div>

                    <div class="mb-4">
                        <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Actividades REC</h1>
                        <div class="grid grid-cols-6 gap-2 text-gray-800 text-sm font-bold">
                            <div class="flex flex-col items-center justify-center">
                                <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Nomina</h1>
                                <x-heroicon-c-check-circle class="w-8 h-8 text-green-500" />
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Cedular</h1>
                                <x-heroicon-c-x-circle class="w-8 h-8 text-red-500" />
                            </div>
                            
                            <div class="flex flex-col items-center justify-center">
                                <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Hospedaje</h1>
                                <x-heroicon-c-check-circle class="w-8 h-8 text-green-500" />
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Profesional</h1>
                                <x-heroicon-c-check-circle class="w-8 h-8 text-green-500" />
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Cont. Agua</h1>
                                <x-heroicon-c-x-circle class="w-8 h-8 text-red-500" />
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <h1 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Cont. Aire</h1>
                                <x-heroicon-c-x-circle class="w-8 h-8 text-red-500" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
