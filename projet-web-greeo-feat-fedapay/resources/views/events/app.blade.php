<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greoo - Dashboard Super Admin</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6C2EB9',
                        secondary: '#8B5CF6'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }
        .sidebar-nav-item {
            transition: all 0.3s ease;
        }
        .sidebar-nav-item:hover {
            background-color: rgba(139, 92, 246, 0.1);
            transform: translateX(4px);
        }
        .sidebar-nav-item.active {
            background-color: rgba(139, 92, 246, 0.2);
            border-right: 3px solid #8B5CF6;
        }
        .content-section {
            display: none;
        }
        .content-section.active {
            display: block;
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .stat-card {
            transition: transform 0.2s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Sidebar -->
    <div class="fixed left-0 top-0 h-full w-64 bg-primary text-white z-40">
        <div class="p-6 border-b border-purple-400">
            <span class="text-2xl font-['Pacifico']">Greoo</span>
        </div>
        
        <nav class="mt-6">
            <div class="px-4">
                <div class="sidebar-nav-item  px-4 py-3 cursor-pointer flex items-center gap-3 rounded-lg mx-2 {{ Route::is('events.index')  ? 'active bg-primary text-white' : '' }}" href="{{ route('events.index') }}" >
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-dashboard-line text-lg"></i>
                    </div>
                    <a href="{{ route('events.index') }}">Tableau de bord</a>
                </div>
                
                <div class="sidebar-nav-item px-4 py-3 cursor-pointer flex items-center gap-3 rounded-lg mx-2 mt-1 {{ Route::is('events.events') ? 'active bg-primary text-white' : '' }}" href="{{ route('events.events') }}" >
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-calendar-check-line text-lg"></i>
                    </div>
                    <a href="{{ route('events.events') }}">Evènements</a>
                </div>
                
            </div>
        </nav>
        <div class="absolute bottom-6 left-4 right-4">
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button class="w-full px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg flex items-center gap-3 transition-colors !rounded-button whitespace-nowrap">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-logout-box-line text-lg"></i>
                    </div>
                    <span>Déconnexion</span>
                </button>
            </form>
        </div>
    </div>

    <div class="ml-64">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <h2 class="text-xl font-semibold text-gray-800" id="page-title">Tableau de bord</h2>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="relative">
                    <input type="text" placeholder="Rechercher..." class="pl-10 pr-4 py-2 border rounded-lg w-64 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 flex items-center justify-center">
                        <i class="ri-search-line text-gray-400"></i>
                    </div>
                </div>
                
                <div class="relative">
                    <button class="p-2 rounded-lg hover:bg-gray-100 relative">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-notification-line text-xl text-gray-600"></i>
                        </div>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                </div>
                
                <div class="flex items-center gap-3">
                    <img src="https://readdy.ai/api/search-image?query=professional%20business%20person%20avatar%20portrait%20with%20clean%20background%20modern%20style&width=40&height=40&seq=admin-profile&orientation=squarish" alt="Admin" class="w-10 h-10 rounded-full object-cover">
                    <div>
                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</p>
                        <p class="text-xs text-gray-500">{{ auth()->user()->email }} </p>
                    </div>
                </div>
            </div>
        </header>




            <!-- Layout Content -->
            @yield('main')
            <!--/ Layout Content -->
</body>
</html>