@extends('admin.layouts.app')

@section('main')

    <div class="p-6 mt-16">
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-semibold mb-1">Paramètres</h1>
<p class="text-gray-500">Gérez les paramètres de votre compte et de l'application</p>
</div>
</div>
<div class="grid grid-cols-3 gap-6">
<div class="col-span-1">
<div class="bg-white rounded-lg shadow-sm overflow-hidden">
<div class="p-4 border-b">
<h3 class="font-medium">Menu des paramètres</h3>
</div>
<div class="p-2">
<a href="#profile" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary/5">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-user-line"></i>
</div>
<span>Profil</span>
</a>
<a href="#security" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-50">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-shield-line"></i>
</div>
<span>Sécurité</span>
</a>
<a href="#notifications" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-50">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-notification-line"></i>
</div>
<span>Notifications</span>
</a>
<a href="#billing" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-50">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-bank-card-line"></i>
</div>
<span>Facturation</span>
</a>
<a href="#integrations" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-50">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-plug-line"></i>
</div>
<span>Intégrations</span>
</a>
<a href="#api" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-50">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-code-line"></i>
</div>
<span>API</span>
</a>
</div>
</div>
</div>
<div class="col-span-2">
<div class="bg-white rounded-lg shadow-sm overflow-hidden">
<div class="p-6 border-b">
<div class="flex items-center gap-4">
<div class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center">
<i class="ri-user-line text-4xl text-gray-400"></i>
</div>
<div>
<h2 class="text-xl font-semibold mb-1">Admin</h2>
<p class="text-gray-500">admin@greoo.com</p>
</div>
</div>
</div>
<div class="p-6">
<div class="max-w-2xl">
<div class="mb-8">
<h3 class="text-lg font-medium mb-4">Informations personnelles</h3>
<div class="grid grid-cols-2 gap-4">
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
<input type="text" value="Admin" class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
<input type="text" value="Greoo" class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
<input type="email" value="admin@greoo.com" class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
<input type="tel" value="+33 6 12 34 56 78" class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
</div>
</div>
<div class="mb-8">
<h3 class="text-lg font-medium mb-4">Préférences</h3>
<div class="space-y-4">
<div class="flex items-center justify-between">
<div>
<div class="font-medium">Langue</div>
<div class="text-sm text-gray-500">Choisissez la langue de l'interface</div>
</div>
<select class="px-4 py-2 rounded-lg bg-gray-50 border-none text-sm pr-8">
<option>Français</option>
<option>English</option>
<option>Español</option>
</select>
</div>
<div class="flex items-center justify-between">
<div>
<div class="font-medium">Fuseau horaire</div>
<div class="text-sm text-gray-500">Définissez votre fuseau horaire</div>
</div>
<select class="px-4 py-2 rounded-lg bg-gray-50 border-none text-sm pr-8">
<option>Paris (UTC+01:00)</option>
<option>London (UTC+00:00)</option>
<option>New York (UTC-05:00)</option>
</select>
</div>
<div class="flex items-center justify-between">
<div>
<div class="font-medium">Notifications par email</div>
<div class="text-sm text-gray-500">Recevez des mises à jour par email</div>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input type="checkbox" class="sr-only peer" checked>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<div>
<div class="font-medium">Notifications push</div>
<div class="text-sm text-gray-500">Recevez des notifications sur votre navigateur</div>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input type="checkbox" class="sr-only peer">
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
<div class="mb-8">
<h3 class="text-lg font-medium mb-4">Sécurité</h3>
<div class="space-y-4">
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel</label>
<input type="password" placeholder="••••••••" class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe</label>
<input type="password" placeholder="••••••••" class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
<input type="password" placeholder="••••••••" class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
</div>
</div>
<div class="flex items-center justify-between pt-6 border-t">
<button class="px-4 py-2 text-sm border rounded-lg !rounded-button hover:bg-gray-50">Annuler</button>
<button class="px-4 py-2 text-sm bg-primary text-white rounded-lg !rounded-button">Enregistrer les modifications</button>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection