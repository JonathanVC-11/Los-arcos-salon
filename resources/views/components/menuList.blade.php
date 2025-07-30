<ul class="main-menu__list">
      <li @if (request()->is(['index'])) class="current" @endif>
        <a href="{{ route('index') }}">Inicio</a>
    </li>

    <li @if (request()->is(['about'])) class="current" @endif>
        <a href="{{ route('about') }}">Acerca de Nosotros</a>
    </li>
    <li @if (request()->is(['contact'])) class="current" @endif>
        <a href="{{ route('contact') }}">Contacto</a>
    </li>
</ul>
