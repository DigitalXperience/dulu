<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MyDULU WEAR | Affronte la vie sec</title>
<link rel="shortcut icon" type="image/png" href="assets/img/gulu_logo.png">

  <link rel='stylesheet' href="{{asset('assets/css/dulu_style.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/tiny-slider.css')}}">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    /* .home.main{
        filter: blur(8px);
      -webkit-filter: blur(8px);
    } */
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      /* border: 1px solid #ccc; */
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
      
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }
      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>
<body>
<section class="home main">
      <div class="description">
        <h1 class="title">
           <span class="gradient-text">MyDULU WEAR</span><br /> <span style="font-size:50px">Vous remerci de votre confiance</span> 
        </h1>
        <p class="paragraph">
            A votre confirmation vous serez informés par mail.    
        </p>
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
  </form>
</div>




<!-- partial -->
<script src="{{asset('assets/js/tiny-slider.js')}}"></script>
<script src="{{asset('assets/js/ionicons.esm.js')}}"></script>
<script src="{{asset('assets/js/ionicons.js')}}"></script>
<script src="{{asset('assets/js/scrollreveal.js')}}"></script>
<script  src="{{asset('assets/js/dulu_script.js')}}"></script>
</body>
</html>
