<nav class="navbar navbar-light">
  <a href ="{{route('empresa.index')}}"class="navbar-brand"><img id="icono" class="img-responsive" 
    src="http://127.0.0.1/sisdesk/resources/images/logo.PNG" style="width: 150px;"></a>

  <ul class="nav flex-column text-center">
  <li class="nav-item">
    <span class="nav-link active">Bienvenido   {{ Auth::user()->name }} </span>
  </li>
  <li class="nav-item">
  <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
document.getElementById('logout-form').submit();">Cerrar sesión</a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
  </li>
</ul>

</nav>

