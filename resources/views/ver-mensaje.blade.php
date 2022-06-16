<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Redactar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <!-- Email Address -->
                        <x-label for="receptor" :value="__('Receptor')" />
                        <x-input id="receptor" class="block mt-1 w-full" type="text" name="recptor" value="{{$mensaje->receptor->email}}" disabled/>

            
                        <!-- Asunto -->
                        <div>
                            <x-label for="asunto" :value="__('Asunto')" />
                            <x-input id="asunto" class="block mt-1 w-full" type="text" name="asunto" value="{{$mensaje->asunto}}" disabled/>
                        </div>
            
                        <!-- Mensaje -->
                        <div class="max-w">
                            <x-label for="mensaje" :value="__('Mensaje')" />
                            <textarea required class="w-full" name='mensaje'  disabled>{{$mensaje->mensaje}}    </textarea>                       
                        </div>
        
                        <x-nav-link :href="route('messages.recieved',$mensaje->id)" :active="request()->routeIs('messages.recieved')" disabled>
                            {{ __('Volver') }}
                        </x-nav-link>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
