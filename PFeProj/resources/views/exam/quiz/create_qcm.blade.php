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
	opacité : 0 ;
	débordement : masqué ;
	position : absolue ;
	indice z : - 1 ;
}
.inputfile + étiquette {
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
	 contour : 1px pointillé #000 ;
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
              document.getElementById("msgp").innerHTML='<p class="alert alert-danger col-md-8 mb-3 " role="alert">Entrez uniquement une valeur numérique !</p>';
              return false;
          }else{
              return true;
          }
      }
      function check_npointqcm(){
          var nbrpqcm=document.frmqcm.nbrpqcm.value;
          if (isNaN(nbrpqcm)){
              document.getElementById("msgqcm").innerHTML='<p class="alert alert-danger col-md-8 mb-3 " role="alert">Entrez uniquement une valeur numérique !</p>';
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
function controle(){
  var input[]=document.getElementByClass("input-choix");
  for(i=0;i<input.length;i++){
    
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
          @include('components.sidebar')            
        </div>
          <div class="col col-lg-9 "  >
           
            <div class="row">
<div class="col-lg-12">
  @if(Session::has('success'))
            <div class="alert alert-success col-lg-12">
              {{Session::get('success')}}
          </div>
        @endif
</div>
                    <div  class=" col-lg-12">
                      <form action="{{route('qcm.QcmForm') }}"  method="post" class="p-4 p-md-5 border border-danger  rounded-3  text-black font-weight-bold bg-light" name="frmqcm" onsubmit="return check_npointqcm()" enctype="multipart/form-data"   >
                        @csrf
                        <div class="row">
                          <div class="col-lg-10">
                            <button class="text-danger  d-inline-flex h3 col-md-10">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-ui-checks-grid mt-2 mr-1" viewBox="0 0 16 16">
                                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                              </svg> Créer une nouvelle Question Choix Multiple :</button>
                          <div class="form-row mt-6">
                              <div class="col-md-10 mb-3">
                                <label  for="validationServer01" class="ml-3 mb-2"> <span class="text-danger"> *</span>Enoncé de la question : </label>
                                <div class="row">
                                  <div class="col-lg-11">
                                    <textarea  name="enonceq" rows="6" cols="14" class="form-control " id="validationServer01" required="required">
                                    </textarea>
                                    
                                  </div>
                                  <div  class="col-lg-1 mb-3 mt-3">
                                
                               
                                  <label for ="file" class="text-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/>
                              </svg>(pdf ou image)</label>
                                  <input type= "file" name="file" id="file"  style="display:none" class = "inputfile text-danger col-md-12 mb-3" accept="image/*,.pdf" /> 
                                
                                </div>
                                </div>
                              </div>
                              
                            <div class="col-md-10 mb-3">
                              
                            <form class="form-inline text-danger " name="choix">
                              <label for="validationServer01" class="ml-3 mb-3"> <span class="text-danger"> *</span>Remplir les propositions de réponses , et <span class="text-danger"> Cochez le bon choix !</span> </label><br>
                               
                            <!--  <div  class="border border-black mb-2 mt-2  rounded p-3">
                                  <div class="form-check  ml-4 mb-3 "> 
                                  <input  class="form-check-input " name="choix[]" value="0" type="checkbox" id="gridCheck" >
                                 
                                  <input name="champ[]"  type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"  placeholder="Choix1" >
                                
                                </div>
                                  <span id="leschamps_1">
                                    <a href="javascript:create_champ(1)">
                                      <input value=" + " class=" col col-md-12  btn  btn-outline-danger  "  type="add"  name="add" >
                                     </a></span>
                            </div> -->
                            <label for="input1" class="col-md-10 ml-3 text-danger mb-3"> *Option 1</label>
                            <div class="input-group col-md-10">
                              <div class="input-group-text ">
                                <input class="form-check-input mt-0" type="radio" name="optionselect" value="option1" aria-label="Radio button for following text input">
                              </div>
                              <input type="text" class="form-control " name="option1" id="option1" aria-label="Text input with radio button">
                            </div>
                            <label for="input2" class="col-md-10 ml-3 text-danger mb-3  mt-1"> *Option 2</label>
                            <div class="input-group col-md-10">
                              <div class="input-group-text ">
                                <input class="form-check-input mt-0" type="radio" name="optionselect" value="option2" aria-label="Radio button for following text input">
                              </div>
                              <input type="text" class="form-control " name="option2" id="option2" aria-label="Text input with radio button">
                            </div>
                            <label for="input3" class="col-md-10 ml-3 text-danger mb-3  mt-1">*Option 3</label>
                            <div class="input-group col-md-10">
                              <div class="input-group-text ">
                                <input class="form-check-input mt-0" type="radio" name="optionselect" value="option3" aria-label="Radio button for following text input">
                              </div>
                              <input type="text" class="form-control " name="option3" id="option3" aria-label="Text input with radio button">
                            </div>
                            <label for="input4" class="col-md-10 ml-3 text-danger mb-3 mt-1">*Option 4</label>
                            <div class="input-group col-md-10">
                              <div class="input-group-text ">
                                <input class="form-check-input mt-0" type="radio" name="optionselect" value="option4" aria-label="Radio button for following text input">
                              </div>
                              <input type="text" class="form-control " name="option4" id="option4" aria-label="Text input with radio button">
                            </div>
  
                            
                           
                            </form>
                          </div>
                          <div class="col-md-10 mb-3 mt-2">
                            <div class="ml-3 mb-2">
                              <span class="text-danger"> *</span>Nombre de points pour cette question :
                            </div>
                            <input  name="nbrq"
                            type="number" value="1" step="0.25" min="-1" max="100" class="form-control is-valid" id="validationServer02" placeholder="Points"  required>
                            
                            <div class="valid-feedback">
                              Déplacer les flèches de votre clavier pour augmenter et diminuer les points .
                          </div>
                          </div>
                            <div class="row">
                              <div class="col-lg-6"></div>
                                                  <button class="col  col-md-4   btn btn-lg btn-danger text-white mt-2 "  type="submit" value="Créer la question" name="create" >
                                                   + Nouvelle question  </button>
                                                  </div>
                              </div> 
                        </div>
                         <div class="col-lg-2">
                          <select class="js-example-basic-single" name="quiz">
                            @foreach ($quizes as $quiz)
                                
                            <option value={{$quiz->id}}> {{$quiz->quiz_name}}</option>
                            @endforeach
                          </select>
                           </div>   
                        </div>
                        </form>
                
          
        </div>
          
        </div>
       
      </section>
    </main>
    <script>
      $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    </script>
    
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="cheatsheet.js"></script>
  </body>
</html>
