<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Experienced backend developer specializing in creating scalable server-side solutions using PHP and JavaScript.">
    <meta name="keywords" content="Ivan Christian Dumalanta, ivancreates, Ivan, backend developer, Dumalanta">
    <meta name="author" content="Your Name">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>{{$title}}</title>
    @vite(['resources/sass/app.css', 'resources/js/app.js'])
</head>
<style>
    * {
        font-family: 'poppins', sans-serif;
    }
    .container-fluid {
      margin: 0px;
      padding: 0px;
    }
    .mt-5 {
      margin-top: 5rem;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg m-5 m-lg-5 m-md-5 mx-4">
        <div class="container-fluid lg-container md-container">
          <div class="log">
            <x-navbar href="/" :active="request()->is('Home')">
              <img src="{{ asset('img/my-logo.svg') }}" alt="" width="50" height="44">
            </x-navbar>
            
          </div>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
            <ul class="navbar-nav gap-4 d-flex ms-auto justify-content-center align-items-center">
                <li class="nav-item">
                  <x-navbar href="/About" :active="request()->is('About')">About</x-navbar>
                </li>
                <li class="nav-item">
                    <x-navbar href="/Projects" :active="request()->is('projects')">Works</x-navbar>
                </li>
                <li class="nav-item">
                    <x-navbar href="/Experience" :active="request()->is('Experience')">Experience</x-navbar>
                </li>
                
                <li class="nav-item">
                    <x-navbar href="/Contact" :active="request()->is('Contact')">Reach out</x-navbar>
                  </li>
                 
              </ul>
            </div>
          </div>
      </nav>
      <div class="container-fluid">
        {{$slot}}
      </div>
    
        <footer class="text-center text-white mt-5" style="background-color: #0a4275;">
          <!-- Grid container -->
          <div class="container p-4 pb-0">
            <!-- Section: CTA -->
            <section class="">
              <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Register for free</span>
                <button type="button" class="btn btn-outline-light btn-rounded">
                  Sign up!
                </button>
              </p>
            </section>
            <!-- Section: CTA -->
          </div>
          <!-- Grid container -->
      
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">IvanCreates.dev</a>
          </div>
          <!-- Copyright -->
        </footer>

</body>
</html>