<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Data Pendaftar Calon Peserta Didik') }}
            </h2>
            <div class="items-center hidden sm:flex">
                <x-jet-secondary-button>
                    <a href="{{ route('student.export') }}">
                        Download Excel
                    </a>
                </x-jet-secondary-button>
                @livewire('student-create')
            </div>
        </div>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                @livewire('pendaftar-table')
            </div>

            <!-- <x-jet-section-border /> -->
        </div>
    </div>
</x-app-layout>