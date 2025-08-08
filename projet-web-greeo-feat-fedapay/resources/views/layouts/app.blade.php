
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ config('app.name', 'Laravel') }} - Agence de Réservation de Salles de Conférence et d'Événements</title>
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
:where([class^="ri-"])::before {
content: "\f3c2";
}
body {
font-family: 'Inter', sans-serif;
}
.hero-bg {
background-image: url('/assets/img/banner.jpg');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
.gradient-text {
background: linear-gradient(135deg, #6C2EB9 0%, #8B5CF6 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}
.hover-scale {
transition: transform 0.3s ease;
}
.hover-scale:hover {
transform: scale(1.02);
}
.card-shadow {
box-shadow: 0 4px 20px rgba(108, 46, 185, 0.1);
}
.event-card {
transition: all 0.3s ease;
}
.event-card:hover {
transform: translateY(-8px);
box-shadow: 0 20px 40px rgba(108, 46, 185, 0.15);
}
.custom-scrollbar::-webkit-scrollbar {
width: 6px;
}
.custom-scrollbar::-webkit-scrollbar-track {
background: #f1f1f1;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
background: #6C2EB9;
border-radius: 3px;
}
.service-card {
transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.service-card:hover {
transform: translateY(-8px);
box-shadow: 0 20px 40px rgba(108, 46, 185, 0.15);
}
.feature-card {
transition: all 0.3s ease;
}
.feature-card:hover {
transform: translateY(-4px);
box-shadow: 0 12px 24px rgba(108, 46, 185, 0.1);
}
.gallery-item {
transition: transform 0.3s ease;
}
.gallery-item:hover {
transform: scale(1.05);
}
.mobile-menu {
transform: translateX(-100%);
transition: transform 0.3s ease;
}
.mobile-menu.active {
transform: translateX(0);
}
.scroll-smooth {
scroll-behavior: smooth;
}

.service-icon {
background: linear-gradient(135deg, #6C2EB9 0%, #8B55C9 100%);
color: white;
border-radius: 50%;
width: 4rem;
height: 4rem;
display: flex;
align-items: center;
justify-content: center;
margin: 0 auto 1rem;
box-shadow: 0 10px 30px rgba(108, 46, 185, 0.3);
}

.testimonial-card {
background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(245, 245, 245, 0.9) 100%);
backdrop-filter: blur(10px);
}
</style>
</head>
<body class="bg-white text-gray-900 scroll-smooth">
<!-- Header -->
<header class="bg-white shadow-sm sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-center h-16">
<div class="flex items-center">
  <a href="{{ route('index') }}">
    <img src="{{ asset('assets/img/logo/logo.PNG') }}" height="20" width="120" alt="">
  </a>
</div>
<!-- Desktop Navigation -->
<nav class="hidden md:flex space-x-8">
<a href="{{ route('index') }}" class="text-gray-700 hover:text-primary transition-colors">Accueil</a>
<a href="#" class="text-gray-700 hover:text-primary transition-colors">A propos</a>
<a href="{{ route('salles') }}" class="text-gray-700 hover:text-primary transition-colors">Nos Salles</a>
<a href="{{ route('evenements') }}" class="text-gray-700 hover:text-primary transition-colors">Nos Événements</a>
<a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
</nav>
<div class="flex items-center space-x-4">
<a href="{{ route('login') }}" class="hidden md:block bg-primary text-white px-6 py-2 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
Poster votre événement
</a>
<!-- Mobile Menu Button -->
<button id="mobile-menu-btn" class="md:hidden w-8 h-8 flex items-center justify-center">
<i class="ri-menu-line text-xl"></i>
</button>
</div>
</div>
</div>
<!-- Mobile Menu -->
<div id="mobile-menu" class="mobile-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg md:hidden z-50">
<div class="p-4">
<div class="flex justify-between items-center mb-8">
<h1 class="text-xl font-['Pacifico'] text-primary">Greoo</h1>
<button id="mobile-menu-close" class="w-8 h-8 flex items-center justify-center">
<i class="ri-close-line text-xl"></i>
</button>
</div>
<nav class="space-y-4">
<a href="#accueil" class="block py-2 text-gray-700 hover:text-primary transition-colors">Accueil</a>
<a href="#salles" class="block py-2 text-gray-700 hover:text-primary transition-colors">Nos Salles</a>
<a href="#evenements" class="block py-2 text-gray-700 hover:text-primary transition-colors">Nos Événements</a>
<a href="#galerie" class="block py-2 text-gray-700 hover:text-primary transition-colors">Galerie</a>
<a href="#contact" class="block py-2 text-gray-700 hover:text-primary transition-colors">Contact</a>
<a href="{{ route('login') }}" class="w-full bg-primary text-white py-2 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap mt-4">
Poster votre événement
</a>
</nav>
</div>
</div>
</header>


<!-- Layout Content -->
  @yield('main')
  <!--/ Layout Content -->

</section>
<!-- Footer -->
<footer class="bg-gray-900 text-white py-16">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
<div>
<h3 class="text-xl font-['Pacifico'] text-primary mb-4">Greoo</h3>
<p class="text-gray-400 mb-4">
Votre partenaire de confiance pour la réservation d'espaces événementiels professionnels.
</p>
<div class="flex space-x-4">
<a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-lg hover:bg-primary transition-colors">
<i class="ri-facebook-line"></i>
</a>
<a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-lg hover:bg-primary transition-colors">
<i class="ri-twitter-line"></i>
</a>
<a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-lg hover:bg-primary transition-colors">
<i class="ri-linkedin-line"></i>
</a>
<a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-lg hover:bg-primary transition-colors">
<i class="ri-instagram-line"></i>
</a>
</div>
</div>
<div>
<h4 class="text-lg font-semibold mb-4">Accueil</h4>
<ul class="space-y-2 text-gray-400">
<li><a href="#" class="hover:text-white transition-colors">Conférences</a></li>
<li><a href="#" class="hover:text-white transition-colors">Formations</a></li>
<li><a href="#" class="hover:text-white transition-colors">Ateliers</a></li>
<li><a href="#" class="hover:text-white transition-colors">Événements hybrides</a></li>
</ul>
</div>
<div>
<h4 class="text-lg font-semibold mb-4">Entreprise</h4>
<ul class="space-y-2 text-gray-400">
<li><a href="#" class="hover:text-white transition-colors">À propos</a></li>
<li><a href="#" class="hover:text-white transition-colors">Notre équipe</a></li>
<li><a href="#" class="hover:text-white transition-colors">Carrières</a></li>
<li><a href="#" class="hover:text-white transition-colors">Partenaires</a></li>
</ul>
</div>
<div>
<h4 class="text-lg font-semibold mb-4">Newsletter</h4>
<p class="text-gray-400 mb-4">Restez informé de nos nouveautés et offres spéciales.</p>
<div class="flex">
<button class="bg-primary px-4 py-2 rounded-r-lg hover:bg-opacity-90 transition-colors">
<i class="ri-send-plane-line"></i>
</button>
</div>
</div>
</div>
<div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 text-sm">© 2024 Greoo. Tous droits réservés.</p>
<div class="flex space-x-6 mt-4 md:mt-0">
<a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Mentions légales</a>
<a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Politique de confidentialité</a>
<a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">CGU</a>
</div>
</div>
</div>
</footer>
<script id="mobile-menu-script">
document.addEventListener('DOMContentLoaded', function() {
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuClose = document.getElementById('mobile-menu-close');
mobileMenuBtn.addEventListener('click', function() {
mobileMenu.classList.add('active');
});
mobileMenuClose.addEventListener('click', function() {
mobileMenu.classList.remove('active');
});
// Close menu when clicking on links
const mobileLinks = mobileMenu.querySelectorAll('a');
mobileLinks.forEach(link => {
link.addEventListener('click', function() {
mobileMenu.classList.remove('active');
});
});
});
</script>
<script id="gallery-filter-script">
document.addEventListener('DOMContentLoaded', function() {
const filterBtns = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');
filterBtns.forEach(btn => {
btn.addEventListener('click', function() {
const filter = this.getAttribute('data-filter');
// Update active button
filterBtns.forEach(b => {
b.classList.remove('bg-primary', 'text-white');
b.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-300');
});
this.classList.add('bg-primary', 'text-white');
this.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-300');
// Filter items
galleryItems.forEach(item => {
if (filter === 'all' || item.classList.contains(filter)) {
item.style.display = 'block';
} else {
item.style.display = 'none';
}
});
});
});
});
</script>
<script id="smooth-scroll-script">
document.addEventListener('DOMContentLoaded', function() {
const links = document.querySelectorAll('a[href^="#"]');
links.forEach(link => {
link.addEventListener('click', function(e) {
e.preventDefault();
const target = document.querySelector(this.getAttribute('href'));
if (target) {
target.scrollIntoView({
behavior: 'smooth',
block: 'start'
});
}
});
});
});
</script>
<script type="text/javascript">

        FedaPay.init('#', {
        public_key: 'pk_sandbox_NERgO8jnhcsTVhkwYgzn0Ryg',
        transaction: {
            amount: 500,
            description: 'Paiement de test',
            currency: {
            iso: 'XOF'
            }
        },
        onComplete: function (response) {
            if (response.transaction.status === 'approved'|| response.transaction.status === 'transferred' ) {
                alert(' Votre transaction d\'id'+response.transaction.id+' a été validé avec succès');
            }
            else if(response.transaction.status === 'canceled' || response.transaction.status === 'declined'){
                alert('Votre paiement a été annulé')
            } 
            else if(response.transaction.status === 'refunded'){
                alert('Votre paiement a été remboursé ')
            } 
            else{
                alert('Votre paiement est en attente ou n\'a pas été finalisé !')
            }

            
            // Redirige vers Laravel avec un identifiant de transaction
            window.location.href = '/?transaction_id=' + response.transaction.id +'&status='+response.transaction.status;

        },
        onClose: function () {
            alert("Fenêtre de paiement fermée");
        }
        });
    </script>

</body>
</html>