<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR | Affronte la vie sec</title>
  <link rel='stylesheet' href="{{asset('assets/css/dulu_style.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/tiny-slider.css')}}">
</head>
<body>
<!-- partial:index.partial.html -->
<body>
    <section class="home">
      <div class="description">
        <h1 class="title">
          <span class="gradient-text">MyDULU WEAR</span><br /> <span style="font-size:50px">Affronte la vie sec</span>
        </h1>
        <p class="paragraph">
          Dans un monde plein d'opportunités, avoir un mentor peut faire toute la différence. Découvrez pourquoi les gens se tournent vers cette ressource inestimable pour libérer leur potentiel. 
        </p>
        <form id="form" action="/login" action="get">
          <input type="hidden" name="parent_id" id="parent_id">
          <input
            type="email"
            id="email-id"
            name="email_address"
            aria-label="email adress"
            placeholder=""
            oninput="checkEmpty()" />
          <button type="submit" class="btn" aria-label="submit">
            <span>S'inscrire</span>
            <ion-icon name="arrow-forward-outline"></ion-icon>
          </button>
        </form>
      </div>

      <div class="users-color-container">
        <span class="item" style="--i: 1"></span>
        <img
          class="item"
          src="{{asset('assets/img/1.jpg')}}"
          style="--i: 2" alt="" />
        <span class="item" style="--i: 3"></span>
        <img
          class="item"
          src="{{asset('assets/img/2.jpg')}}"
          style="--i: 4" alt="" />

        <img
          class="item"
          src="{{asset('assets/img/3.jpg')}}"
          style="--i: 10" alt="" />
        <span class="item" style="--i: 11"></span>
        <img class="item" src="{{asset('assets/img/4.jpg')}}" style="--i: 12" alt="" />
        <span class="item" style="--i: 5"></span>

        <span class="item" style="--i: 9"></span>
        <img class="item" src="{{asset('assets/img/5.jpg')}}" style="--i: 8" alt="" />
        <span class="item" style="--i: 7"></span>
        <img class="item" src="{{asset('assets/img/6.jpg')}}" style="--i: 6" alt="" />
      </div>
    </section>

  </body>
<!-- partial -->
<script src="{{asset('assets/js/tiny-slider.js')}}"></script>
<script src="{{asset('assets/js/ionicons.esm.js')}}"></script>
<script src="{{asset('assets/js/ionicons.js')}}"></script>
<script src="{{asset('assets/js/scrollreveal.js')}}"></script>
<script  src="{{asset('assets/js/dulu_script.js')}}"></script>

</body>
</html>
