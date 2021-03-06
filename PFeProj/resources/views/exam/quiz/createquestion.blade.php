<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Quiz</title>
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
      .inputfile {
	 largeur : 0.1px ;
	hauteur : 0.1px ;
	opacit?? : 0 ;
	d??bordement : masqu?? ;
	position : absolue ;
	indice z : - 1 ;
}
.inputfile + ??tiquette {
     font-size : 1.25em ;
    font-weight : 700 ;
    couleur : blanc;
    couleur de fond : noir;
    affichage : bloc en ligne ;
}

.inputfile :focus + label ,
 .inputfile + label :hover {
     background-color : red;
}
.inputfile + label {
	 curseur : pointeur; /* curseur "main" */ 
}
.inputfile :focus + label {
	 contour : 1px pointill?? #000 ;
	contour : -webkit-focus-ring-color auto 5px ;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cheatsheet.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/cours/bootstrap.min.js') }}" defer></script>
    
    <script>
     
      function asd(a)
{
  
    if(a==1 ){
    document.getElementById("asd1").style.display="block";
    
    document.getElementById("asd2").style.display="none";}
   
    else {
    document.getElementById("asd2").style.display="block";
    
    document.getElementById("asd1").style.display="none";
    }
}

      
      function check_npoint(){
          var nbrp=document.frmq.nbrp.value;
          if (isNaN(nbrp)){
              document.getElementById("msgp").innerHTML='<p class="alert alert-danger col-md-8 mb-3 " role="alert">Entrez uniquement une valeur num??rique !</p>';
              return false;
          }else{
              return true;
          }
      }
      function check_npointqcm(){
          var nbrpqcm=document.frmqcm.nbrpqcm.value;
          if (isNaN(nbrpqcm)){
              document.getElementById("msgqcm").innerHTML='<p class="alert alert-danger col-md-8 mb-3 " role="alert">Entrez uniquement une valeur num??rique !</p>';
              return false;
          }else{
              return true;
          }
      }
      
      function create_champ(i) {
var i2 = i + 1;  


 document.getElementById('leschamps_'+i).innerHTML = '<div class="form-check  ml-4" name="champ[]">  <input class="form-check-input" type="checkbox" id="gridCheck" name="choix['+i+']" value="'+i+'"> <input name="champ['+i+']" type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"  placeholder="Choix'+(i+1)+'" > </div>';

document.getElementById('leschamps_'+i).innerHTML += (i <= 10) ? '<br /><span id="leschamps_'+i2+'"><a href="javascript:create_champ('+i2+')"><input class=" col col-md-12  btn   btn-outline-danger  "   type="add" value=" + "  name="add" ></a></span>' : '';
}
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

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
      <section
        class="
          d-flex
          flex-column
          gap-2
       
          banner
          text-white
          bg-secondary
          px-3
          py-4
          rounded
        "
      >
        <h1 class="banner__class">Devlopement web</h1>
        <div class="fs-4">
          <span>Professeur: </span
          ><span class="banner__teacher">Hafid Alaoui</span>
        </div>
        <div class="fs-4">
          <span>Module: </span
          ><span class="banner__subject">HTML, CSS, JavaScript</span>
        </div>
        <div class="fs-4">
          <span>Classe: </span><span class="banner__room">1234</span>
        </div>
      </section>
       
      
      <!-- Content -->
      <section class="container mt-5">
        <div class="row">
          <div class="col col-lg-3 d-none d-lg-block">
          @include('components.sidebar') 
            
            
        </div>
          <div class="col col-lg-9 "  >
            
            <div class="row">

              <div class="card  p-2 p-md-3 border   rounded-3 bg-light text-black font-weight-bold col-lg-12" >
                <div class="row card-header bg-light">
                  <ul class="nav nav-tabs card-header-tabs col-lg-9">
                    <li class="nav-item">
                      <button name="qr" class="nav-link text-black form-check-label"   >
                        <input class="form-check-input"  type="radio" name="type" value="qr" id="typequestion" onclick="asd(1)" checked>
 
                     <strong>Question de r??daction (QR) </strong></button>
                    </li>
                    <li class="nav-item " >
                     
                      <button name="qcm" class="nav-link text-black form-check-label  " for="flexRadioDefault2"  >
                        <input class="form-check-input" type="radio" name="type" value="qcm" id="typequestion" onclick="asd(2)" >
 
                        <strong>Question choix multiple (QCM) </strong></button>
                    </li>
                    <li class="nav-item text-end  d-inline-flex col-md-4 col-lg-3" >
                      
                      
                    </li>
                  </ul>
                  <div class="col-lg-1"></div>
                 
                </div>
                <div class="card-body">
                  <p class="card-text">
                    <div class=" col-lg-12">
                      <div class="row">
                      <div  class="col col-lg-12" >
                        <form method="post" class="p-4 p-md-5 border border-danger  rounded-3  text-black font-weight-bold bg-light" name="frmq" id="asd1"  >
                           @csrf 
                         <div class="row">
                          <div class=" col-lg-10 ">
                            <button class="text-danger  d-inline-flex h3 col-md-9">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil mt-2" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                              </svg> Cr??er une nouvelle Question de r??daction :</button>
                            <div class="form-row mt-6">
                              <div class="row">
                                
                              <div class="col-md-10 mb-3">
                                  <label for="validationServer01" class="ml-3 mb-2 col-lg-8 col-md-4"><span class="text-danger"> *</span>Enonc?? de la question : </label>
                                <textarea  autofocus rows="7" cols="15" class="form-control " id="enonce" name="enonce" placeholder="QuizName"  required>
                                </textarea>
                              </div>
                              
                            </div>
                            <div  class="col-md-10 mb-3 mt-3">
                            
                            <label  class="mb-2 ml-3" for = "file" ><span class="text-danger">*</span>Joindre un fichier ?? la question :</label ></br> 
                            <input type= "file" name= "file" id= "file"  class = "inputfile text-danger col-md-12" /> 
                            
                            </div>
                              <div class="col-md-10 mb-3 mt-2">
                                <div class="ml-3 mb-2">
                                  <span class="text-danger"> *</span>Nombre de points pour cette question :
                                </div>
                                <input  name="nbr_point"
                                type="number" value="1" step="0.25" min="-1" max="100" class="form-control is-valid" id="validationServer02" placeholder="Points"  required>
                                
                                <div class="valid-feedback">
                                  D??placer les fl??ches de votre clavier pour augmenter et diminuer les points .
                              </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="row">
                                  <div class="col-lg-4"></div>
                                                      <button style="margin-left: 20px;" class="col  col-md-4   btn btn-lg btn-danger text-white mt-2"  type="submit" value="Cr??er la question" name="create" >
                                                       + Nouvelle question  </button>
                                                       <button style="margin-left: 15px;" class=" col col-md-3 btn btn-lg  btn-outline-warning mt-2 "  type="add" value="Nouvelle question " name="add" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-check2-circle mr-2" viewBox="0 0 16 16">
                                                          <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                                          <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                                        </svg>
                                                        Sauvegarder</button>
                                                      </div>
                                  </div>  
                            </div>
                          </div>
                            <div class="col-lg-1 col-md-4 " >
                              <label for="quiz[]" class="text-warning mb-2 mt-1" ><strong> S??l??ctionnez les quizs associ??s ?? la question :</strong></label>
                              <select multiple="multiple" name="quiz[]" class=" js-example-basic-multiple " >
                                @foreach ($quizes as $quiz)
                                <option value="{{$quiz->id}}">{{$quiz->quiz_name}}</option>
                                @endforeach
                                </select>
                          </div>
                         </div>
                          </form>
                      </div>
                      
                 
                    </div>
                    <div  class="col col-lg-12">
                      <form action="{{url('/questions') }}"  style="display: none" method="post" class="p-4 p-md-5 border border-danger  rounded-3  text-black font-weight-bold bg-light" name="frmqcm" id="asd2" onsubmit="return check_npointqcm()" >
                        @csrf
                        <div class="row">
                          <div class="col-lg-10">
                            <button class="text-danger  d-inline-flex h3 col-md-9">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-ui-checks-grid mt-2 " viewBox="0 0 16 16">
                                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                              </svg> Cr??er une nouvelle Question Choix Multiple :</button>
                          <div class="form-row mt-6">
                              <div class="col-md-10 mb-3">
                                <label  for="validationServer01" class="ml-3 mb-2"> <span class="text-danger"> *</span>Enonc?? de la question : </label>
                                <textarea  name="enonce" rows="6" cols="14" class="form-control " id="validationServer01" required="required">
                                </textarea>
                              </div>
                              
                            <div  class="col-md-10 mb-3 mt-3" 
                            ">
                            
                            <label  class="mb-2 ml-3" for = "file" ><span class="text-danger"> *</span> Joindre un fichier ?? la question :</label ></br> 
                            <input type= "file" name= "file" id= "file"  class = "inputfile text-danger col-md-12 mb-3" /> 
                            
                            </div>
                            <div class="col-md-10 mb-3">
                            <form class="form-inline text-danger " name="choix">
                              <label for="validationServer01" class="ml-3 mb-3"> <span class="text-danger"> *</span>Remplir les propositions de r??ponses , et <span class="text-danger"> Cochez le bon choix !</span> </label><br>
                                
                              <div  class="border border-black mb-2 mt-2  rounded p-3">
                                  <div class="form-check  ml-4 mb-3 "> 
                                  <input  class="form-check-input " name="choix[]" value="0" type="checkbox" id="gridCheck" >
                                 
                                  <input name="champ[]"  type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"  placeholder="Choix1" >
                                
                                </div>
                                  <span id="leschamps_1">
                                    <a href="javascript:create_champ(1)">
                                      <input value=" + " class=" col col-md-12  btn  btn-outline-danger  "  type="add"  name="add" >
                                     </a></span>
                                </div>
                            </form>
                          </div>
                          <div class="col-md-10 mb-3 mt-2">
                            <div class="ml-3 mb-2">
                              <span class="text-danger"> *</span>Nombre de points pour cette question :
                            </div>
                            <input  name="nbrp"
                            type="number" value="1" step="0.25" min="-1" max="100" class="form-control is-valid" id="validationServer02" placeholder="Points"  required>
                            
                            <div class="valid-feedback">
                              D??placer les fl??ches de votre clavier pour augmenter et diminuer les points .
                          </div>
                          </div>
                          
                         
                            <div class="row">
                              <div class="col-lg-3"></div>
                                                  <button class="col  col-md-4   btn btn-lg btn-danger text-white mt-2 "  type="submit" value="Cr??er la question" name="create" >
                                                   
                                                   + Nouvelle question  </button>
                                                    
                                                   <button style="margin-left: 15px;" class=" col col-md-3 btn btn-lg  btn-outline-warning mt-2 "  type="add" value="Nouvelle question " name="add" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-check2-circle mr-2" viewBox="0 0 16 16">
                                                      <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                                      <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                                    </svg>
                                                    Sauvegarder</button>
                                                  </div>
                              </div> 
                        </div>
                            <div class="col-lg-2 " >
                              <label for="quiz[]" class="text-warning mb-2 mt-1 col-lg-12" ><strong> S??l??ctionnez les quizs associ??s ?? la question :</strong></label>
                              <select multiple="multiple" name="quiz[]" class="js-example-basic-multiple" >
                                @foreach ($quizes as $quiz)
                                <option class="col-lg-12" value="{{$quiz->id}}">{{$quiz->quiz_name}}</option>
                                @endforeach
                                </select>
                          </div>
                        </div>
                        </form>
                    </div>
                    
                  </p>
                </div>
              </div>
          
        </div>
          
        </div>
       
      </section>
    </main>
    <script>
      $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
    
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="cheatsheet.js"></script>
  </body>
</html>
