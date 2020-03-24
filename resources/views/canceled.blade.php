@extends('plantilla.plantilla')

@section('titulo','SISDESK')

@section('contenido')

<script src="https://js.stripe.com/v3/"></script>

<div class="container">
     <br>
     @include('empresa.navuser')
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('empresa.index')}}">Inicio</a></li>
      <li class="breadcrumb-item"><a>Operacion Cancelada</a></li>
      </ol>
    </nav>

</div>
    <div class="sr-root">
      <div class="sr-main">
        <header class="sr-header">
          <div class="sr-header__logo"></div>
        </header>
        <div class="sr-payment-summary completed-view">
          <h1>Su pago fue cancelado</h1>
          <h4>Checkout Session ID: <span id="session"></span></h4>
        </div>
      <div class="sr-content">
        <div class="pasha-image-stack">
        <div class="pasha-image">
              <img
                src="{{ asset('images/cancel.png') }}"
                width="140"
                height="160"
              />
            </div>
        </div>
      </div>
    </div>
    <script>
      // Replace with your own publishable key: https://dashboard.stripe.com/test/apikeys
      var PUBLISHABLE_KEY = "pk_test_Dd2M9t67UOwlEYOMQdSDXQJA00wbHlOOxB";
      
      if (PUBLISHABLE_KEY === "pk_test_Dd2M9t67UOwlEYOMQdSDXQJA00wbHlOOxB") {
        console.log(
          "Replace the hardcoded publishable key with your own publishable key: https://dashboard.stripe.com/test/apikeys"
        );
      }

      var stripe = Stripe(PUBLISHABLE_KEY);
      var urlParams = new URLSearchParams(window.location.search);

      if (urlParams.has("session_id")) {
        document.getElementById("session").textContent = urlParams.get(
          "session_id"
        );
      }
    </script>