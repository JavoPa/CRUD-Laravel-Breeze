<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle del objeto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-lg font-bold">{{ $objeto->nombre }}</h1>
                    <p class="text-gray-600 mt-4">{{ $objeto->descripcion }}</p>
                    <a href="{{ route('objetos.edit', $objeto) }}">
                        <x-secondary-button class="text-blue-500 mt-4">
                            {{ __('Editar') }}
                        </x-secondary-button>
                    </a>
                    <form method="POST" action="{{ route('objetos.destroy', $objeto) }}" class="inline mt-4">
                        @csrf
                        @method('DELETE')
                        <x-danger-button type="submit">
                            {{ __('Eliminar') }}
                        </x-danger-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>