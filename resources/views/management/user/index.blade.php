<x-app-layout>
    <x-slot name="header">
        <h2 class="breadcrumb text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <div class="sm:flex py-6 px-4">
            {{ __('Users') }}
            </div>
        </h2>
    </x-slot>
    
    @livewire('management.user.show-users')

</x-app-layout>
