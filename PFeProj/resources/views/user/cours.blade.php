<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cours</title>
    <script src="https://kit.fontawesome.com/522a15aef9.js" crossorigin="anonymous"></script>

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

    <!-- Scripts -->
    <script src="{{ asset('js/cours/bootstrap.min.js') }}" defer></script>
  </head>
  <style>
    .cal{
      width: 30%;
    min-width: 330px;
        }
    .rest{
      width: 60%;
    min-width: 330px;  
    }    
    .row{
      justify-content:center;
    }
  </style>
  <body>
 
    @include('layouts.navigation')

    <main  class="container">
      @include('layouts.navcours')


      <section class="container mt-5">
        <div class="row">
        @if(Session::has('success'))
                                <div class="alert alert-success col-lg-12">
                                {{Session::get('success')}}
                            </div>
                            @endif
        
           <!-- <div class="col col-lg-3 d-none d-lg-block">
            
            <div class="border pt-4 px-4 pb-5">
              <div class="mb-4">Calendrier</div>
              <p class="mb-5">Aucun travail à rendre !</p>
              <a href="#" class="d-block text-success text-end">Voir tout</a>
            </div>
          </div> -->
          <div class="cal">
          @foreach ($dev as $d)

              <div class="my-3 col   d-lg-block">
            
                <div class="shadow rounded btn-warning border pt-4 px-4 pb-5">
                  <div class="mb-4 h2 text-justify text-white">Un Devoir à Rendre : {{ $d->titre }}</div>
                    <p style="color:red;" class=" h5 mb-5">Date Limite :{{ $d->date_limite }}</p>
                    <a href="{{ URL::to('/user/cours/devoir/'. $d->id) }}" class=" h6 d-block text-success text-end">Voir tout</a>
                  </div>
                </div>
             
          @endforeach  
          </div>
          <div class="rest">    
          <div class="col">
           
      
            @foreach($post as $data)
            <ul>
           
              <li class="my-3 bg-white px-3 py-4 rounded shadow">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center mb-3">
                    <boutton class="d-inline-flex h3">
                  <svg width="30" height="30" style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                      <path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>
                     
                  {{ $data->professeur->prenom }} {{ $data->professeur->name_p?? null  }}</boutton>
               
                  </div>
                </div>
                <div class="border pb-3">
               
               <div style="margin:30px;">
               <p > {{ $data->body }}</p>
               </div>
               @if($data->file_path)
               <div  style="margin:30px;">
                     Fichier joignable :
                 
               <a href="{{ url('storage/fichiers/'.$data->file_path) }}" download> Cliquer pour télécharger </a>
               </div>
               @endif
               </div>
                <div style="margin-left:40px; margin-top:30px;" class="fw-bold text-decoration-underline mb-4">
                  Commentaires
                </div>
            @if($data->comments)
              
               
                @foreach($data->comments as $comment)
                <ul style="margin-left:20px;" class="mt-2 border-bottom">
                  <li>
                    <div
                      class="
                        d-flex
                        align-items-center
                        justify-content-between
                        mb-3
                      "
                    >
                      
                     
                       
                          @if($comment->user)
                          <div class="d-flex align-items-center">
                          <svg  width="20" height="20" style="margin-right: 10px; margin-bottom:10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <div>
                          <h3 class="fs-6">{{ $comment->user->nom_etudiant }} {{ $comment->user->prenom_etudiant }}</h3>
                          @else
                          <div class="d-flex align-items-center">
                          <svg width="30" height="30" style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                          <path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>
                    
                          <div>
                          <h3 class="fs-6">{{ $comment->professeur->name_p?? null }} {{ $comment->professeur->prenom }}</h3>
                          @endif
                          <time class="text-black-50">{{ $comment->created_at }}</time>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                    <p>{{ $comment->body }}</p>
                    </div>
                  </li>
                  </ul>
                  @endforeach 
              
             @endif   
                <form action="/CreateComment/{{ $data->id }}" class="d-flex align-items-center mt-4" method="post">
                  @csrf
                  <svg  width="20" height="20" style="margin-right: 10px; margin-bottom:10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        
                
                  <input
                    class="flex-grow-1 border me-2 p-2" name="body"
                    placeholder="Ecrire un commentaire..."
                    required/>
                  <button type="submit" class="btn btn-primary">Commenter</button>
                </form>
              </li>
              <hr>
            </ul>
            @endforeach
          </div>
          </div> 
        </div>
   
      </section>
    </main>
  </body>
</html>
