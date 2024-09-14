<nav class="shadow mb-8 py-6 sticky-nav" style="background-color: rgba(255, 255, 255, 0.126);">
    <div class="container mx-auto px-6 md:px-12">
      <div class="flex justify-between items-center">
        <a href="/" class="text-lg font-semibold text-gray-900">
          <img
            class="w-12 h-11"
            src="https://icon-library.com/images/web-user-icon/web-user-icon-12.jpg"
            alt="Logo"
          />
        </a>
        <div>
          <a href="/" class="text-gray-100 hover:text-blue-500 px-4">Accueil</a>
          <a href="/projets" class="text-gray-100 hover:text-blue-500 px-4">Projets</a>
          <a href="{{ route('contact.create') }}" class="text-gray-100 hover:text-blue-500 px-4">Contact</a>
        </div>
      </div>
    </div>
  </nav>
  