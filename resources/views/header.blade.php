<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
  <title>Artéria - {{ isset($titulo) ? $titulo : 'Artéria' }}</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('enlaces/enlacesHeader')

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
  
        <div class="logo">
          <a href="/"><img src="{{ secure_asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>
        </div>
        
        <!-- .navbar -->
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="{{ route('index') }}">Inicio</a></li>
            <li><a class="nav-link scrollto" href="{{ route('about') }}">Sobre nosotros</a></li>
            @if(!Auth::check())
            <li><a class="nav-link scrollto" href="{{ route('registro') }}">Registrate</a></li>
            <li><a class="nav-link scrollto" href="{{ route('login') }}">Iniciar Sesi&oacute;n</a></li>
            @else
            <li class="dropdown"><a href="{{ route('perfil_vista') }}"><span>Perfil</span>@if(Auth::check() && Auth::user()->esAdmin == 1) <i class="bi bi-chevron-down">@endif</i></a>
              <ul>
                @if(Auth::check() && Auth::user()->esAdmin == 1)
                <li>
                  <a href="{{ route('perfil_vista') }}"><span>Mi Perfil</span></a>
                </li>
                  <li class="dropdown"><a href="#"><span>Gestionar</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="{{ route('verUsuarios') }}">Usuarios</a></li>
                      <li><a href="{{ route('verAdmins') }}">Administradores</a></li>
                    </ul>
                  </li>
        
                @endif
                
              </ul>
            </li>
            <li><a class="nav-link scrollto text-danger" href="{{ route('cerrar_sesion') }}">Cerrar Sesi&oacute;n</a></li>
            @endif
            @if(Auth::check() && Auth::user()->esAdmin == 1)
            <li class="dropdown">
              <a href="#"><span>Obras</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ route('subirObraForm') }}">Subir Obra</a></li>
                <li class="dropdown"><a href="#"><span>Gestionar</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="{{ route('obrasSubcategorias_vista') }}">Gestionar Categorias</a></li>
                    <li><a href="{{ route('verObrasTotales') }}">Gestionar Obras</a></li>
                  </ul>
                </li>
              </ul>
            </li>
                @endif
                @if(Auth::check() && Auth::user()->esAdmin == 0)
                <li class="dropdown">
                  <a href="#"><span>Obras</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="{{ route('subirObraForm') }}">Subir Obra</a></li>
                  </ul>
                </li>
                @endif

              </ul>
            </li>
          
            <li><a class="nav-link scrollto" href="{{ route('contacto') }}">Contacto</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- End .navbar -->
      </div>
    </header><!-- End Header -->  
  </head>
