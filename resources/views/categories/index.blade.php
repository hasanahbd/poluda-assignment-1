<x-layouts.app>
    <x-slot:title>Categories</x-slot>
    <x-slot:styles>
        <style>
            tbody tr:nth-child(odd) {
                background-color: #f8f8f8;
                /* Light gray color for odd rows */
            }

            tbody tr:nth-child(even) {
                background-color: #ffffff;
                /* White color for even rows */
            }

            tbody td {
                border-bottom: 1px solid #e0e0e0;
                /* Lighter border for better visibility */
                width: 33%;
                /* Adjust width as per requirement */
                padding: 15px;
                /* Increased padding for more space */
            }

            thead th {
                background-color: #f0f0f0;
                /* Slightly different shade from tbody for distinction */
                border-bottom: 2px solid #e0e0e0;
                /* A bit thicker border for header */
                width: 33%;
                /* Same as tbody cells */
                padding: 15px;
                /* Same padding as tbody cells for alignment */
                text-align: left;
                font-size: 0.85em;
                /* Adjust if necessary */
                font-weight: bold;
                text-transform: uppercase;
                color: #606060;
                /* Adjust the color if needed */
            }
        </style>
    </x-slot:styles>
    <x-slot:maincontent>


        <div class="container mx-auto px-2 sm:px-4 max-w-2xl"> <!-- Adjusted max width and padding -->
            <div class="py-8">
                <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                    <h2 class="text-2xl leading-tight">
                        Categories
                    </h2>
                    <a href="http://127.0.0.1:8000/categories/create"
                        class="text-blue-700 text-sm font-semibold rounded-md px-4 py-2">
                        Add New Category
                    </a>
                </div>
                <div class="-mx-2 sm:-mx-4 px-2 sm:px-4 py-4 overflow-x-auto"> <!-- Adjusted margin and padding -->
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table>
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th
                                        class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th
                                        class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Total Posts
                                    </th>
                                    <th
                                        class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="px-5 py-5 border-b bg-white text-sm">
                                            {{ $category->name }}
                                        </td>
                                        <td class="px-5 py-5 border-b bg-white text-sm">
                                            {{ $category->description }}
                                        </td>
                                        <td class="px-5 py-5 border-b bg-white text-sm">
                                            {{ $category->posts->count() }}
                                        </td>
                                        @auth
                                            <td class="px-5 py-5 border-b bg-white text-sm">
                                                <a href="{{ route('categories.edit', $category) }}"
                                                    class="text-blue-600 hover:text-blue-900">Edit</a>
                                            </td>
                                        @endauth
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>




    </x-slot:maincontent>
</x-layouts.app>
