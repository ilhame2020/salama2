<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/522a15aef9.js" crossorigin="anonymous"></script>

    <title>Cours</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
     
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/programming.css') }}">

    <link rel="icon" href="{{ asset('img/svgs/board.svg') }}" />

  
  

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/cours/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cours/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cours/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cours/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cours/components.css') }}" />
     

    <!-- Scripts -->
   


  </head>
  <body>

   
    @include('layouts.navigation')
    <main  class="container">
    
      @include('layouts.navcours')
  
      <section class="container mt-5">
        <div class="row">
        
           <div class="col col-lg-3 d-none d-lg-block">
            <a href="{{ URL::to('/quizes/create/'.$id) }}">
            <button type="button"  class="btn btn-warning btn-lg  text-white col-lg-12 mb-4 ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-plus " viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>Créer un Quiz</button>
              </a>
                <button type="button" style="background-color:#06DFCA;" class="btn  btn-lg  text-white col-lg-12 mb-4 ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                  </svg>Quizes à corriger </button>
                  <a href="{{ route('prof.cours.devoir',$id)}}">
                <button type="button"  class="btn btn-warning  btn-lg  text-white col-lg-12 mb-4 ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>Créer un devoir </button>  
                  </a>
                 
            
          </div>

          <div class="col col-lg-9">
            <!-- Click to show input area -->
            <button
              class="
                d-flex
                align-items-center
                shadow
                rounded
                px-3
                py-4
                bg-primary
                text-primary
                cursor-pointer
                w-100
                mb-4
              "
              data-bs-toggle="modal"
              data-bs-target="#modal-input"
            >
              <div class="avatar me-3">
             
              <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>
              </div>
              <span class="text-white">Créer un poste </span>
            </button>

            <div
              class="modal fade"
              id="modal-input"
              tabindex="-1"
              style="display: none"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered">
            
                <div class="modal-content">
                  <div class="modal-header mb-3">
                    <div class="d-flex align-items-center">
                    <svg width="30" height="30" style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                      <path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>
                               <div class="text-success">Ecrire un poste à la classe</div>
                    </div>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <form action="/CreatePost/{{ $id }}" method="post" enctype="multipart/form-data"> 
                  @csrf
                  <div class="px-3 mb-3">
                    <div class="form-floating">
                      <textarea name="body"
                        class="form-control"
                        placeholder="Leave a comment here"
                        id="floatingTextarea2"
                        style="height: 100px"
                      ></textarea>
                     
                    </div>
                  </div>

                  <div class="modal-footer d-flex justify-content-between">
                    <div>
                      <label class="upload cursor-pointer" for="upload">
                     <img src="{{ URL::to('img/svgs/upload.svg')}}" alt="Upload">  
                    </label> 
                      <input id="upload" type="file" name="file"/>
                    </div>
                    <div class="d-flex">
                      <button
                        type="button"
                        class="btn btn-secondary py-2 me-2"
                        data-bs-dismiss="modal"
                      >
                        Cancel
                      </button>
                      <button class="btn btn-primary py-2"
                        data-bs-dismiss="modal" type="submit"> Poster
                        </button>
                 
                    </div>
           
                  </div>
                  </form> 
                </div>
               
              </div>
            </div>
            @foreach($post as $data)
            <ul>
           
              <li class="my-3 bg-white px-3 py-4 rounded shadow">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center mb-3">
                    <boutton class="d-inline-flex h3">
                  <svg width="30" height="30" style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                      <path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>
                     
                  {{ $data->professeur->prenom }} {{ $data->professeur->name_p  }}</boutton>
               
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
                <hr>
                <div style="margin-left:40px; margin-top:30px;" class="fw-bold text-decoration-underline mb-4">
                  Commentaires
                </div>
            @if($data->comments)
            <div style="margin-top:30px;">
               
                @foreach($data->comments as $comment)
                <ul style="margin-left:20px;" class="mt-2  border-bottom">
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
                          <h3 class="fs-6">{{ $comment->professeur->name_p }} {{ $comment->professeur->prenom }}</h3>
                          @endif
                          <time class="text-black-50">{{ $comment->created_at }}</time>
                        </div>
                      </div>
                    </div>
                    <div  class="mb-3">
                    <p>{{ $comment->body }}</p>
                     </div>
                  </li>
                  </ul>
                  @endforeach 
                
              </div>
             @endif   
                <form action="/CreateComment/{{ $data->id }}" class="d-flex align-items-center mt-4" method="post">
                  @csrf
                  <svg width="30" height="30" style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                      <path d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z"/></svg>
                    
                  <input
                    class="flex-grow-1 border me-2 p-2" name="body"
                    placeholder="Ecrire votre commentaire..." 
                  required/>
                  <button type="submit" class="btn btn-primary">Commenter</button>
                </form>
              </li>
            </ul>
            @endforeach
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
