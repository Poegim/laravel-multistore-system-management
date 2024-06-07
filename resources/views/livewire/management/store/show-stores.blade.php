<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full flex justify-end my-4">
            <x-button >
                <a href="#" class="flex">
                    <x-fas-plus class="w-6 h-6 mr-2"/>
                    <span class="my-auto">
                        {{ __('CREATE') }}
                    </span>
                </a>
            </x-button>
        </div>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stores as $item)
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{route('store.show', $item)}}">{{$item->name}}</a>
                            </th>
                            <td class="px-6 py-2">
                                {{$item->email}}
                            </td>
                            <td class="px-6 py-2">
                                <button wire:click="edit({{ $item->id }})" class="text-indigo-500 dark:hover:text-indigo-300 hover:text-indigo-700 transition-colors duration-300">
                                    <x-fas-edit class="h-6 w-6"/>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Show User Modal -->
    <x-dialog-modal wire:model.live="showEditModal">
        <x-slot name="title">
            {{ __('Edit store') }}: {{ $name }}
        </x-slot>

        <x-slot name="content">

            <div>
                {{dump($errors)}}
                {{dump($contracts_prefix)}}
            </div>

            <div class="mt-4" x-data="{ activeTab: 'A' }">
                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                    <li>
                        <x-buttons.flowbite.default class="rounded-t-lg" x-on:click="activeTab = 'A'" x-bind:class="{ 'bg-indigo-500 dark:bg-indigo-500 ': activeTab === 'A', 'bg-indigo-700 dark:bg-indigo-700 ': activeTab === 'B' }"> 
                        Basic
                        </x-buttons.flowbite.default>
                    </li>
                    <li>
                        <x-buttons.flowbite.default class="rounded-t-lg" x-on:click="activeTab = 'B'" x-bind:class="{ 'bg-indigo-500 dark:bg-indigo-500': activeTab === 'B', 'bg-indigo-700 dark:bg-indigo-700 ': activeTab === 'A' }"> 
                        Advanced
                        </x-buttons.flowbite.default>
                    </li>
                </ul>

                <div x-show="activeTab === 'A'" class="w-full rounded-b p-4 border-2 border-indigo-500">

                    <!-- Basic tab -->
                    <div class="mb-4">
                        
                        <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('name')}}</label>
                        <input 
                            wire:model="name" 
                            type="name" 
                            id="name" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$name}}" 
                        />

                        <label for="color" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('color')}}</label>
                        <input 
                        type="color" 
                        class="mb-4 p-1 h-10 w-full block bg-white border border-gray-200 cursor-pointer rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700" 
                        id="color" 
                        value="{{$color}}" 
                        title="Choose your color">

                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('email')}}</label>
                        <input 
                            wire:model="email" 
                            type="email" 
                            id="email" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$email}}" 
                        />

                        <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('phone')}}</label>
                        <input 
                            wire:model="phone" 
                            type="text" 
                            id="phone" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$phone}}"
                        />

                        <label for="city" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('city')}}</label>
                        <input 
                            wire:model="city" 
                            type="text" 
                            id="city" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$city}}"
                        />

                        <label for="postcode" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('postcode')}}</label>
                        <input 
                            wire:model="postcode" 
                            type="text" 
                            id="postcode" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$postcode}}"
                        />

                        <label for="street" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('street')}}</label>
                        <input 
                            wire:model="street" 
                            type="text" 
                            id="street" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$street}}"
                        />

                        <label for="building_number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('building_number')}}</label>
                        <input 
                            wire:model="building_number" 
                            type="text" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$building_number}}"
                        />

                        <label for="apartment_number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('apartment_number')}}</label>
                        <input 
                            wire:model="apartment_number" 
                            type="text" 
                            id="apartment_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$apartment_number}}"
                        />
                        
                    </div>
    
                </div>

                
                <!-- Advanced tab -->
                <div x-show="activeTab === 'B'" class="w-full rounded-b p-4 border-2 border-indigo-500">
                                    
                    <div class="mb-4">
                        <label for="order" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{ __('order')}}</label>
                        <input 
                            wire:model="order" 
                            type="number" 
                            id="order" 
                            class="mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$order}}" 
                        />

                        <label for="contracts_prefix" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('contracts_prefix')}}</label>
                        <input 
                            wire:model="contracts_prefix" 
                            type="text" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$contracts_prefix}}"
                        />

                        <label for="invoices_prefix" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('invoices_prefix')}}</label>
                        <input 
                            wire:model="invoices_prefix" 
                            type="text" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$invoices_prefix}}"
                        />

                        <label for="margin_invoices_prefix" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('margin_invoices_prefix')}}</label>
                        <input 
                            wire:model="margin_invoices_prefix" 
                            type="text" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$margin_invoices_prefix}}"
                        />

                        <label for="proforma_invoices_prefix" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('proforma_invoices_prefix')}}</label>
                        <input 
                            wire:model="proforma_invoices_prefix" 
                            type="text" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$proforma_invoices_prefix}}"
                        />

                        <label for="internal_services_prefix" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('internal_services_prefix')}}</label>
                        <input 
                            wire:model="internal_services_prefix" 
                            type="text" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$internal_services_prefix}}"
                        />

                        <label for="external_services_prefix" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('external_services_prefix')}}</label>
                        <input 
                            wire:model="external_services_prefix" 
                            type="text" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$external_services_prefix}}"
                        />

                        <label for="next_receipt_number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('next_receipt_number')}}</label>
                        <input 
                            wire:model="next_receipt_number" 
                            type="number" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$next_receipt_number}}"
                        />

                        <label for="next_invoice_number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('next_invoice_number')}}</label>
                        <input 
                            wire:model="next_invoice_number" 
                            type="number" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$next_invoice_number}}"
                        />

                        <label for="next_margin_invoice_number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('next_margin_invoice_number')}}</label>
                        <input 
                            wire:model="next_margin_invoice_number" 
                            type="number" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$next_margin_invoice_number}}"
                        />

                        <label for="next_proforma_invoice_number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('next_proforma_invoice_number')}}</label>
                        <input 
                            wire:model="next_proforma_invoice_number" 
                            type="number" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$next_proforma_invoice_number}}"
                        />

                        <label for="next_internal_service_number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('next_internal_service_number')}}</label>
                        <input 
                            wire:model="next_internal_service_number" 
                            type="number" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$next_internal_service_number}}"
                        />

                        <label for="next_external_service_number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">{{__('next_external_service_number')}}</label>
                        <input 
                            wire:model="next_external_service_number" 
                            type="number" 
                            id="building_number" 
                            class=" mb-4 border border-indigo-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                            required 
                            value="{{$next_external_service_number}}"
                        />

                    </div>
                </div>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('showEditModal')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3" wire:click="update({{$store?->id}})">
                {{ __('Update') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>