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
                    <form method="POST" action="{{ route('message.store') }}">
                        @csrf
                        <!-- Email Address -->
                        <x-label for="receptor" :value="__('Para')" />

                        <select name="receptor_id">
                            @foreach ($receptores as $receptor)
                                <option value="{{ $receptor->id }}" @selected(old('receptor') == $receptor)>
                                    {{ $receptor->email }}
                                </option>
                            @endforeach
                        </select>
            
                        <!-- Asunto -->
                        <div>
                            <x-label for="asunto" :value="__('Asunto')" />
                            <x-input id="asunto" class="block mt-1 w-full" type="text" name="asunto" :value="old('asunto')" required autofocus />
                        </div>
            
                        <!-- Mensaje -->
                        <div class="max-w">
                            <x-label for="mensaje" :value="__('Mensaje')" />
                            <textarea required class="w-full" name='mensaje'></textarea>                        
                        </div>
            
                        <div class="flex items-center justify-end mt-4">  
                            <x-button class="ml-3">
                                {{ __('Enviar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
