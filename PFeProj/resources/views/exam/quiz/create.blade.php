<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nouvelle Question</title>
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/programming.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Tab icon -->
    <link rel="icon" href="{{ asset('img/svgs/board.svg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/cours/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cours/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cours/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cours/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cours/components.css') }}" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cheatsheet/">

    

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
    <link href="cheatsheet.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/cours/bootstrap.min.js') }}" defer></script>
    <script>
      function check_eduration(){
          var duration=document.frme.duration.value;
          if (isNaN(duration) || duration<=10 ){
           
              document.getElementById("msg").innerHTML='<p class="alert alert-warning col-md-8 mb-3" role="alert">Entrez uniquement une valeur numérique positive !</p>';
              return false;
          }else{
              return true;
          }
      }
      
   </script>
   
  </head>
  <body>
  @include('layouts.navigation')
    <div class="sticky-top">
      <!-- Header -->
    <x-responsive-nav-link/ >
    </div>
    <main  class="container">
      <!-- Banner -->
      @include('layouts.navcours')

      <!-- Content -->
      <section class="container mt-5">
        <div class="row">
          <div class="col col-lg-3 d-none d-lg-block">
          <div>
            @include('components.sidebar')
          </div>

            
     
        </div>
          <div class="col col-lg-9">
            @if(Session::has('success'))
            <div class="alert alert-success col-lg-12">
              <p>Votre Quiz est crée avec succés ! <a href="/question_choix_multiple">
              {{Session::get('success')}}
              </a></p>
          </div>
        @endif
            <!-- Click to show input area -->
            <form class="p-4 p-md-5 border border-warning  rounded-3  text-black font-weight-bold bg-light" name="frme" onsubmit="return check_eduration()" method="post" action="{{url('/quizes/{id}') }}" >
              @csrf
                <button class="text-warning  d-inline-flex h3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                  </svg> Créer un nouveau Quiz :</button>
                  
                <div class="form-row mt-6">
                  <div class="col-md-8 mb-3">
                    <label for="validationServer01" class="ml-3 mb-2"> <span class="text-warning">*</span>Nom du Quiz : </label>
                    <input autofocus type="text" class="form-control is-valid" id="quiz_name" name="quiz_name" placeholder="QuizName"  required>
                    
                  </div>
                  <div class="col-md-8 mb-3">
                    <label for="validationServer02" class="ml-3 mb-2"><span class="text-warning">*</span>Description :</label>
                    <input  type="text" class="form-control is-valid" id="description" name="description" placeholder="DescriptionQuiz"  required>
                    
                  </div>
                  <div class="col-md-8 mb-3">
                    <label for="validationServer01" class="ml-3 mb-2"><span class="text-warning">*</span>Date de passage </label>
                    <input type="date" class="form-control is-valid" min="2021-01-01"  value="2022-06-25";
                      
                       id="date_de_passage" name="date_de_passage" placeholder="QuizName"  required>
                    
                  </div>
                  <div class="col-md-8 mb-3">
                    <div class="ml-3 mb-2">
                        
                        
                      <span class="text-warning">*</span>Durée du Quiz (en min) :
                    </div>
                    <input  name="duration"
                    type="text" class="form-control is-valid" id="duration"  placeholder="QuizDuration"  required>
                    <div class="valid-feedback">
                        La durée est en minutes.
                        
                    <span id="msg"></span>
                    </div>
                  </div>
                </div>
                
                    <input class=" btn btn-lg btn-warning col-lg-3 mt-5 text-white"  type="submit" value="Créer le Quiz " name="send" style="margin-left: 305px" >
                 </form>
              </div>
        </div>
      </section>
    </main>
    
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="cheatsheet.js"></script>
  </body>
</html>
