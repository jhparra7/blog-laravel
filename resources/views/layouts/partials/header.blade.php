<header>
    <h1>Cursos para todos</h1>
    <p>Preparado por Jesús Parra</p>
    <p>Especialista en tecnología de la Información</p>
</header>
<hr>
<nav>
    <li>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    </li>
    <li>
        <a href="{{ route('cursos.index')}}" class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">Cursos</a>
    </li>
    <li>
        <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
    </li>
    <li>
        <a href="{{ route('contactanos.index') }}" class="{{ request()->routeIs('contactanos.index') ? 'active' : '' }}">Contactenos</a>
    </li>          
  </nav>
  <hr>