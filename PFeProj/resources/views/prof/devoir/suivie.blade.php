<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des étudiants</title>
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
        <link rel="stylesheet" href="{{ asset('css/presentative/slick.css')}}"/>

        <link href="{{ asset('css/presentative/tooplate-little-fashion.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/cours/bootstrap.min.js') }}" defer></script>


</head>
<body>
@include('layouts.navigation')
    <main  class="container">
      <!-- Banner -->
   
      <section class="container mt-5">
        <div class="row">
        <div class="col col-lg-3 d-none d-lg-block">
           
            
            <a href="{{ URL::to('/professeur/devoir/'.$id_cours) }}">
           
                <button type="button"  style="background-color:#06DFCA;" class="mt-1 btn btn-lg  text-white col-lg-12 mb-4 ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>Créer un devoir </button>  
                  </a>
          @foreach ($dev as $a)

            <a href="{{route('prof.cours.devoir.suivie',$a->id)}}">
            <button type="button"  class="btn btn-warning btn-lg  text-white col-lg-12 mb-4 ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-plus " viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>{{ $a->titre }}</button>
              </a>
            
              @endforeach         
            
            </div>
           
            <div class="col col-lg-9">
            <div class="flex mb-4">
            <a href="{{ route('prof.cours.devoir.voir',$id)}}">
                <button class="btn btn-success text-white mr-2">voir </button> </a>
             
              <a href="{{ route('prof.cours.devoir.mod',$id)}}">
                <button class="btn  text-white btn-warning mr-2">modifier </button> </a>
                <form action="{{ route('prof.cours.devoir.supprimer',$id)}}" method="post">
                @csrf
                  
                <button  class="btn btn-danger">  supprimer</button> 
              </form>
          

              <table class="ml-4 table table-bordered">
                <td class="text-success">{{$rem}} remis</td>
                <td class="text-warning">{{$nret}} en retard</td>
                <td class="text-danger">{{$nrem}} non remis</td>
              </table>
            </div>
            @if(Session::has('success'))
                                <div class="alert alert-success col-lg-12">
                                {{Session::get('success')}}
                            </div>
                            @endif
        

              @foreach ($cour as $c)
                
           
              @foreach ($c->sections as $e)
            <div class="">
                 
             
                  <h2>{{$e->nom_section}}</h2>

                  
                 
              <table class="table table-bordered">
                  
                <thead>
                  <tr>
                    <th>CNE :</th>
                    <th>Prénom : </th>
                    <th>Nom :</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($d->etudiants as $st )
                    @if ($e->id == $st->id_section)
               
                 
                  <tr>
                    
                    <td>{{ $st->cne }}</td>
                    <td>{{ $st->prenom_etudiant }}</td>
                    <td>{{ $st->nom_etudiant }}</td>
                    
                        @if ( $st->pivot->etat ==1)
                        <td class="text-success"> remis </td>
                        <td> <a href="{{ URL::to('/professeur/devoir/remis/'.$id.'/'.$st->id) }}"  class="btn btn-success"> consulter </a></td>
                
                        @elseif ($st->pivot->etat ==2)
                        <td class="text-warning">en retard </td>
                        <td> <a href="{{ URL::to('/professeur/devoir/remis/'.$id.'/'.$st->id) }}"  class="btn btn-success"> consulter </a></td>
                
                        @else
                        <td class="text-danger">non remis </td>

                        @endif
                      
                   
                  </tr>
                           
                    @endif
                    @endforeach
             
         
                </tbody>
               
              
              </table>
           
            </div> 
            @endforeach
      
            @endforeach 
            </div> 
        </div>
        </section>  
    </main>
    
</body>
</html>