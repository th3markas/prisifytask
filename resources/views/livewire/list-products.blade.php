<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Products') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Select
                    Manufacturer</label>
                <select wire:model.live="manufacturer" name="manufacturer"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">-</option>
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}"> {{ $manufacturer->title }} </option>
                    @endforeach
                </select>

                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input type="checkbox" name="stock" wire:model.live="stock"
                               class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                    </div>
                    <label for="stock" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">Stock</label>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Title</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                            <th scope="col" class="px-6 py-3">Stock</th>
                            <th scope="col" class="px-6 py-3">Manufacturer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $product->title }}</td>
                                <td class="px-6 py-4">{{ $product->price }}</td>
                                <td class="px-6 py-4">{{ $product->stock }}</td>
                                <td class="px-6 py-4">{{ $product->manufacturer->title }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

