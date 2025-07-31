<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Greoo Admin</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#6C2EB9",
              secondary: "#4B5563",
            },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
          },
        },
      };
    </script>
    <style>
      :where([class^="ri-"])::before { content: "\f3c2"; }
      .sidebar-link.active { background-color: rgba(255,255,255,0.1); }
      .sidebar-link:hover:not(.active) { background-color: rgba(255,255,255,0.05); }
    </style>
  </head>
  <body class="bg-gray-50">
    <div class="flex overflow-hidden">
      <!-- Sidebar -->
      <aside id="sidebar" class="w-64 bg-primary text-white fixed h-full z-40 transform transition-transform duration-300 lg:translate-x-0 -translate-x-full">
        <div class="p-4 h-16 flex items-center border-b border-white/10 justify-between">
          <span class="text-2xl font-['Pacifico']">Greoo</span>
          <button class="lg:hidden" onclick="toggleSidebar()">
            <i class="ri-close-line text-2xl"></i>
          </button>
        </div>
        <nav class="p-4">
          <!-- Navigation Links -->
          <a href="{{ route('admin.index') }}" class="sidebar-link active flex items-center gap-3 px-4 py-3 rounded-lg mb-1">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-dashboard-line"></i>
            </div>
            <span>Tableau de bord</span>
          </a>
          <a href="{{ route('admin.index') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg mb-1">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-calendar-line"></i>
            </div>
            <span>Réservations</span>
          </a>
          <a href="{{ route('admin.users') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg mb-1">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-user-line"></i>
            </div>
            <span>Utilisateurs</span>
          </a>
          <a href="{{ route('admin.salles') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg mb-1">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-building-line"></i>
            </div>
            <span>Salles</span>
          </a>
          <a href="{{ route('admin.events') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg mb-1">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-calendar-event-line"></i>
            </div>
            <span>Événements</span>
          </a>
          <a href="{{ route('admin.paiement') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg mb-1">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-money-euro-circle-line"></i>
            </div>
            <span>Paiements</span>
          </a>
          <a href="{{ route('admin.message') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg mb-1">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-message-2-line"></i>
            </div>
            <span>Messages</span>
          </a>
          <a href="{{ route('admin.notifications') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg mb-1">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-notification-3-line"></i>
            </div>
            <span>Notifications</span>
          </a>
          <a href="{{ route('admin.setting') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg">
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-settings-line"></i>
            </div>
            <span>Paramètres</span>
          </a>
        </nav>
      </aside>

      <!-- Main -->
      <main class="flex-1 lg:ml-64 w-full">
        <header class="h-16 bg-white border-b flex items-center justify-between px-6 fixed w-full lg:w-[calc(100%-16rem)] z-30">
          <div class="flex items-center gap-4">
            <!-- Hamburger -->
            <button class="lg:hidden" onclick="toggleSidebar()">
              <i class="ri-menu-line text-2xl"></i>
            </button>
            <div class="relative">
              <input type="text" placeholder="Rechercher..." class="pl-10 pr-4 py-2 rounded-lg bg-gray-100 border-none text-sm w-64" />
              <div class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 flex items-center justify-center text-gray-400">
                <i class="ri-search-line"></i>
              </div>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <a href="{{ route('admin.notifications') }}" class="relative w-10 h-10 flex items-center justify-center">
              <i class="ri-notification-3-line text-xl"></i>
                @if ($unreadCount > 0)
                  <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full">{{ $unreadCount }}</span>
                @endif
            </a>
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                <i class="ri-user-line"></i>
              </div>
              <div class="text-sm">
                <div class="font-medium">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</div>
                <!--<div class="text-xs text-gray-500">Super Admin</div>-->
              </div>
            </div>
          </div>
        </header>
        
          <!-- App header ends -->

          <!-- Layout Content -->
            @yield('main')
          <!--/ Layout Content -->
    <script>
      function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("-translate-x-full");
      }
    </script>
  </body>
</html>