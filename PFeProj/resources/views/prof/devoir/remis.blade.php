<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remis</title>
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
        <link rel="stylesheet" href="{{ asset('css/presentative/slick.css')}}"/>

        <link href="{{ asset('css/presentative/tooplate-little-fashion.css')}}" rel="stylesheet">


    <script src="{{ asset('js/cours/bootstrap.min.js') }}" defer></script>

</head>
<body>
    @include('layouts.navigation')
    <a href="{{ route('prof.cours.devoir.suivie',$idd)}}"><button style="color:gray;" class="btn mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m2 11l7-9v5c11.953 0 13.332 9.678 13 15c-.502-2.685-.735-7-13-7v5l-7-9Z"/></svg>
                        </button></a> 
    <main  class="container p-2">
     

      <ul >
           
              <li style="margin:auto; width:50%;" class="mb-4 my-4 bg-white px-3 py-4 rounded shadow">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center mb-3">
                    <boutton class="d-inline-flex h3">
                  <svg width="30" height="30" style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                      <path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>
                     
                 {{ $e->nom_etudiant}}   {{ $e->prenom_etudiant}} </boutton> 
               
                  </div>
                  @if ($dat->etat==1)
                  <span class="h5 text-success">remis</span>
                  @elseif ($dat->etat==2)
                  
                  <span class="h5 text-warning mr-2">remis en retard</span>

                  @endif
                  
                </div>
                <div class="border pb-3">
               
                            <div style="margin:30px;">
                        
                            </div>
               
                        <div  style="margin-left:30%;">

                        
                        <a href="{{ url('storage/fichiers/'.$dat->file_path) }}" download><img src="{{ URL::to('filedone.png') }}"  width="200px" alt=""></a>
                        </div>
             

                </div>
                <hr>
                <span > date de remise :{{ $dat->created_at}}</span>
                  </li>
        </ul>
    </main>
</body>
</html>