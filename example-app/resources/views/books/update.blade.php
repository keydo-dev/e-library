@extends('layouts.app')
@section('content')
    <!-- Main content -->
    <main class="flex-1 overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Add New Book</h2>
                <a href="dashboard.html"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 flex items-center">
                    <i class="ri-arrow-left-line mr-2"></i> Back to Dashboard
                </a>
            </div>

            <!-- Add book form -->
            <div class="bg-white rounded-lg shadow p-6">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Book Name -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="bookName" class="block text-sm font-medium text-gray-700 mb-1">Book Name</label>
                            <input type="text" id="bookName" name="bookName"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent"
                                required>
                        </div>

                        <!-- Publisher -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="publisher" class="block text-sm font-medium text-gray-700 mb-1">Publisher</label>
                            <input type="text" id="publisher" name="publisher"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent"
                                required>
                        </div>

                        <!-- Year Published -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="yearPublished" class="block text-sm font-medium text-gray-700 mb-1">Year
                                Published</label>
                            <input type="number" id="yearPublished" name="yearPublished" min="1800" max="2099"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent"
                                required>
                        </div>

                        <!-- Page Count -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="pageCount" class="block text-sm font-medium text-gray-700 mb-1">Page Count</label>
                            <input type="number" id="pageCount" name="pageCount" min="1"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent"
                                required>
                        </div>

                        <!-- Book Cover -->
                        <div class="col-span-2">
                            <label for="bookCover" class="block text-sm font-medium text-gray-700 mb-1">Book Cover
                                (Optional)</label>
                            <div class="flex items-center justify-center w-full">
                                <label for="bookCover"
                                    class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <i class="ri-upload-cloud-line text-3xl text-gray-400 mb-2"></i>
                                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to
                                                upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500">PNG, JPG or WEBP (MAX. 2MB)</p>
                                    </div>
                                    <input id="bookCover" type="file" class="hidden" accept="image/*" />
                                </label>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-span-2">
                            <label for="description"
                                class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea id="description" name="description" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent"
                                required></textarea>
                        </div>

                        <!-- Categories -->
                        <div class="col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Categories</label>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                <div class="flex items-center">
                                    <input id="fiction" type="checkbox"
                                        class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <label for="fiction" class="ml-2 text-sm text-gray-700">Fiction</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="nonfiction" type="checkbox"
                                        class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <label for="nonfiction" class="ml-2 text-sm text-gray-700">Non-Fiction</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="science" type="checkbox"
                                        class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <label for="science" class="ml-2 text-sm text-gray-700">Science</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="history" type="checkbox"
                                        class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <label for="history" class="ml-2 text-sm text-gray-700">History</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end">
                        <button type="button"
                            class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 mr-2">Cancel</button>
                        <button type="submit"
                            class="px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700">Add Book</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection