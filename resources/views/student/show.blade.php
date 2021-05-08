<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                @livewire('student.show-name', ['student' => $student])
            </h2>
            <div class="items-center hidden sm:flex">
                <x-jet-secondary-button>
                    <a href="{{ route('pendaftaran') }}">
                        Semua Pendaftar
                    </a>
                </x-jet-secondary-button>
            </div>
        </div>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mt-10 sm:mt-0">
                @livewire('student.sekolah-asal', ['student' => $student->id])
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.data-pribadi', ['student' => $student])
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.data-periodik', ['student' => $student->id])
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.data-keluarga', ['student' => $student->id])
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.data-rincian', ['student' => $student->id])
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.pilihan-jurusan', ['student' => $student->id])
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.ukuran-seragam', ['student' => $student->id])
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.delete-student', ['student' => $student->id])
            </div>

        </div>
    </div>
</x-app-layout>