<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $tp->nameTp }}</title>
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
  <body>
    <!-- Header -->
    @include('layouts.navigation')

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
        <h1 class="banner__class">{{ $tp->nameTp }}</h1>
        <div class="fs-4">
          <span>Professeur: </span
          ><span class="banner__teacher">{{ $tp->Professeur }}</span>
        </div>
        <div class="fs-4">
          <span>Groupe: </span><span class="banner__room">{{ $tp->groupe }}</span>
        </div>
      </section>

      <!-- Content -->
      <section class="container mt-5">
        <div class="row">
        
           <div class="col col-lg-3 d-none d-lg-block">
            
            <div class="border pt-4 px-4 pb-5">
              <div class="mb-4">Calendrier</div>
              <p class="mb-5">Aucun travail à rendre !</p>
              <a href="#" class="d-block text-success text-end">Voir tout</a>
            </div>
          </div>

          <div class="col col-lg-9">
            <!-- Click to show input area -->
          
            <ul>
              <li class="bg-white px-3 py-4 rounded shadow">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center mb-3">
                    <img
                      class="avatar me-3"
                      src="https://avatars.dicebear.com/api/adventurer-neutral/123456.svg"
                      alt="Avatar"
                    />
                    <h3 class="fs-5">Teacher</h3>
                  </div>
                </div>

                <p class="border-bottom pb-3">Saluts les étudiants !</p>

                <div class="fw-bold text-decoration-underline mb-4">
                  Commentaires
                </div>

                <ul class="mt-2 border-bottom">
                  <li>
                    <div
                      class="
                        d-flex
                        align-items-center
                        justify-content-between
                        mb-3
                      "
                    >
                      <div class="d-flex align-items-center">
                        <img
                          class="avatar me-3"
                          src="https://avatars.dicebear.com/api/adventurer-neutral/12345.svg"
                          alt="Avatar"
                        />
                        <div>
                          <h3 class="fs-6">Student</h3>
                          <time class="text-black-50">10 th 11</time>
                        </div>
                      </div>
                    </div>
                    <p>Salut Professeur!</p>
                  </li>
                </ul>

                <form class="d-flex align-items-center mt-4">
                  <img
                    class="avatar me-3"
                    src="https://avatars.dicebear.com/api/adventurer-neutral/123456.svg"
                    alt="Avatar"
                  />
                  <input
                    class="flex-grow-1 border me-2 p-2"
                    placeholder="Write your comment..."
                  />
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
