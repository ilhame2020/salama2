<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer un devoir</title>
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
<style>
    .form-dev{
        margin: 40px;

    }
    .ml-dev{
        margin-top: 10px;
        margin-left:35%;

    }
    .ml-dev-1{
        margin-top: 10px;
        margin-left:20%;

    }
    .fs-t{
        font-size:100%;
    }
    /* .wd{
        width:80%;
    } */
    .wd-1{
        width:30%;
        padding: auto;
    }
 
    }
    .mt-1{
        margin-top:20%;

    }

</style>
<body>
    @include('layouts.navigation')
    <main class="container">
    
      <section class="container  mt-5">
          <div class="row">
          @if(Route::is('prof.cours.devoir'))

          <div class="col col-lg-3 d-none d-lg-block">

          <a href="{{ URL::to('/professeur/devoir/'.$id_cours) }}">
                <button type="button"  style="background-color:#06DFCA;" class="mt-1 btn btn-lg  text-white col-lg-12 mb-4 ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>Créer un devoir </button>  
                  </a>
          @foreach ($dev as $d)

            <a href="{{route('prof.cours.devoir.suivie',$d->id)}}">
            <button type="button"  class="btn btn-warning btn-lg  text-white col-lg-12 mb-4 ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-plus " viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>{{ $d->titre }}</button>
              </a>
            
              @endforeach                
            
            </div>
            <div class="col col-lg-9">
            <h2 class="ml-dev" >Créer un devoir :</h2>
                <fieldset class="form-dev ml-dev-1 ">
                <div class="col-lg-12">
                    @if(Session::has('success'))
                                <div class="alert alert-success col-lg-12">
                                {{Session::get('success')}}
                            </div>
                            @endif
                </div>
            
            
            <form action="{{ route('prof.cours.devoir.create',$id_cours)}}" method="post" enctype="multipart/form-data">
            @csrf

                
                    <div class="mt-1">
                        <x-label class="fs-t" for="titre" :value="__('Titre:')" />

                        <x-input id="titre" class="wd  block mt-1 w-full" type="text" name="titre"  required autofocus />
                    </div>
                
                    <div class="mt-1">
                        <x-label class="fs-t" for="email" :value="__('Contenu :')" />
                        <textarea  class=" wd block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="contenu" id="" cols="5" rows="5" required autofocus></textarea>
                    </div>
                    <div class="mt-1">
                        <x-label class="fs-t" for="file" :value="__('Fichier:')" />
                    
                        <input class=" wd block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="file" name="file" id="">

                    </div>
                    <div class="mt-1">
                        <x-label class="fs-t" for="file" :value="__('Date Limite:')" />
                    
                        <input  type='date'  class=" wd block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="date_limite" id="">

                    </div>
                    

                    <button style="margin-left:30%;" class="btn btn-warning btn-lg mt-1 text-white mb-4">
                            {{ __('Créer') }}
                        </button>
                    @endif

            </form>
            <script>
                var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1;
                    var yyyy = today.getFullYear();

                    if (dd < 10) {
                    dd = '0' + dd;
                    }

                    if (mm < 10) {
                    mm = '0' + mm;
                    } 
                        
                    today = yyyy + '-' + mm + '-' + dd;
                    document.getElementById("datefield").setAttribute("min", today);
            </script>
            @if(Route::is('prof.cours.devoir.voir'))
            <div class="col col-lg-9">
            
                <fieldset class="form-dev ml-dev-1 ">
                <div class="col-lg-12">
                    @if(Session::has('success'))
                                <div class="alert alert-success col-lg-12">
                                {{Session::get('success')}}
                            </div>
                            @endif
                </div>
           
            <form action="{{ route('prof.cours.devoir.create',$id_cours)}}" method="post">
            @csrf
            @foreach ($dev as $dev)

                
                    <div class="mt-1">
                        <x-label class="fs-t" for="titre" :value="__('Titre:')" />

                        <x-input id="titre" class="wd  block mt-1 w-full" type="text" name="titre"  value="{{$dev->titre}}" required autofocus readonly />
                    </div>
                
                    <div class="mt-1">
                        <x-label class="fs-t" for="email" :value="__('Contenu :')" />
                        <textarea  class=" wd block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="contenu" id="" cols="5" rows="5" readonly>{{$dev->contenu}}</textarea>
                    </div>
                    @if ($dev->file_path)
                  
                    <div class="mt-1">
                        <x-label class="fs-t" for="file" :value="__('Fichier:')" />

                        <iframe src="{{url('storage/fichiers/'.$dev->file_path)}}" frameborder="5"></iframe>
                        <a href="{{ url('storage/fichiers/'.$dev->file_path) }}" download> Cliquer pour télécharger </a>


                    </div>
                          
                    @endif
                    <div class="mt-1">
                        <x-label class="fs-t" for="file" :value="__('Date Limite:')" />
                    
                        <input class=" wd block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="date_limite" id="" value="{{$dev->date_limite}}" required autofocus readonly>

                    </div>
                    </form>
                    <a href="{{ route('prof.cours.devoir.suivie',$idd)}}"><button style="margin: auto;
             width: 20%;" class="btn btn-success btn-lg mt-1 text-white mb-4">
                            {{ __('RETOUR') }}
                        </button></a> 
                                    
            @endforeach 
            @endif
         
                      
            @if(Route::is('prof.cours.devoir.mod'))
            <div class="col col-lg-9">
            
                <fieldset class="form-dev ml-dev-1 ">
                <div class="col-lg-12">
                    @if(Session::has('success'))
                                <div class="alert alert-success col-lg-12">
                                {{Session::get('success')}}
                            </div>
                            @endif
                </div>
                <a href="{{ route('prof.cours.devoir.suivie',$idd)}}"><button style="color:gray;" class="btn mt-1  mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m2 11l7-9v5c11.953 0 13.332 9.678 13 15c-.502-2.685-.735-7-13-7v5l-7-9Z"/></svg>
                        </button></a> 
            <form action="{{ route('prof.cours.devoir.modifier',$idd)}}" method="post" enctype="multipart/form-data">
            @csrf
            @foreach ($dev as $dev)

                
                    <div class="mt-1">
                        <x-label class="fs-t" for="titre" :value="__('Titre:')" />

                        <x-input id="titre" class="wd  block mt-1 w-full" type="text" name="titre"  value="{{$dev->titre}}" required autofocus />
                    </div>
                
                    <div class="mt-1">
                        <x-label class="fs-t" for="email" :value="__('Contenu :')" />
                        <textarea  class=" wd block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="contenu" id="" cols="5" rows="5" >{{$dev->contenu}}</textarea>
                    </div>
                    @if ($dev->file_path)
                    <div class="mt-1">
                        <x-label class="fs-t" for="file" :value="__('Fichier:')" />
                        <iframe src="{{url('storage/fichiers/'.$dev->file_path)}}" frameborder="5"></iframe>
                        <input class=" wd block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="file" name="file" id="">

                    </div>
                    @endif
                    <div class="mt-1">
                        <x-label class="fs-t" for="file" :value="__('Date Limite:')" />
                    
                        <input class=" wd block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="date_limite" id="" value="{{$dev->date_limite}}" required autofocus >

                    </div>
                    
                    <button style="margin-left:30%;" class="btn btn-warning btn-lg mt-1 text-white mb-4">
                            {{ __('Modifier') }}
                        </button>
                    </form>
                                    
            @endforeach
          
                  
                        @endif
            </fieldset>
            </div>
            </div>  
      </section>
    </main>  
</body>
</html>