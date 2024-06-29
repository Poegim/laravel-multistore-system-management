<li class="my-2">
    <div class="flex items-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-lg py-1 px-2 m-2">
        <span class="font-semibold text-lg mr-2">{{ $category->plural_name }}</span>
        <div>
            <x-buttons.edit-button>
                <x-fas-edit class="h-6 w-6"/>
            </x-buttons.edit-button>
        </div>
    </div>
    @if ($category->children->isNotEmpty())
        <ul class="list-none ml-6 border-b border-l border-blue-200 dark:border-blue-400 pl-4 bg-gradient-to-tr from-white to-gray-100 dark:from-gray-900 dark:to-gray-800">
            @foreach ($category->children as $child)
                @include('livewire.warehouse.category.list', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>