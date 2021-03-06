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
            <a href="">
            <button type="button"  class="btn btn-warning btn-lg  text-white col-lg-12 mb-4 ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-plus " viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>Cr??er un Quiz</button>
              </a>
                <button type="button" class="btn btn-success btn-lg  text-white col-lg-12 mb-4 ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                  </svg>Quizes ?? corriger </button>
            <div class="border pt-4 px-4 pb-5">
              <div class="mb-4">Calendrier</div>
              <p class="mb-5">Aucun travail ?? rendre !</p>
              <a href="#" class="d-block text-success text-end">Voir tout</a>
            </div>
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
                bg-success
                text-primary
                cursor-pointer
                w-100
                mb-4
              "
              data-bs-toggle="modal"
              data-bs-target="#modal-input"
            >
              <div class="avatar me-3">
                <img
                  src="https://avatars.dicebear.com/api/adventurer-neutral/123456.svg"
                  alt="Avatar"
                />
              </div>
              <span class="text-white">Cr??er un poste </span>
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
                      <img
                        class="avatar me-3"
                        src="https://avatars.dicebear.com/api/adventurer-neutral/123456.svg"
                        alt="Avatar"
                      />
                      <div class="text-success">??crire un poste ?? la classe</div>
                    </div>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>

                  <div class="px-3 mb-3">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a comment here"
                        id="floatingTextarea2"
                        style="height: 100px"
                      ></textarea>
                      <label for="floatingTextarea2" class="text-black-50"
                        >Announcement</label
                      >
                    </div>
                  </div>

                  <div class="modal-footer d-flex justify-content-between">
                    <div>
                      <label class="upload cursor-pointer" for="upload">
                        <img
                          class="img-cover"
                          src="svgs/upload.svg"
                          alt="Upload"
                        />
                      </label>
                      <input id="upload" type="file" />
                    </div>
                    <div class="d-flex">
                      <button
                        type="button"
                        class="btn btn-secondary py-2 me-2"
                        data-bs-dismiss="modal"
                      >
                        Cancel
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary py-2"
                        data-bs-dismiss="modal"
                      >
                        Post
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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

                <p class="border-bottom pb-3">Saluts les ??tudiants !</p>

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
