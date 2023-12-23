<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Objetos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('objetos.create') }}">
                        <x-primary-button>
                            {{ __('Crear nuevo objeto') }}
                        </x-primary-button>
                    </a>

                    <ul class="mt-6 space-y-6">
                        @foreach ($objetos as $objeto)
                            <li class="border p-4 rounded-lg">
                                <h2 class="text-lg font-bold">{{ $objeto->nombre }}</h2>
                                <p class="text-gray-600">{{ $objeto->descripcion }}</p>
                                <div class="mt-4">
                                    <a href="{{ route('objetos.show', $objeto) }}">
                                        <x-secondary-button>
                                            {{ __('Ver detalles') }}
                                        </x-secondary-button>
                                    </a>
                                    <a href="{{ route('objetos.edit', $objeto) }}">
                                        <x-secondary-button class="ml-4">
                                            {{ __('Editar') }}
                                        </x-secondary-button>
                                    </a>
                                    <form method="POST" action="{{ route('objetos.destroy', $objeto) }}" class="inline mt-4">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button type="submit" class="ml-4">
                                            {{ __('Eliminar') }}
                                        </x-danger-button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>