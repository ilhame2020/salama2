<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Passer un quiz</title>
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
    <script>
      document.addEventListener("visibilitychange", function()
      {
        
        var form=document.exam;
        if (document.visibilityState === 'hidden')
        {
          alert("Vous avez quitt?? le quiz !"); form.submit();
        }
        
      });
      </script> 
     
    <main  class="container">
     
      <section class="container mt-5">
        
        <div class="row">
          
          <div class="col-lg-2 background-white border-bottom border-light mt-3 ">
            <div class="row sticky-top "  style="position: fixed;margin-top:5px;">
            <div class="icon-bar col-lg-3 border border-light rounded bg-warning " >
              <p class="text-white mt-3 ">
                <span class="text-dark" style="text-decoration: underline">*Indications importantes :</span> 
                Attention de quitter votre quiz , vous n'aurez plus le droit de y acc??der ! </p>  <p class="btn  btn-enabled  bg-danger text-white" >Dur??e de l'examen : <span class="js-timeout"></span>  </p>
          </div>
            </div>
            </div>
          <div class=" col-lg-8 " >
            
            <div class="row">
             
              <div class="card  p-2 p-md-3 border   mb-3 rounded-3 bg-light text-black font-weight-bold col-lg-12" >
                      
<form action="{{route('passer.StoreReponse')}}" method="post" name="exam" oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;" enctype="multipart/form-data">
    @csrf
    <nav class="small" id="toc">
        @foreach ($quizesqr as $quiz)
        <ul class="list-unstyled  mb-2 mt-2 p-3 element">
            <li class="my-2">
              <div class="row">
                <div class="col-lg-10">
                 <button class="d-inline-flex h4 text-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-text-fill mr-2" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                  </svg>  " {{$quiz->quiz_name}} " 
                </button>
                  </div>  
                  <div class="col-lg-2">
                      <p>
                          Dur??e:    &nbsp; <span class="js-timeout " >1:00</span>
                      </p>
                      
                      
                  </div>
                  
                 
                 
                
              <div class="col-lg-12  text-danger ml-3 mt-2 mb-2 ">
                
                <br>
             -Description : {{$quiz->description}}
              <br> 
              -Totale points : @if($quiz->points) {{$quiz->points}} @else Aucune question ajout??e @endif
              </div>
            </div>
<ul class="  list-unstyled  mt-3 ps-3 p3 border border-light card rounded " style="list-style-type: upper-alpha;" >
                @foreach($quiz->qrs as $qr) 
                        <div class="row">
                          <div class="row col-lg-12 border-bottom border-light">
                            <div class="col-lg-9 p-2">
                              <li class="d-inline-flex mt-2 p-2 ml-3 h5 text-dark"><span class="ml-3">{{$qr->enonce}}  </span>
                              </div>
                              <div class="col-lg-2">
                                <small class=" text-primary mt-3"> ({{$qr->nbr_point}} points)</small> <br>
                              </div>
                                <div class="col-lg-1 mt-2">
                                  
                                  </div>
                                  @if($qr->file)
      
      <div class="col-lg-1"></div>
        <div class="col-lg-9 ">
            <embed src="{{Storage::url($qr->file)}}" width=650 height=250 type='application/pdf'/>
         </div>
         
      <div class="col-lg-2"></div>
      @endif
      <div class="col-lg-12">
          <textarea name="reponse[{{$qr->id}}]" id="" cols="90" rows="10"></textarea>
      </div>
                          </li>
                          </div>
                          <div class="col-lg-5">
                          </div>
                        </div>
                      <br>
                    @endforeach
</ul>
<ul class="  list-unstyled  mt-3 ps-3 p3 border border-light card rounded " style="list-style-type: upper-alpha;" >
@foreach($quiz->qcms as $key=>$qcm)

<input type="hidden" name="questions_id{{$key+1}}" value="{{$qcm->id}}"> 

<input type="hidden" name="ans{{$key+1}}" value="0">
<div class="row">
<div class="row col-lg-12 border-bottom border-light">
<div class="col-lg-9 p-2">
  <li class="d-inline-flex mt-2 p-2 ml-3 h5 text-dark"><span class="ml-3">{{$qcm->enonce}}  </span>
  </div>
  <div class="col-lg-2">
    <small class=" text-primary mt-3"> ({{$qcm->nbr_point}} points)</small> <br>
  </div>
    <div class="col-lg-1 mt-2">
      
      </div>
      @if($qcm->file)
      
      <div class="col-lg-1"></div>
        <div class="col-lg-9 ">
            <embed src="{{Storage::url($qcm->file)}}" width=650 height=250 type='application/pdf'/>
         </div>
         
      <div class="col-lg-2"></div>
      @endif
      <div class="col-lg-2"></div>
  <ol " class="col-lg-5 mt-3 ml-3">
    @foreach ($qcm->choix as $ch)
    
    <div>
    @if($ch->option1)
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ans{{$key+1}}" value="{{$ch->option1}}"   >
        <label class="form-check-label" for="flexRadioDefault2">
            {{$ch->option1}} 
        </label>
      </div>
    @endif
    @if($ch->option2)
    <div class="form-check">
        <input class="form-check-input" type="radio"   name="ans{{$key+1}}" value="{{$ch->option2}}" >
        <label class="form-check-label" for="flexRadioDefault2" >
            {{$ch->option2}} 
        </label>
      </div>
    @endif
    @if($ch->option3)
    <div class="form-check">
        <input class="form-check-input" type="radio" name="option3[{{$ch->id_qcm}}]"  >
        <label class="form-check-label" for="flexRadioDefault2">
            {{$ch->option3}} 
        </label>
      </div>
    @endif
    @if($ch->option4)
    <div class="form-check">
        <input class="form-check-input" type="radio"name="option4[{{$ch->id_qcm}}]" >
        <label class="form-check-label" for="flexRadioDefault2">
            {{$ch->option4}} 
        </label>
      </div>
    @endif
    </div>
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

<button value="" class=" btn btn-primary" type="submit"  name="send">Termin?? !</button>
</form>
                        </div>
                                                </div>
                           </div> 
                   </div>
       </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script type="text/javascript">
        var interval;
        var form=document.exam;
        function countdown() {
          clearInterval(interval);
          interval = setInterval( function() {
              var timer = $('.js-timeout').html();
              timer = timer.split(':');
              var minutes = timer[0];
              var seconds = timer[1];
              seconds -= 1;
              if (minutes < 0) return;
              else if (seconds < 0 && minutes != 0) {
                  minutes -= 1;
                  seconds = 59;
              }
              else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;
              $('.js-timeout').html(minutes + ':' + seconds);
              if (minutes == 0 && seconds == 0) { clearInterval(interval);  form.submit(); alert("Quiz termin?? !");}
          }, 1000);
        }
        $('.js-timeout').text("01:00");
        countdown();
        document.addEventListener("visibilitychange", function()
{
  if (document.visibilityState === 'hidden')
  {
    window.close();
  }
});
    </script>
    <script>
      
    </script>
  </body>

</html>
