<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enviados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    receptor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Asunto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Mensaje
                                </th>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fecha
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Ver</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mensajes as $mensaje)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                               <td>{{$mensaje->receptor->email}}</td> 
                               <td>{{$mensaje->asunto}}</td> 
                               <td>{{$mensaje->mensaje}}</td> 
                               <td>{{$mensaje->created_at}}</td> 
                               <td>
                                    <x-nav-link :href="route('message.show',$mensaje->id)" :active="request()->routeIs('message.show')">
                                        {{ __('Ver') }}
                                    </x-nav-link>       
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
