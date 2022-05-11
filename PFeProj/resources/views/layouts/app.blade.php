<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>E-learning EST Meknes</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/522a15aef9.js" crossorigin="anonymous"></script>
    

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/programming.css') }}">
    
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/cours/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/cours/common.css') }}" />
<link rel="stylesheet" href="{{ asset('css/cours/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/cours/reset.css') }}" />
<link rel="stylesheet" href="{{ asset('css/cours/components.css') }}" />
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cheatsheet/">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/presentative/slick.css')}}"/>

<link rel="icon" href="{{ asset('estmLogo.png') }}" />

<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            

            <!-- Page Heading -->
            <header >
                
            @include('layouts.navigation')
                
            </header>

            <!-- Page Content -->
           <main>
                {{ $slot }}
            </main> 
              
<footer class="footer">
      <div  class="container-footer">
        <div class="row-footer">
          <div class="footer-col">
              <h4>Des liens rapides</h4>
               <ul>
                   <li><a href="#">EST meknes</a></li>
                   <li><a href="#">Description</a></li>
                   <li><a href="#">Visitez-nous</a></li>
               </ul>     
            </div>  
            <div class="footer-col">
              <h4>est meknes</h4>
               <ul>
                   <li><a href="#">FAQS</a></li>

               </ul>     
            </div>  
            <div class="footer-col">
              <h4>Enseignement a distance</h4>
               <ul>
                   <li><a href="#">Les professeurs</a></li>
                   <li><a href="#">Cours disponibles</a></li>

                </ul>     
            </div>   
            <div class="footer-col">
              <h4>Suivez-nous</h4>
               <ul>
                   <div class="social-links">
                   <a href="#"></a>
                    </div>
               </ul>     
            </div>     
        </div>
      </div>
    
  </footer> 
 
        </div>
        <p class="footercopyright">
		EST Meknes&nbsp;2022-
		<span class="footer-span"></span>
	&copy;&nbsp;All&nbsp;rights&nbsp;reserved
	</p>  
    </body>

</html>
