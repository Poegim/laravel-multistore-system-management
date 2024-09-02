<x-app-layout>
    <x-slot name="header">
        <h2 class="breadcrumb text-xl text-gray-800 dark:text-gray-200 leading-tight lowercase">
            <div class="sm:flex py-6 px-4">
                <a class="link" href="{{ route('feature.index')}} " wire:navigate>{{__('back to:')}}
                    {{ __('features') }}</a>
                <div class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="hidden sm:block size-5 my-auto -rotate-90">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                    {{__('edit feature')}}
                </div>
            </div>
        </h2>
    </x-slot>

    <form action="{{ route('feature.update', $feature->slug) }}" method="POST">
    @csrf
    @method('PUT')


    <x-window>

        @if ($errors->any())
        <x-lists.errors-list>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </x-lists.errors-list>
        @endif

        <div class="mt-4 p-4 rounded-md border border-gray-200 dark:border-gray-700">

            <label for="name" class="input-label">{{__('name')}}</label>
            @error('name')
            <div class="text-red-500 dark:text-red-300">{{ $message }}</div>
            @enderror

            <input name="name"
                type="text"
                id="name"
                class="input-text"
                required value="{{ old('name') ? old('name') : $feature->name}}" />
            
        
            <label for="short_name" class="input-label">{{__('short_name')}}</label>
            @error('short_name')
            <div class="text-red-500 dark:text-red-300">{{ $message }}</div>
            @enderror

            <input name="short_name"
                type="text"
                id="short_name"
                class="input-text"
                value="{{ old('short_name') ? old('short_name') : $feature->short_name}}" />

        </div>

        <x-submit-cancel-btns :cancelRoute="'feature.index'" :type="'update'" />

    </x-window>
    </form>

</x-app-layout>
