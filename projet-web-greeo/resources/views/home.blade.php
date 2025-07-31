@extends('layouts.app')

@section('main')
    <!-- header -->
    <header>
        <div class="banner-content">
            <h1 class="mb-4">Bienvenue à <span class="text-color-top">GREEO</span></h1>
            <p class="mb-4">Rejoignez-nous pour une journée de découvertes et d'inspiration</p>
            <div class="d-flex justify-content-center gap-4">
                <button class="btn-top">Réserver maintenant</button>
                <button class="btn-transparent">Voir les salles</button>
            </div>
        </div>
    </header>

    <!-- Nos salles  -->
    <div class="container-fluid bg-light p-5">
        <div class="d-flex flex-column text-center mb-4">
            <h1 class="text-color-top fs-2 fw-bold">Nos salles disponibles</h1>
            <span class="text-black-50">Découvrez les meilleurs salles pour créer un atmosphère unique lors de vos conférence</span>
        </div>
        <div class="row g-4">

            <!-- Salle 1 -->
            <div class="col-md-6 col-lg-4">
            <div class="room-card">
                <img src="/assets/img/salles/salles-1.jpg" alt="Salle 1" class="room-img">
                <div class="room-body">
                <h5 class="room-title"><i class='bx bxs-door-open'></i> Salle Conférence Prestige</h5>
                <p class="room-location">📍 Cotonou</p>
                <p>Capacité : 100 personnes · Équipée vidéoprojecteur, climatisation, Wi-Fi</p>
                <a href="#" class="btn-top btn-sm btn-reserve" data-bs-toggle="modal" data-bs-target="#reservationModal">
                    Réserver cette salle
                </a>
                </div>
            </div>
            </div>

            <!-- Salle 2 -->
            <div class="col-md-6 col-lg-4">
            <div class="room-card">
                <img src="/assets/img/salles/salles-2.jpg" alt="Salle 2" class="room-img">
                <div class="room-body">
                <h5 class="room-title"><i class='bx bx-buildings'></i> Salle de Réunion Pro</h5>
                <p class="room-location">📍 Porto-Novo</p>
                <p>Capacité : 40 personnes · Écran interactif, café, fibre optique</p>
                <a href="#" class="btn-top" data-bs-toggle="modal" data-bs-target="#reservationModal">
                    Réserver cette salle
                </a>
                </div>
            </div>
            </div>

            <!-- Salle 3 -->
            <div class="col-md-6 col-lg-4">
            <div class="room-card">
                <img src="/assets/img/salles/salles-3.jpg" alt="Salle 3" class="room-img">
                <div class="room-body">
                <h5 class="room-title"><i class='bx bxs-graduation'></i> Salle de Formation</h5>
                <p class="room-location">📍 Abomey-Calavi</p>
                <p>Capacité : 30 personnes · Tableaux blancs, projecteur HD, espace détente</p>
                <a href="#" class="btn-top" data-bs-toggle="modal" data-bs-target="#reservationModal">
                    Réserver cette salle
                </a>
                </div>
            </div>
            </div>

         </div>
    </div>

    <!-- Comment ça marche ? -->
    <div class="container p-5 bg-white">
        <div class="d-flex flex-column text-center mb-4">
            <h1 class="text-color-top fs-2 fw-bold">Comment ça marche ?</h1>
            <span class="text-black-50">Réserver la salle qui vous convient en quelques cliques</span>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="process mb-4">
                <span class="rounded-circle mb-4">1</span>
                <h3 class="mt-3 fs-4 fw-bolder">Trouvez votre salle</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quibusdam.</p>
            </div>
            <div class="process mb-4">
                <span class="rounded-circle mb-4">2</span>
                <h3 class="mt-3 fs-4 fw-bolder">Sélectionnez la date</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quibusdam.</p>
            </div>
            <div class="process mb-4">
                <span class="rounded-circle mb-4">3</span>
                <h3 class="mt-3 fs-4 fw-bolder">Confirmez et payez</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quibusdam.</p>
            </div>
        </div>
    </div>

    <!-- Nos evenements  -->
    <div class="container-fluid bg-light p-5">
        <div class="d-flex flex-column text-center mb-4">
            <h1 class="text-color-top fs-2 fw-bold">Nos Evènements</h1>
            <span class="text-black-50">Découvrez les meilleurs salles pour créer un atmosphère unique lors de vos conférence</span>
        </div>
        <div class="row g-4">

            <!-- Salle 1 -->
            <div class="col-md-6 col-lg-4">
            <div class="room-card">
                <img src="/assets/img/salles/salles-1.jpg" alt="Salle 1" class="room-img">
                <div class="room-body">
                <h5 class="room-title"><i class='bx bxs-door-open'></i> Salle Conférence Prestige</h5>
                <p class="room-location">📍 Cotonou</p>
                <p>Capacité : 100 personnes · Équipée vidéoprojecteur, climatisation, Wi-Fi</p>
                <a href="#" class="btn-top btn-sm btn-reserve" data-bs-toggle="modal" data-bs-target="#reservationModal">
                    Réserver cette salle
                </a>
                </div>
            </div>
            </div>

            <!-- Salle 2 -->
            <div class="col-md-6 col-lg-4">
            <div class="room-card">
                <img src="/assets/img/salles/salles-2.jpg" alt="Salle 2" class="room-img">
                <div class="room-body">
                <h5 class="room-title"><i class='bx bx-buildings'></i> Salle de Réunion Pro</h5>
                <p class="room-location">📍 Porto-Novo</p>
                <p>Capacité : 40 personnes · Écran interactif, café, fibre optique</p>
                <a href="#" class="btn-top" data-bs-toggle="modal" data-bs-target="#reservationModal">
                    Réserver cette salle
                </a>
                </div>
            </div>
            </div>

            <!-- Salle 3 -->
            <div class="col-md-6 col-lg-4">
            <div class="room-card">
                <img src="/assets/img/salles/salles-3.jpg" alt="Salle 3" class="room-img">
                <div class="room-body">
                <h5 class="room-title"><i class='bx bxs-graduation'></i> Salle de Formation</h5>
                <p class="room-location">📍 Abomey-Calavi</p>
                <p>Capacité : 30 personnes · Tableaux blancs, projecteur HD, espace détente</p>
                <a href="#" class="btn-top" data-bs-toggle="modal" data-bs-target="#reservationModal">
                    Réserver cette salle
                </a>
                </div>
            </div>
            </div>

         </div>
      </div>
    </div>

    <!-- Pourquoi choisir ? -->
    <div class="container p-5 bg-white">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="text-color-top fs-2 fw-bold">Pourquoi nous choisir ?</h1>
            <span class="text-black-50">Nous avons les meilleurs salles de conférence</span>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="mb-4">
                <span class="bg-light why-p rounded-circle bg-pourquoi mb-4"><i class="fas fa-bolt fs-2"></i></span>
                <h3 class="mt-3 fs-4">Réservation instantané</h3>
                <p>Réservez votre salle en quelques secondes et recevez une confirmation immédiate</p>
            </div>
            <div class="mb-4">
                <span class="rounded-circle mb-4 why-p rounded-circle bg-pourquoi"><i class="fas fa-map-marker-alt fs-2 "></i></span>
                <h3 class="mt-3 fs-4">Localisations premium</h3>
                <p>Nos salles sont situées dans les quartiers d'affaires les plus stratégiques</p>
            </div>
            <div class="mb-4">
                <span class="rounded-circle why-p rounded-circle bg-pourquoi mb-4"><i class="fas fa-sliders-h fs-2"></i></span>
                <h3 class="mt-3 fs-4">Équipements haut de gamme</h3>
                <p>Toutes nos salles sont équipées de matériel audiovisuel de dernière génération</p>
            </div>
        </div>
    </div>

    

    <!-- Temoignages -->
    <div class=" p-5 bg-light">
        <div class="d-flex flex-column text-center mb-4">
            <h1 class="text-color-top fs-2 fw-bold">Ce que disent nos clients</h1>
            <span class="text-black-50">Découvrez le témoiganges de ceux qui on déjà réserver nos salles</span>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <div class="col">
                <div class="testimonials mb-4 bg-white rounded-2 p-3">
                    <div class="testimonial-head d-flex gap-2 mb-2">
                        <img src="assets/img/testimonial/testimonial-1.jpg" class="rounded-pill" height="60" width="60" alt="">
                        <section>
                            <h5 class="mb-1">Géovanny SEDO</h5>
                            <div class="d-flex text-warning mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                
                            </div>
                            <span class="">Nouveau client</span>
                        </section>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat molestias voluptates quas </p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial mb-4 bg-white rounded-2 p-3">
                    <div class="testimonial-head d-flex gap-2 mb-2">
                        <img src="assets/img/testimonial/testimonial-3.jpg" class="rounded-pill" height="60" width="60" alt="">
                        <section>
                            <h5 class="mb-1">Géovanny SEDO</h5>
                            <div class="d-flex text-warning mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                
                            </div>
                            <span class="">Client régulier</span>
                        </section>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat molestias voluptates  </p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial mb-4 bg-white rounded-2 p-3">
                    <div class="testimonial-head d-flex gap-2 mb-2">
                        <img src="assets/img/testimonial/testimonial-2.jpg" class="rounded-pill" height="60" width="60" alt="">
                        <section>
                            <h5 class="mb-1">Géovanny SEDO</h5>
                            <div class="d-flex text-warning mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                
                            </div>
                            <span class="">Client occasionnel</span>
                        </section>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat molestias voluptates  </p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial mb-4 bg-white rounded-2 p-3">
                    <div class="testimonial-head d-flex gap-2 mb-2">
                        <img src="assets/img/testimonial/testimonial-1.jpg" class="rounded-pill" height="60" width="60" alt="">
                        <section>
                            <h5 class="mb-1">Géovanny SEDO</h5>
                            <div class="d-flex text-warning mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                
                            </div>
                            <span class="">Nouveau client</span>
                        </section>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat molestias voluptates quas totam </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pret à reserver -->
    <section class="p-5 reserve">
        <div class="container text-white mx-auto d-flex flex-column text-center justify-content-center">
            <h2 class="">Prêt à réserver votre salle ?</h2>
            <p class="">Découvrez nos espaces disponibles et réservez en ligne en quelques minutes seulement.</p>
            <center><button class="btn-top text-white">Commencer la réservation</button></center>
        </div>
    </section>

@endsection