@extends('plantilla.plantilla')

@section('titulo','SISDESK')

@section('contenido')

    <link href="{{ asset('css/global.css') }}" rel="stylesheet" >
    <!-- Load Stripe.js on your website. -->
    <script src="https://js.stripe.com/v3/"></script>
  
<div class="container">
     <br>
     @include('empresa.navuser')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('empresa.index')}}">Inicio</a></li>
  <li class="breadcrumb-item"><a>Comprar Reportes</a></li>
  </ol>
</nav>
</div>
<div class ="objcenter">
        <section class="containerpay">
          <div>
            <h4>Cuantos reportes vas a comprar?</h4>
            <div class="pasha-image">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSDigZT81iHkMcnSwmXYMENPjMhxQeTSJGgLKexIT5S9F_Rpy9i"
                width="140"
                height="160"
              />
            </div>
          </div>
          <div class="quantity-setter">
            <button class="increment-btn btn-success" id="subtract" disabled>-</button>
            <input type="number" id="quantity-input" min="1" value="1" />
            <button class="increment-btn btn-success" id="add">+</button>
          </div>
          <p class="sr-legal-text">Cantidad de Reportes (max 10)</p>
          <div class = "objcenter">
          <button id="basic-photo-button" class="btn btn-success">
            Pagar $<span id="total">50</span>.000
          </button>
          </div>
        </section>
        <div id="error-message"></div>
        </div>
    <script>
      // Replace with your own publishable key: https://dashboard.stripe.com/test/apikeys
      var PUBLISHABLE_KEY = "pk_test_Dd2M9t67UOwlEYOMQdSDXQJA00wbHlOOxB";
      // Replace with the domain you want your users to be redirected back to after payment
      var DOMAIN = "http://sisdesk.com/success";
      // Replace with a SKU for your own product (created either in the Stripe Dashboard or with the API)
      var SKU_ID = "sku_GwHxgZseBZmsPa";

      if (PUBLISHABLE_KEY === "pk_test_Dd2M9t67UOwlEYOMQdSDXQJA00wbHlOOxB") {
        console.log(
          "Replace the hardcoded publishable key with your own publishable key: https://dashboard.stripe.com/test/apikeys"
        );
      }

      if (SKU_ID === "sku_GwHxgZseBZmsPa") {
        console.log(
          "Replace the hardcoded SKU ID with your own SKU: https://stripe.com/docs/api/skus"
        );
      }

      var MIN_PHOTOS = 1;
      var MAX_PHOTOS = 10;

      var stripe = Stripe(PUBLISHABLE_KEY);

      var basicPhotoButton = document.getElementById("basic-photo-button");
      document
        .getElementById("quantity-input")
        .addEventListener("change", function(evt) {
          // Ensure customers only buy between 1 and 10 photos
          if (evt.target.value < MIN_PHOTOS) {
            evt.target.value = MIN_PHOTOS;
          }
          if (evt.target.value > MAX_PHOTOS) {
            evt.target.value = MAX_PHOTOS;
          }
        });

      var updateQuantity = function(evt) {
        if (evt && evt.type === "keypress" && evt.keyCode !== 13) {
          return;
        }

        var isAdding = evt.target.id === "add";
        var inputEl = document.getElementById("quantity-input");
        var currentQuantity = parseInt(inputEl.value);

        document.getElementById("add").disabled = false;
        document.getElementById("subtract").disabled = false;

        var quantity = isAdding ? currentQuantity + 1 : currentQuantity - 1;

        inputEl.value = quantity;
        document.getElementById("total").textContent = quantity * 50;

        // Disable the button if the customers hits the max or min
        if (quantity === MIN_PHOTOS) {
          document.getElementById("subtract").disabled = true;
        }
        if (quantity === MAX_PHOTOS) {
          document.getElementById("add").disabled = true;
        }
      };

      Array.from(document.getElementsByClassName("increment-btn")).forEach(
        element => {
          element.addEventListener("click", updateQuantity);
        }
      );

      // Handle any errors from Checkout
      var handleResult = function(result) {
        if (result.error) {
          var displayError = document.getElementById("error-message");
          displayError.textContent = result.error.message;
        }
      };

      basicPhotoButton.addEventListener("click", function() {
        var quantity = parseInt(
          document.getElementById("quantity-input").value
        );

        // Make the call to Stripe.js to redirect to the checkout page
        // with the current quantity
        stripe
          .redirectToCheckout({
            items: [{ sku: SKU_ID, quantity: quantity }],
            successUrl:
              DOMAIN + "/success.html?session_id={CHECKOUT_SESSION_ID}",
            cancelUrl: DOMAIN + "/canceled.html"
          })
          .then(handleResult);
      });
    </script>

@endsection