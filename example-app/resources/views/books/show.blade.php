@extends('layouts.app')
@section('content')
    <!-- Main content -->
    <main class="flex-1 overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Book Details</h2>
                <a href="dashboard.html"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 flex items-center">
                    <i class="ri-arrow-left-line mr-2"></i> Back to Dashboard
                </a>
            </div>

            <!-- Book details -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="md:flex">
                    <!-- Book cover -->
                    <div class="md:w-1/3 bg-gray-100 p-8 flex justify-center">
                        <img src="https://via.placeholder.com/300x450" alt="Book Cover"
                            class="h-80 object-contain shadow-md rounded">
                    </div>

                    <!-- Book info -->
                    <div class="md:w-2/3 p-8">
                        <div class="flex justify-between items-start">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900">To Kill a Mockingbird</h1>
                                <p class="text-gray-600 mt-1">J.B. Lippincott & Co.</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="p-2 bg-blue-50 text-blue-600 rounded-md hover:bg-blue-100">
                                    <i class="ri-edit-line text-lg"></i>
                                </a>
                                <a href="#" class="p-2 bg-red-50 text-red-600 rounded-md hover:bg-red-100">
                                    <i class="ri-delete-bin-line text-lg"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Year Published</h3>
                                <p class="mt-1 text-gray-900">1960</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Page Count</h3>
                                <p class="mt-1 text-gray-900">281 pages</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">ISBN</h3>
                                <p class="mt-1 text-gray-900">978-0061120084</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Language</h3>
                                <p class="mt-1 text-gray-900">English</p>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-sm font-medium text-gray-500">Categories</h3>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span
                                    class="px-2 py-1 bg-emerald-50 text-emerald-700 text-xs font-medium rounded">Fiction</span>
                                <span
                                    class="px-2 py-1 bg-emerald-50 text-emerald-700 text-xs font-medium rounded">Classic</span>
                                <span
                                    class="px-2 py-1 bg-emerald-50 text-emerald-700 text-xs font-medium rounded">Historical</span>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-sm font-medium text-gray-500">Description</h3>
                            <p class="mt-2 text-gray-700 leading-relaxed">
                                To Kill a Mockingbird is a novel by Harper Lee published in 1960. It was immediately
                                successful, winning the Pulitzer Prize, and has become a classic of modern American
                                literature. The plot and characters are loosely based on Lee's observations of her family,
                                her neighbors and an event that occurred near her hometown of Monroeville, Alabama, in 1936,
                                when she was ten.
                            </p>
                            <p class="mt-4 text-gray-700 leading-relaxed">
                                The novel is renowned for its warmth and humor, despite dealing with serious issues of rape
                                and racial inequality. The narrator's father, Atticus Finch, has served as a moral hero for
                                many readers and as a model of integrity for lawyers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection