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
      @include('layouts.navcours')
      <section class="container mt-5">
        <div class="row">
        @foreach ($td as $td)

        @foreach($td->sections as $t)
         
            <div class="">
                <h2> {{ $t->nom_section}}</h2>
            <table class="table table-bordered">
       
    <thead>
      <tr>
        <th>CNE :</th>
        <th>Prénom : </th>
        <th>Nom :</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $t->etudiants as $st )
            

      <tr>
        <td>{{ $st->cne }}</td>
        <td>{{ $st->prenom_etudiant }}</td>
        <td>{{ $st->nom_etudiant }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
            
            </div> 
            @endforeach     
                        
        @endforeach    
        </div>
        </section>  
    </main>
    
</body>
</html>