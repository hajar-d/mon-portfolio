<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>@yield('title', 'Mon Portfolio')</title>

    <!-- Lien vers les fichiers CSS compilés par Tailwind -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
        .contact-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 16px;
        background-color: transparent;
        color: white;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-icon:hover {
        transform: translateY(-5px); /* Moves the icon up slightly */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Adds a larger shadow on hover */
    }

         @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        .float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes typing {
            from { width: 0 }
        }
        @keyframes cursor {
            50% { border-color: transparent }
        }
        .typing {
            width: 360px;
            overflow: hidden;
            white-space: nowrap;
            border-right: 2px solid #7E2EA0;
            animation: typing 4s steps(12, end), cursor .4s steps(12, end) infinite;
        }

        @keyframes leMovingBackFromRight {
            0% {
                transform: rotate(45deg);
            }
            40% { 
                transform: rotate(45deg) 
            }
            100% {
                transform: rotate(0deg);
                animation-timing-function: cubic-bezier(0, .9, .7, 1.45);
            }
        }
        .leMovingBackFromRight { 
          animation: leMovingBackFromRight 2s ease forwards; 
          transform-origin: bottom;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        .zoomIn {
            animation: zoomIn 3s ease forwards;
        }

        @keyframes moveAndRotate {
      0%, 100% {
        transform: translateY(0) rotate(0deg);
      }
      50% {
        transform: translateY(-0px) rotate(0deg);
      }
    }

    .animate-move-rotate {
      animation: moveAndRotate 4s infinite linear;
    }

    .board {
      background: #2b2b2b;
      color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      font-family:
       'Homemade Apple',
       cursive;
    }

    .board h2 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }

    .board p {
      font-size: 1.25rem;
      line-height: 1.6;
    }
    
    .sticky-nav {
        position: -webkit-sticky; /* For Safari */
        position: sticky;
        top: 0; /* Stick to the top of the page */
        z-index: 1000; /* Make sure it's above other elements */
        background-color: white; /* Background color to match your design */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow effect */
    }

</style>
</head>

<body class="bg-black font-sans leading-normal tracking-normal">


    <!-- Barre de navigation -->
        @include('nav')

    <!-- Contenu de la page -->
    <div class="container mx-auto my-18">
        @yield('content')
    </div>

    <!-- Pied de page -->
    @include('footer')

    <!-- Scripts JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
