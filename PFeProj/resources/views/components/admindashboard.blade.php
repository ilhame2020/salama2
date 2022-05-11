<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Page Administrateur - Ecole supérieure de Technologie de Meknes </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    
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

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
  
   
    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body>
   



<header class="navbar navbar-dark sticky-top bg-warning flex-md-nowrap p-0 shadow " >
  <div  class="navbar col-md-3 col-lg-3 me-0 px-3 ">

  </div>
    <div class=" col-lg-9 " style="margin-left :30px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold;font-style: oblique;letter-spacing:3px;">
      <div class="col-lg-12" >
        <div style="display: flex;"> 
           ESTM - Ecole Supérieure de Technologie de Meknés </br> Dashboard admin</div>
      </div>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <!-- Authentication -->
       @auth('webadmin')
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <x-dropdown-link id="admin-logout" :href="route('admin.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                     {{ __('Se deconnecter') }}
                               

                               </x-dropdown-link>
                           </form>
                                    
                        @endauth  
    </div>
    
                       
                
</header>


<div class="container-fluid">
  <div class="row">
<!--<nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light sidebar collapse text-dark">
      <div class="position-sticky pt-3 " style="margin-left :10px; margin-top: 20px;">
        <nav class="small" id="toc">
        <ul class="nav flex-column">
          
          <li class="nav-item">
            <a  href="/admin/etudiant">
              <span data-feather="users"></span>
              Les étudiants
            </a>
          </li>
          <li class="nav-item">
            <a  href="/admin/professeur">
              <span data-feather="users"></span>
              Les professeurs
            </a>
          </li>
          <li class="nav-item">
            <a  href="/admin/filiere">
              <span data-feather="file"></span>
              Les filières
            </a>
          </li>
          <li class="nav-item">
            <a  href= "/admin/section">
              <span data-feather="bar-chart-2"></span>
             Les sections
            </a>
          </li>
          <li class="nav-item">
            <a  href="/admin/groupe_tp">
              <span data-feather="plus"></span>
              Les groupes 
            </a>
          </li>
        </ul>
      </div>
</nav> -->
 
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light col-lg-3" >
  <a href="#" class="mb-auto mt-3 ml-3 d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    
    <span class="fs-4 ml-3">Admin</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto mt-3">
   
      <li class="nav-item">
          <a href="/admin/professeur" class="nav-link link-dark" aria-current="page">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
              <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
            </svg>
            Les professeurs
          </a>
      </li>
    <li>
      <a href="/admin/etudiant" class="nav-link link-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
        </svg>
        Les étudiants
      </a>
    </li>
    <li>
      <a href="/admin/section" class="nav-link link-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
          <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
          <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
        </svg> Les sections des cours
      </a>
    </li>
    <li>
      <a href="/admin/groupe_tp" class="nav-link link-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files-alt" viewBox="0 0 16 16">
          <path d="M11 0H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2 2 2 0 0 0 2-2V4a2 2 0 0 0-2-2 2 2 0 0 0-2-2zm2 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1V3zM2 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V2z"/>
        </svg> Les groupes de travaux pratiques 
      </a>
    </li>
    
  </ul>
  
</div>
    <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 ">
      <div class="navbar navbar-dark bg-warning flex-md-nowrap p-0 shadow rounded " style=" margin-top: 25px; margin-bottom: 25px;">
        <input class="form-control form-control-dark w-100 text-dark" id="searchbar" onkeyup="search_element()" type="text"
        name="search" placeholder="Chercher un département, une filière , un professeur , un étudiant ..." aria-label="search">
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Chercher</a>
          </div>
        </div>
      </div>
      @yield('content')

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
  <script>
    // JavaScript code
 function search_element() {
     let input = document.getElementById('searchbar').value
     input=input.toLowerCase();
     let x = document.getElementsByClassName('element');
       
     for (i = 0; i < x.length; i++) { 
         if (!x[i].innerHTML.toLowerCase().includes(input)) {
             x[i].style.display="none";
         }
         else {
             x[i].style.display="list";                 
         }
     }
 }
  </script>
</html>
