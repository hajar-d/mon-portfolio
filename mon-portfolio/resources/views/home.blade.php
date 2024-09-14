@extends('layouts.app')

@section('title', 'Home Page') <!-- This will replace the title section -->

@section('content')
    <!-- Main Content -->
    <div class="bg-transparent">
      {{-- opacity: 0.9; --}}
      <section class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/post-2.jpg') }}');">
        <main class="container mx-auto">
            <div class="relative overflow-hidden bg-transparent bg-cover">
                <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-20">
                    <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8">
                            <div class="lg:col-span-2 sm:max-w-lg lg:max-w-none">
                                <h6 class="text-gray-100 text-3xl font-bold my-4">HAJAR AKCHOUD, Développeuse Web</h6>
                                <h1 class="zoomIn text-4xl font-bold tracking-tight text-gray-500 sm:text-6xl mb-5">Créer des expériences numériques avec créativité et code</h1>
                                <p class="typing mt-2 text-xl text-gray-400">Votre vision, réalisée avec du code...</p>
                                <a href="{{ route('projets.index') }}" class="inline-block mt-12 rounded-md border border-transparent bg-blue-500 px-8 py-3 text-center font-medium text-white hover:bg-blue-600 animate-bounce">PROJETS</a>
                            </div>
                            <div class="lg:col-span-1 justify-center items-center hidden">
                                <div class="w-80 h-96 overflow-hidden rounded-lg float">
                                    <img src="https://octodex.github.com/images/red-polo.png" alt="Floating Image" class="h-full w-full object-cover object-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        <div class="fixed right-10 top-1/3 flex flex-col space-y-4"> <!-- Position the icons fixed on the right side -->
          <!-- Instagram -->
          <a href="https://www.instagram.com/hajar_akchoud" target="_blank" class="contact-icon">
            <i class="fab fa-instagram text-2xl hover:text-blue-500"></i>
          </a>
          <!-- WhatsApp -->
          <a href="https://wa.me/0645642596" target="_blank" class="contact-icon">
            <i class="fab fa-whatsapp text-2xl hover:text-blue-500"></i>
          </a>
          <!-- GitHub -->
          <a href="https://github.com/hajar-d" target="_blank" class="contact-icon">
            <i class="fab fa-github text-2xl hover:text-blue-500"></i>
          </a>
          <!-- Gmail -->
          <a href="mailto:hajarakchoud@gmail.com" target="_blank" class="contact-icon">
            <i class="fas fa-envelope text-2xl hover:text-blue-500"></i>
          </a>
        </div>
        
    </section>
    
  
    <section>
      <div class="py-24 sm:py-32">
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:text-center">
                  <h2 class="text-base font-semibold leading-7 text-gray-300">À propos</h2>
                  <p class="mt-2 text-3xl font-bold tracking-tight text-gray-400 sm:text-4xl">Bonjour, je m'appelle Hajar, bienvenue sur mon portfolio !</p>
                  <p class="mt-6 text-lg leading-8 text-gray-500">Ici, vous trouverez plus d'informations sur moi, ce que je fais, et mes compétences actuelles, principalement en programmation et technologie.</p>
              </div>
  
              <div class="mx-auto mt-16 max-w-3xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                  <h2 class="text-center mb-10 text-base font-semibold leading-7 text-gray-300">Compétences</h2>
                  <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
  
                      <!-- GitHub Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-brands fa-github text-3xl text-gray-700"></i>
                              </div>
                              GitHub
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Plateforme de développement pour la gestion de versions et la collaboration de projets.</dd>
                      </div>
  
                      <!-- CSS Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-brands fa-css3-alt text-3xl text-blue-700"></i>
                              </div>
                              CSS
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Langage de style pour la mise en forme et la présentation des pages web.</dd>
                      </div>
  
                      <!-- HTML Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-brands fa-html5 text-3xl text-gray-700"></i>
                              </div>
                              HTML
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Langage de balisage pour structurer le contenu des sites web.</dd>
                      </div>
  
                      <!-- Laravel Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-brands fa-laravel text-red-600 text-3xl" aria-hidden="true"></i>
                              </div>
                              Laravel
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Framework PHP moderne pour la création d'applications web robustes.</dd>
                      </div>
  
                      <!-- Database Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-solid fa-database text-3xl text-gray-700"></i>
                              </div>
                              Base de données
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Gestion et manipulation de données à l'aide de divers systèmes de gestion de bases de données (SGBD).</dd>
                      </div>
  
                      <!-- PHP Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-brands fa-php text-3xl text-gray-700"></i>
                              </div>
                              PHP
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Langage de script côté serveur pour le développement web dynamique.</dd>
                      </div>
  
                      <!-- React Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-brands fa-react text-3xl text-gray-700"></i>
                              </div>
                              React
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Bibliothèque JavaScript pour la création d'interfaces utilisateur interactives.</dd>
                      </div>
  
                      <!-- Node.js Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-brands fa-node text-3xl text-gray-700"></i>
                              </div>
                              Node.js
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Environnement d'exécution JavaScript côté serveur pour des applications rapides et évolutives.</dd>
                      </div>
  
                      <!-- Bootstrap Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <i class="fa-brands fa-bootstrap text-3xl text-gray-700"></i>
                              </div>
                              Bootstrap
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Framework CSS pour la conception de sites web réactifs et mobiles.</dd>
                      </div>
  
                      <!-- Tailwind CSS Skill -->
                      <div class="relative pl-16 transition-transform transform hover:scale-105 hover:-translate-y-1">
                          <dt class="text-base font-semibold leading-7 text-gray-300">
                              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200">
                                  <img class="col-span-2 max-h-16 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://www.svgrepo.com/show/333609/tailwind-css.svg" alt="Tailwind CSS" width="158" height="48">
                              </div>
                              Tailwind CSS
                          </dt>
                          <dd class="mt-2 text-sm leading-7 text-gray-600">Framework utilitaire CSS pour un développement web rapide et personnalisé.</dd>
                      </div>
  
                  </dl>
              </div>
          </div>
      </div>
  </section>
  
    </div>
    
    @endsection