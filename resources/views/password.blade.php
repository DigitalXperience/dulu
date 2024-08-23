<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MyDULU WEAR | Affronte la vie sec</title>
<link rel="shortcut icon" type="image/png" href="assets/img/gulu_logo.png">

  <link rel='stylesheet' href="{{asset('assets/css/dulu_style.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/tiny-slider.css')}}">
<style>
body {font-family: Arial, Helvetica, sans-serif;}



.home.main{
    filter: blur(8px);
  -webkit-filter: blur(8px);
}
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

/* The Modal (background) */
.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 99; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color:  rgba(255, 255, 255, 0.5); /* Black w/ opacity */
  padding-top: 60px;
  
}

.modal label b{
    font-size: xx-large;
}
/* Modal Content/Box */
.modal-content {
  background-color: rgba(255, 255, 255, 0.5);
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius: 20px;
  width: 35%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
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
          <span class="gradient-text">MyDULU WEAR</span><br /> <span style="font-size:50px">Affronte la vie sec</span>
        </h1>
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
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/password/action" method="post">
  @csrf

    <div class="imgcontainer">
      <img src="{{('assets/img/aucun.jpg')}}" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        @if (session('status'))
            <div id="stats" style="display: block; color: red;">
                {{session('status')}}   
            </div>
        @endif 
        <label for="ucode"><b>Entrez votre numero de telephone et vous aller recevoir sms</b></label>
      <input type="text" placeholder="Enter Username" name="number" required>
      <button type="submit">submit</button>      
    </div>
  </form>
</div>




<!-- partial -->
<script src="{{asset('assets/js/tiny-slider.js')}}"></script>
<script src="{{asset('assets/js/ionicons.esm.js')}}"></script>
<script src="{{asset('assets/js/ionicons.js')}}"></script>
<script src="{{asset('assets/js/scrollreveal.js')}}"></script>
<script  src="{{asset('assets/js/dulu_script.js')}}"></script>
<script> 
</script>

</body>
</html>
