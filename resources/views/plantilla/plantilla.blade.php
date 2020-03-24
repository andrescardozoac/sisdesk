<!DOCTYPE html>
<html lang="en">
@yield('recaptcha')
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>@yield('titulo','SISDESK')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <style type="text/css">


td .btn{
    width: 100%;

}

.registerinicio{
  /*  background: -webkit-linear-gradient(left, #3931af, #00c6ff);*/
  /*  background: -webkit-linear-gradient(left, #020110, #00c6ff);*/
  /* background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
   background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
    margin-top: 3%;
    /*padding: 3%; */
}

.register{
    /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background: -webkit-linear-gradient(left, #020110, #00c6ff);
    background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
    background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
    /*margin-top: 3%;*/
    padding: 3%;
}

.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 100%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}

@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}


.register .register-form .form-control {
   /* border-radius: 1rem;*/
}



.register-left1 img{
    margin-top: 0;
    margin-bottom: 0%;
    width: 20%;   

}


.btncolorblanco {
    
    color: white !important;
    margin: 1px;
    

}

.objcenter
{
  display: flex;
  justify-content: center;
  align-items: center;
}

.containerpay {
  border: 1px solid #e8e8e8;
  border-radius: 6px;
  padding: 32px 28px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  max-width: 400px;
}

.containerpay .pasha-image-stack {
  margin-top: 20px;
}

.containerpay:first-of-type {
  margin-right: 20px;
}

:root {
  --accent-color: green;
  --headline-color: var(--accent-color);
  --logo-image: url("https://storage.googleapis.com/stripe-sample-images/logo-pasha.svg");
}



.container-fluid{
        width: 90% !important;
}



.fa {
    width: 20px;
}

.redondo {
    border-radius: 64px;
}
body {
/*background-color: #0f8bf41a; /*Color de Fondo */
font-family: 'Underdog', cursive;
}


footer {
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
 
}

.footers a {color:#696969;}
.footers p {color:#696969;}
.footers ul {line-height:30px;}
#social-fb:hover {
     color: #3B5998;
     transition:all .001s;
 }
 #social-tw:hover {
     color: #4099FF;
     transition:all .001s;
 }
 #social-gp:hover {
     color: #d34836;
     transition:all .001s;
 }
 #social-em:hover {
     color: #f39c12;
     transition:all .001s;
 }

 .breadcrumb {
      background-color: #e9ecef00;
 }

 .quantity-setter .increment-btn {
  margin-top: 0;
  border-radius: 0;
  border: 1px solid var(--accent-color);
}

.quantity-setter {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.quantity-setter input {
  border-radius: 0;
  width: 50px;
  padding: 0;
  text-align: center;
}


.pasha-image-stack {
  display: grid;
  grid-gap: 12px;
  grid-template-columns: auto auto;
}

.pasha-image-stack img,
.pasha-image img {
  border-radius: var(--radius);
  background-color: var(--gray-border);
  box-shadow: 0 7px 14px 0 rgba(50, 50, 93, 0.1),
    0 3px 6px 0 rgba(0, 0, 0, 0.07);
  transition: all 0.8s ease;
  opacity: 0;
}

.pasha-image {
  text-align: center;
  margin-top: 20px;
}

.pasha-image img {
  opacity: 1;
}

.pasha-image-stack img:nth-child(1) {
  transform: translate(30px, 15px);
  opacity: 1;
}
.pasha-image-stack img:nth-child(2) {
  transform: translate(-28px, 0px);
  opacity: 1;
}
.pasha-image-stack img:nth-child(3) {
  transform: translate(64px, -50px);
  opacity: 1;
}

.sr-header {
  margin-bottom: 32px;
}

.sr-root {
  display: flex;
  flex-direction: row;
  width: 100%;
  max-width: 980px;
  padding: 48px;
  align-content: center;
  justify-content: center;
  height: auto;
  min-height: 100vh;
  margin: 0 auto;
}
.sr-legal-text {
  color: var(--gray-light);
  text-align: center;
  font-size: 13px;
  line-height: 17px;
  margin-top: 12px;
}
.sr-root {
  animation: 0.4s form-in;
  animation-fill-mode: both;
  animation-timing-function: ease;
}

@media (max-width: 720px) {
  .sr-root {
    flex-direction: column;
    justify-content: flex-start;
    padding: 48px 20px;
    min-width: 320px;
  }

  .sr-main,
.sr-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  align-self: center;
}
.sr-main {
  width: var(--form-width);
}
.sr-main {
    width: 100%;
  }

  
#icono {
  width: 20%;

}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
</head>
<body> 

@yield('contenido')
</body>
</html>
