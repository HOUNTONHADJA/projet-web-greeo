
@extends('admin.layouts.app')

@section('main')

    <div class="p-6 mt-16">
          <!-- Your dashboard content stays untouched -->
          <div class="grid md:grid-cols-2 lg:grid-cols-4  sm:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex items-center justify-between mb-4">
                <div
                  class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary"
                >
                  <i class="ri-user-line text-xl"></i>
                </div>
                <div class="text-right">
                  <div class="text-2xl font-semibold">2,451</div>
                  <div class="text-sm text-gray-500">Utilisateurs</div>
                </div>
              </div>
              <div class="text-sm text-green-500 flex items-center gap-1">
                <i class="ri-arrow-up-line"></i>
                <span>12% ce mois</span>
              </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex items-center justify-between mb-4">
                <div
                  class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary"
                >
                  <i class="ri-calendar-line text-xl"></i>
                </div>
                <div class="text-right">
                  <div class="text-2xl font-semibold">847</div>
                  <div class="text-sm text-gray-500">Réservations</div>
                </div>
              </div>
              <div class="text-sm text-green-500 flex items-center gap-1">
                <i class="ri-arrow-up-line"></i>
                <span>8% cette semaine</span>
              </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex items-center justify-between mb-4">
                <div
                  class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary"
                >
                  <i class="ri-money-euro-circle-line text-xl"></i>
                </div>
                <div class="text-right">
                  <div class="text-2xl font-semibold">€24,550</div>
                  <div class="text-sm text-gray-500">Revenus</div>
                </div>
              </div>
              <div class="text-sm text-red-500 flex items-center gap-1">
                <i class="ri-arrow-down-line"></i>
                <span>3% ce mois</span>
              </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="flex items-center justify-between mb-4">
                <div
                  class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary"
                >
                  <i class="ri-building-line text-xl"></i>
                </div>
                <div class="text-right">
                  <div class="text-2xl font-semibold">156</div>
                  <div class="text-sm text-gray-500">Salles</div>
                </div>
              </div>
              <div class="text-sm text-green-500 flex items-center gap-1">
                <i class="ri-arrow-up-line"></i>
                <span>5 nouvelles</span>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2 bg-white rounded-lg shadow-sm p-6">
              <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold">Réservations</h3>
                <div class="flex items-center gap-2">
                  <button
                    class="px-3 py-1.5 text-sm border rounded-lg !rounded-button"
                  >
                    7 jours
                  </button>
                  <button
                    class="px-3 py-1.5 text-sm border rounded-lg !rounded-button bg-primary text-white"
                  >
                    30 jours
                  </button>
                  <button
                    class="px-3 py-1.5 text-sm border rounded-lg !rounded-button"
                  >
                    1 an
                  </button>
                </div>
              </div>
              <div id="reservationsChart" class="h-80"></div>
            </div>
            <div class="bg-white rounded-lg shadow-sm p-6">
              <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold">Types de réservation</h3>
              </div>
              <div id="reservationTypesChart" class="h-80"></div>
            </div>
          </div>
        </div>

          @endsection