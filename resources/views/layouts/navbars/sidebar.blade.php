<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
            <div class="fileinput-new thumbnail">
                <img src="{{ $logotipo }}" width="50%" height="50px" rel="nofollow" alt="...">
            </div>
            <strong>{{ $nombre_empresa }}</strong><br>
            {{ $slogan }}
        </div>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{URL::current() == URL::route('sistema.home') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('sistema.home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{URL::current() == URL::route('brand.index') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('brand.index') }}">
          <i class="material-icons">bookmark</i>
            <p>{{ __('Marcas') }}</p>
        </a>
      </li>
      <li class="nav-item {{URL::current() == URL::route('category.index') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('category.index') }}">
          <i class="material-icons">drag_indicator</i>
            <p>{{ __('Categoría') }}</p>
        </a>
      </li>
      <li class="nav-item {{URL::current() == URL::route('product.index') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('product.index') }}">
          <i class="material-icons">store</i>
            <p>{{ __('Producto') }}</p>
        </a>
      </li>
      <li class="nav-item {{URL::current() == URL::route('order.index') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('order.index') }}">
          <i class="material-icons">shopping_cart</i>
            <p>{{ __('Pedidos') }}</p>
        </a>
      </li>
      <li class="nav-item {{URL::current() == URL::route('user.index') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('user.index') }}">
          <i class="material-icons">supervisor_account</i>
            <p>{{ __('Usuarios') }}</p>
        </a>
      </li>
      <li class="nav-item {{URL::current() == URL::route('company.index_pagina') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('company.index_pagina') }}">
          <i class="material-icons">phonelink</i>
            <p>{{ __('Página WEB') }}</p>
        </a>
      </li>
      <li class="nav-item {{URL::current() == URL::route('company.index_sistema') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('company.index_sistema') }}">
          <i class="material-icons">phonelink</i>
            <p>{{ __('Sistema WEB') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
