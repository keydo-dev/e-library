@extends('layouts.app')
@section('content')
    <!-- Main content -->
    <main class="flex-1 overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Book Collection</h2>
                <a href="create.html"
                    class="px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 flex items-center">
                    <i class="ri-add-line mr-2"></i> Add New Book
                </a>
            </div>

            <!-- Search and filter -->
            <div class="mb-6 flex flex-col sm:flex-row gap-4">
                <div class="relative flex-1">
                    <input type="text" placeholder="Search books..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                    <i class="ri-search-line absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <select
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                    <option value="">All Publishers</option>
                    <option value="publisher1">Publisher 1</option>
                    <option value="publisher2">Publisher 2</option>
                    <option value="publisher3">Publisher 3</option>
                </select>
                <select
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                    <option value="">All Years</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
            </div>

            <!-- Books table -->
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Book
                                Name</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Publisher</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Book 1 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">The Great Gatsby</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Scribner</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500 truncate max-w-xs">A novel about the American Dream and
                                    its corruption in the 1920s.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">1925</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="show.html" class="text-emerald-600 hover:text-emerald-900">
                                        <i class="ri-eye-line text-lg"></i>
                                    </a>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="ri-edit-line text-lg"></i>
                                    </a>
                                    <a href="#" class="text-red-600 hover:text-red-900">
                                        <i class="ri-delete-bin-line text-lg"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- Book 2 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">To Kill a Mockingbird</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">J.B. Lippincott & Co.</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500 truncate max-w-xs">A novel about racial injustice and
                                    moral growth in the American South.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">1960</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="show.html" class="text-emerald-600 hover:text-emerald-900">
                                        <i class="ri-eye-line text-lg"></i>
                                    </a>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="ri-edit-line text-lg"></i>
                                    </a>
                                    <a href="#" class="text-red-600 hover:text-red-900">
                                        <i class="ri-delete-bin-line text-lg"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- Book 3 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">1984</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">Secker & Warburg</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500 truncate max-w-xs">A dystopian novel about
                                    totalitarianism, surveillance, and thought control.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">1949</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="show.html" class="text-emerald-600 hover:text-emerald-900">
                                        <i class="ri-eye-line text-lg"></i>
                                    </a>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="ri-edit-line text-lg"></i>
                                    </a>
                                    <a href="#" class="text-red-600 hover:text-red-900">
                                        <i class="ri-delete-bin-line text-lg"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex justify-between items-center mt-6">
                <div class="text-sm text-gray-500">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span
                        class="font-medium">12</span> results
                </div>
                <div class="flex space-x-1">
                    <button
                        class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-500 hover:bg-gray-50 disabled:opacity-50"
                        disabled>Previous</button>
                    <button
                        class="px-3 py-1 border border-gray-300 bg-gray-50 rounded-md text-sm font-medium text-gray-900">1</button>
                    <button
                        class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-500 hover:bg-gray-50">2</button>
                    <button
                        class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-500 hover:bg-gray-50">3</button>
                    <button
                        class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-500 hover:bg-gray-50">4</button>
                    <button
                        class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-500 hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>
    </main>
@endsection