@extends('events.app')

@section('main')

     <!-- Dashboard Content -->
        <div id="dashboard" class="content-section active p-6">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="stat-card bg-white p-6 rounded-xl shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Utilisateurs inscrits</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">2,847</p>
                            <p class="text-xs text-green-600 mt-1">+12% ce mois</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="ri-user-line text-xl text-blue-600"></i>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card bg-white p-6 rounded-xl shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Réservations aujourd'hui</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">156</p>
                            <p class="text-xs text-green-600 mt-1">+8% vs hier</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="ri-calendar-check-line text-xl text-green-600"></i>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card bg-white p-6 rounded-xl shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Revenus ce mois</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">€45,230</p>
                            <p class="text-xs text-green-600 mt-1">+23% vs mois dernier</p>
                        </div>
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <i class="ri-money-dollar-circle-line text-xl text-yellow-600"></i>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card bg-white p-6 rounded-xl shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Événements actifs</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">89</p>
                            <p class="text-xs text-blue-600 mt-1">12 nouveaux cette semaine</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="ri-calendar-event-line text-xl text-purple-600"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts and Recent Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Évolution des réservations</h3>
                    <div id="reservationsChart" style="height: 300px;"></div>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Répartition des revenus</h3>
                    <div id="revenueChart" style="height: 300px;"></div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-xl shadow-sm border">
                <div class="p-6 border-b">
                    <h3 class="text-lg font-semibold text-gray-800">Activité récente</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="ri-user-add-line text-green-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-800">Nouvel utilisateur inscrit</p>
                                <p class="text-xs text-gray-500">Marie Dubois s'est inscrite - Il y a 5 minutes</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="ri-calendar-check-line text-blue-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-800">Nouvelle réservation</p>
                                <p class="text-xs text-gray-500">Salle de conférence A réservée par Jean Martin - Il y a 12 minutes</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                <i class="ri-money-dollar-circle-line text-yellow-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-800">Paiement reçu</p>
                                <p class="text-xs text-gray-500">€250 reçu pour la réservation #R-2024-001 - Il y a 18 minutes</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                                <i class="ri-calendar-event-line text-purple-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-800">Nouvel événement publié</p>
                                <p class="text-xs text-gray-500">Conférence Tech 2024 ajoutée par l'organisateur - Il y a 25 minutes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Dashboard Content -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card card-dashboard bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Tickets ouverts</h6>
                                <h2 class="mb-0">5</h2>
                            </div>
                            <i class="fas fa-ticket-alt fa-3x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dashboard bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Mes évènements</h6>
                                <h2 class="mb-0">12</h2>
                            </div>
                            <i class="fas fa-calendar-check fa-3x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dashboard bg-warning text-dark">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">En attente</h6>
                                <h2 class="mb-0">3</h2>
                            </div>
                            <i class="fas fa-clock fa-3x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Tickets -->
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="m-0">Mes tickets récents</h5>
                <a href="#" class="btn btn-sm btn-outline-primary">Voir tout</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sujet</th>
                                <th>Statut</th>
                                <th>Priorité</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#45678</td>
                                <td>Problème de connexion</td>
                                <td><span class="badge bg-success">Résolu</span></td>
                                <td><span class="badge bg-secondary">Faible</span></td>
                                <td>15/06/2023</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info">Détails</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#45677</td>
                                <td>Demande d'information</td>
                                <td><span class="badge bg-warning text-dark">En cours</span></td>
                                <td><span class="badge bg-primary">Moyenne</span></td>
                                <td>14/06/2023</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info">Détails</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#45676</td>
                                <td>Problème de paiement</td>
                                <td><span class="badge bg-danger">Urgent</span></td>
                                <td><span class="badge bg-danger">Haute</span></td>
                                <td>13/06/2023</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info">Détails</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Actions rapides</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary">
                                <i class="fas fa-plus-circle me-2"></i> Créer un nouveau ticket
                            </button>
                            <button class="btn btn-outline-success">
                                <i class="fas fa-calendar-plus me-2"></i> Nouvelle réservation
                            </button>
                            <button class="btn btn-outline-info">
                                <i class="fas fa-question-circle me-2"></i> Centre d'aide
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Dernières réservations</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Concert - Artiste X</h6>
                                    <small class="text-success">Confirmée</small>
                                </div>
                                <p class="mb-1">2 places - 25/06/2023</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Théâtre - Pièce Y</h6>
                                    <small class="text-warning">En attente</small>
                                </div>
                                <p class="mb-1">4 places - 30/06/2023</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Festival Z</h6>
                                    <small class="text-danger">Annulée</small>
                                </div>
                                <p class="mb-1">3 places - 15/07/2023</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection