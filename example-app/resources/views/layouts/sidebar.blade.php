<!-- Sidebar -->
<aside class="w-64 bg-white border-r border-gray-200 hidden md:block">
    <div class="p-6">
        <h1 class="text-xl font-bold text-gray-800">E-Library</h1>
    </div>
    <nav class="mt-6">
        <div class="px-4 mb-2 text-xs font-semibold text-gray-400 uppercase">Main</div>
        <a href="dashboard.html" class="flex items-center px-4 py-2.5 text-sm font-medium bg-gray-100 text-gray-900">
            <i class="ri-dashboard-line mr-3 text-lg"></i>
            Dashboard
        </a>
        <a href="create.html"
            class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
            <i class="ri-add-line mr-3 text-lg"></i>
            Buku
        </a>
        <a href="create.html"
            class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
            <i class="ri-add-line mr-3 text-lg"></i>
            Add New Book
        </a>
        <div class="px-4 mt-6 mb-2 text-xs font-semibold text-gray-400 uppercase">Account</div>
        <a href="login.html"
            class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
            <i class="ri-login-box-line mr-3 text-lg"></i>
            Login
        </a>
        <a href="register.html"
            class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
            <i class="ri-user-add-line mr-3 text-lg"></i>
            Register
        </a>
    </nav>
</aside>

<!-- Mobile sidebar -->
<div id="mobileSidebar" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-40 hidden">
    <div class="absolute right-0 h-full w-64 bg-white shadow-lg transform transition-transform duration-300">
        <div class="p-6 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">E-Library</h1>
            <button id="closeSidebar" class="text-gray-500 hover:text-gray-700">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>
        <nav class="mt-6">
            <div class="px-4 mb-2 text-xs font-semibold text-gray-400 uppercase">Main</div>
            <a href="dashboard.html"
                class="flex items-center px-4 py-2.5 text-sm font-medium bg-gray-100 text-gray-900">
                <i class="ri-dashboard-line mr-3 text-lg"></i>
                Dashboard
            </a>
            <a href="create.html"
                class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                <i class="ri-add-line mr-3 text-lg"></i>
                Add New Book
            </a>
            <div class="px-4 mt-6 mb-2 text-xs font-semibold text-gray-400 uppercase">Account</div>
            <a href="login.html"
                class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                <i class="ri-login-box-line mr-3 text-lg"></i>
                Login
            </a>
            <a href="register.html"
                class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                <i class="ri-user-add-line mr-3 text-lg"></i>
                Register
            </a>
        </nav>
    </div>
</div>
