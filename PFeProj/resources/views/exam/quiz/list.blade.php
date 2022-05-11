<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tous mes quizs</title>
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/programming.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <link rel="stylesheet" href="{{ asset('css/cours/listquiz.css') }}" />
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/cours/bootstrap.min.js') }}" defer></script>
    
    <script src="{{ asset('js/cours/jquery-3.6.0.js') }}" defer></script>
                       
  

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
          @include('components.sidebar')              </div>

              <script src="{{ asset('js/cours/jquery-3.6.0.js') }}" defer></script>
              <script>
                $("h2").hover(function(){
                  $("this").animate({
                    left:'50px',
                    height:'+50px',
                  });
                });
              </script>
            
            
        </div>
          <div class="col col-lg-9 " name="question[0]" id="question[0]">
            
            <div class="row">
                <div class="navbar navbar-dark bg-black flex-md-nowrap p-0 shadow rounded " style=" margin-top: 25px; margin-bottom: 25px;">
                    <input autocomplete class="form-control form-control-dark w-100 text-dark" id="searchbar" onkeyup="search_element()" type="text" placeholder="Chercher un Quiz par nom , une Question par nom ..." aria-label="search">
                    <div class="navbar-nav">
                      <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="#">Chercher</a>
                      </div>
                    </div>
                  </div>
                  @if(Session::has('success'))
    <div class="alert alert-success col-lg-12">
      <p> 
      {{Session::get('success')}}
     </p>
  </div>
@endif
              <div class="card  p-2 p-md-3 border   mb-3 rounded-3 bg-light text-black font-weight-bold col-lg-12" >
                    
                    <h3 class="text-warning text-center mt-2 mb-3 border-warning border-bottom " >
                      
                      Liste des Quizes</h3>
                    
<nav class="small" id="toc">
                      @foreach ($quizesqr as $quiz)
                      <ul class="list-unstyled border-bottom border-dark mb-2 mt-2 p-3 element">
                          <li class="my-2">
                            <div class="row">
                              <div class="col-lg-10">
                               <button class="d-inline-flex h4 text-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-text-fill mr-2" viewBox="0 0 16 16">
                                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                                </svg> Titre Quiz : " {{$quiz->quiz_name}} " 
                              </button>
                                </div>  
                              <div class="col-lg-2">
                                <button style="display: inline;" class="btn btn-outline-dark collapsed "  data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse{{$quiz->id}}" aria-controls="contents-collapse{{$quiz->id}}">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                  </svg>
                                </button>
                                <form action="{{route('quiz.SuppQuiz',$quiz->id)}}" method="POST" class="" style="display: inline;" >
                                  @method('DELETE')
                                  @csrf
                                  <button style="display: inline;" type="submit" class="btn btn-sm btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" bi bi-trash" viewBox="0 0 16 16">
                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                  </button>
                                </form>
                                <button>
                                  <a href="{{route('quiz.Download',$quiz->id)}}"  class="btn btn-outline-success collapsed "  >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                      <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg> 
                                  </a>
                                </button>
                              </div>
                            <div class="col-lg-12  text-danger ml-3 mt-2 mb-2 ">
                              <span class="text-secondary"> -Crée le : {{$quiz->created_at}}</span>
                              <br>
                           -Description : {{$quiz->description}}
                            <br> -Date prévu de passage : {{$quiz->date_de_passage}} <br>
                            -Totale points : @if($quiz->points) {{$quiz->points}} @else Aucune question ajoutée @endif
                            </div>
                          </div>
 <ul class="  list-unstyled collapse mt-3 ps-3 p3 border border-light card rounded " style="list-style-type: upper-alpha;" id="contents-collapse{{$quiz->id}}">
                              @foreach($quiz->qrs as $qr) 
                                      <div class="row">
                                        <div class="row col-lg-12 border-bottom border-light">
                                          <div class="col-lg-9 p-2">
                                            <li class="d-inline-flex mt-2 p-2 ml-3 h5 text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-pencil mt-2 mr-3 ml-3" viewBox="0 0 16 16">
                                              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                            </svg><span class="ml-3">{{$qr->enonce}}  </span>
                                            </div>
                                            <div class="col-lg-2">
                                              <small class=" text-primary mt-3"> ({{$qr->nbr_point}} points)</small> <br>
                                            </div>
                                              <div class="col-lg-1 mt-2">
                                                <form action="{{route('qr.SuppQr',$qr->id)}}" method="POST" class="" style="display: inline;" >
                                                  @method('DELETE')
                                                  @csrf
                                                  <button style="display: inline;" type="submit" class="btn btn-sm btn-outline-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                  </button>
                                                </form>
                                                </div>
                                                @if($qr->file)
                    
                    <div class="col-lg-1"></div>
                      <div class="col-lg-9 ">
                          <embed src="{{Storage::url($qr->file)}}" width=650 height=250 type='application/pdf'/>
                       </div>
                       
                    <div class="col-lg-2"></div>
                    @endif
                                        </li>
                                        </div>
                                        <div class="col-lg-5">
                                        </div>
                                      </div>
                                    <br>
                                  @endforeach
 </ul>
 <ul class="  list-unstyled collapse mt-3 ps-3 p3 border border-light card rounded " style="list-style-type: upper-alpha;" id="contents-collapse{{$quiz->id}}">
  @foreach($quiz->qcms as $qcm) 
          <div class="row">
            <div class="row col-lg-12 border-bottom border-light">
              <div class="col-lg-9 p-2">
                <li class="d-inline-flex mt-2 p-2 ml-3 h5 text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-pencil mt-2 mr-3 ml-3" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg><span class="ml-3">{{$qcm->enonce}}  </span>
                </div>
                <div class="col-lg-2">
                  <small class=" text-primary mt-3"> ({{$qcm->nbr_point}} points)</small> <br>
                </div>
                  <div class="col-lg-1 mt-2">
                    <form action="{{route('qcm.SuppQcm',$qcm->id)}}" method="POST" class="" style="display: inline;" >
                      @method('DELETE')
                      @csrf
                      <button style="display: inline;" type="submit" class="btn btn-sm btn-outline-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                      </button>
                    </form>
                    </div>
                    @if($qcm->file)
                    
                    <div class="col-lg-1"></div>
                      <div class="col-lg-9 ">
                          <embed src="{{Storage::url($qcm->file)}}" width=650 height=250 type='application/pdf'/>
                       </div>
                       
                    <div class="col-lg-2"></div>
                    @endif
                    <div class="col-lg-2"></div>
                <ol style="list-style-type: decimal;" class="col-lg-5 mt-3 ml-3">
                  @foreach ($qcm->choixs as $ch)
                  @if($ch->option1)
                  <li>{{$ch->option1}}</li>
                  @endif
                  @if($ch->option2)
                  <li>{{$ch->option2}}</li>
                  @endif
                  @if($ch->option3)
                  <li>{{$ch->option3}}</li>
                  @endif
                  @if($ch->option4)
                  <li>{{$ch->option4}}</li>
                  @endif
                  
               <p class="text-success mt-3"> *La bonne réponse : {{$ch->reponse}}</p>
               @endforeach
              </ol>
            </li>
            </div>
            <div class="col-lg-5">
            </div>
          </div>
        <br>
      @endforeach
</ul>
                            
                          </li>
</ul>              
 @endforeach
</nav>
                        </div>
                                                </div>
                           </div> 
                   </div>
       </section>
    </main>
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
  </body>
</html>