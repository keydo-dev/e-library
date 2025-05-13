<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Library - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">
  <div class="flex h-screen overflow-hidden">
    <!-- Sidebar (minimal for auth pages) -->
    <aside class="w-64 bg-white border-r border-gray-200 hidden md:block">
      <div class="p-6">
        <h1 class="text-xl font-bold text-gray-800">E-Library</h1>
      </div>
      <nav class="mt-6">
        <div class="px-4 mb-2 text-xs font-semibold text-gray-400 uppercase">Main</div>
        <a href="dashboard.html" class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
          <i class="ri-dashboard-line mr-3 text-lg"></i>
          Dashboard
        </a>
        <div class="px-4 mt-6 mb-2 text-xs font-semibold text-gray-400 uppercase">Account</div>
        <a href="login.html" class="flex items-center px-4 py-2.5 text-sm font-medium bg-gray-100 text-gray-900">
          <i class="ri-login-box-line mr-3 text-lg"></i>
          Login
        </a>
        <a href="register.html" class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
          <i class="ri-user-add-line mr-3 text-lg"></i>
          Register
        </a>
      </nav>
    </aside>

    <!-- Mobile sidebar toggle -->
    <div class="md:hidden fixed bottom-4 right-4 z-50">
      <button id="sidebarToggle" class="p-3 bg-gray-800 rounded-full text-white shadow-lg">
        <i class="ri-menu-line text-xl"></i>
      </button>
    </div>

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
          <a href="dashboard.html" class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
            <i class="ri-dashboard-line mr-3 text-lg"></i>
            Dashboard
          </a>
          <div class="px-4 mt-6 mb-2 text-xs font-semibold text-gray-400 uppercase">Account</div>
          <a href="login.html" class="flex items-center px-4 py-2.5 text-sm font-medium bg-gray-100 text-gray-900">
            <i class="ri-login-box-line mr-3 text-lg"></i>
            Login
          </a>
          <a href="register.html" class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
            <i class="ri-user-add-line mr-3 text-lg"></i>
            Register
          </a>
        </nav>
      </div>
    </div>

    <!-- Main content -->
    <main class="flex-1 overflow-y-auto flex items-center justify-center p-6">
      <div class="w-full max-w-md">
        <div class="text-center mb-8">
          <h2 class="text-3xl font-bold text-gray-900">Welcome back</h2>
          <p class="text-gray-600 mt-2">Sign in to your account to continue</p>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-8">
          <form method="POST" action="{{ route('auth.login') }}">
            @csrf
            <!-- Username/Email -->
            <div class="mb-6">
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email or Username</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="ri-user-line text-gray-400"></i>
                </div>
                <input type="text" id="email" name="email" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" required>
              </div>
            </div>
            
            <!-- Password -->
            <div class="mb-6">
              <div class="flex items-center justify-between mb-1">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <a href="#" class="text-xs text-emerald-600 hover:text-emerald-800">Forgot password?</a>
              </div>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="ri-lock-line text-gray-400"></i>
                </div>
                <input type="password" id="password" name="password" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" required>
              </div>
            </div>
            
            <!-- Remember me -->
            <div class="flex items-center mb-6">
              <input id="remember" type="checkbox" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
              <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
            </div>
            
            <!-- Submit button -->
            <button type="submit" class="w-full py-2 px-4 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
              Sign in
            </button>
          </form>
          
          <!-- Divider -->
          <div class="relative flex items-center justify-center mt-6 mb-6">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative bg-white px-4 text-sm text-gray-500">Or continue with</div>
          </div>
          
          <!-- Social login buttons -->
          <div class="grid grid-cols-2 gap-3">
            <button type="button" class="py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 flex items-center justify-center">
              <i class="ri-google-fill mr-2"></i> Google
            </button>
            <button type="button" class="py-2 px-4 bg-gray-800 text-white rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 flex items-center justify-center">
              <i class="ri-github-fill mr-2"></i> GitHub
            </button>
          </div>
          
          <!-- Sign up link -->
          <div class="text-center mt-6">
            <p class="text-sm text-gray-600">
              Don't have an account? <a href="{{ route('auth.register') }}" class="font-medium text-emerald-600 hover:text-emerald-800">Sign up</a>
            </p>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Mobile sidebar toggle
    const sidebarToggle = document.getElementById('sidebarToggle');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const closeSidebar = document.getElementById('closeSidebar');

    sidebarToggle.addEventListener('click', () => {
      mobileSidebar.classList.remove('hidden');
    });

    closeSidebar.addEventListener('click', () => {
      mobileSidebar.classList.add('hidden');
    });

    // Close sidebar when clicking outside
    mobileSidebar.addEventListener('click', (e) => {
      if (e.target === mobileSidebar) {
        mobileSidebar.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
