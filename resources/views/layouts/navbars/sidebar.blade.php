<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Control de Eventos') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Principal') }}</p>
        </a>
      </li>
      <!-- -------------------------------- Menu Evaluación ------------------------------- -->
      @can('evaluation_menu')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Configuracion" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/evaluacion_1.png') }}"></i>
          <p>{{ __('EVALUACIÓN') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="Configuracion">
          <ul class="nav">
            @can('scheme_index')
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('schemes.index') }}">
                <!-- <span class="sidebar-mini"> UP </span> -->
                <i><img style="width:25px" src="{{ asset('img/esquema_1.png') }}"></i>
                <span class="sidebar-normal">{{ __('Esquema') }} </span>
              </a>
            </li>
            @endcan
            @can('criteria_index')
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('criteria.index') }}">
                <!-- <span class="sidebar-mini"> UM </span> -->
                <i><img style="width:25px" src="{{ asset('img/list.png') }}"></i>
                <span class="sidebar-normal"> {{ __('Criterios') }} </span>
              </a>
            </li>
            @endcan
            @can('item_index')
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('items.index') }}">
                <!-- <span class="sidebar-mini"> UM </span> -->
                <i><img style="width:25px" src="{{ asset('img/item_2.png') }}"></i>
                <span class="sidebar-normal"> {{ __('Items') }} </span>
              </a>
            </li>
            @endcan
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('error.index') }}">
                <!-- <span class="sidebar-mini"> UM </span> -->
                <i><img style="width:25px" src="{{ asset('img/error.png') }}"></i>
                <span class="sidebar-normal"> {{ __('Errores') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endcan
      <!-- -------------------------------- Menu Evento ------------------------------- -->
      @can('event_menu')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Evento" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/evento_1.png') }}"></i>
          <p>{{ __('EVENTO') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="Evento">
          <ul class="nav">
            @can('event_index')
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('event.index') }}">
                <!-- <span class="sidebar-mini"> UM </span> -->
                <i><img style="width:25px" src="{{ asset('img/evento.png') }}"></i>
                <span class="sidebar-normal"> {{ __('Evento') }} </span>
              </a>
            </li>
            @endcan
            @can('competition_index')
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('competitions.index') }}">
                <!-- <span class="sidebar-mini"> UP </span> -->
                <i><img style="width:25px" src="{{ asset('img/competencia.png') }}"></i>
                <span class="sidebar-normal">{{ __('Competencia') }} </span>
              </a>
            </li>
            @endcan
            @can('category_index')
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('category-type.index') }}">
                <!-- <span class="sidebar-mini"> UM </span> -->
                <i><img style="width:25px" src="{{ asset('img/criterios.png') }}"></i>
                <span class="sidebar-normal"> {{ __('Tipo de Categoría') }} </span>
              </a>
            </li>
            @endcan
            @can('category_index')
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('categories.index') }}">
                <!-- <span class="sidebar-mini"> UM </span> -->
                <i><img style="width:25px" src="{{ asset('img/categoria.png') }}"></i>
                <span class="sidebar-normal"> {{ __('Categoría') }} </span>
              </a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
      @endcan
      <!-- -------------------------------- Menu Configuración ------------------------------- -->
      @can('config_menu')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Config" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/configuracion.png') }}"></i>
          <p>{{ __('CONFIGURACIÓN') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="Config">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('competing-event.index') }}">
                <!-- <span class="sidebar-mini"> UM </span> -->
                <i><img style="width:25px" src="{{ asset('img/evento.png') }}"></i>
                <span class="sidebar-normal"> {{ __('Evento') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('categories-competition.index') }}">
                <!-- <span class="sidebar-mini"> UP </span> -->
                <i><img style="width:25px" src="{{ asset('img/competencia.png') }}"></i>
                <span class="sidebar-normal">{{ __('Competencia') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endcan



      <!-- -------------------------------- Menu Registro ------------------------------- -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Register" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/register.png') }}"></i>
          <p>{{ __('REGISTRO') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="Register">
          <ul class="nav">
            @can('academy_index')
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('academies.index') }}">
                <!-- <span class="sidebar-mini"> UM </span> -->
                <i><img style="width:25px" src="{{ asset('img/evento.png') }}"></i>
                <span class="sidebar-normal"> {{ __('Academia') }} </span>
              </a>
            </li>
            @endcan
            @can('participant_index')
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('participants.index') }}">
                <!-- <span class="sidebar-mini"> UP </span> -->
                <i><img style="width:25px" src="{{ asset('img/dancing.png') }}"></i>
                <span class="sidebar-normal">{{ __('Participante') }} </span>
              </a>
            </li>
            @endcan
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('principal.registro') }}">
                <!-- <span class="sidebar-mini"> UP </span> -->
                <i><img style="width:25px" src="{{ asset('img/register_1.png') }}"></i>
                <span class="sidebar-normal">{{ __('Registrar Categoria') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('competing-participant.index')}}">
                <!-- <span class="sidebar-mini"> UP </span> -->
                <i><img style="width:25px" src="{{ asset('img/participants.png') }}"></i>
                <span class="sidebar-normal">{{ __('Asociar Participantes') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/carrito')}}">
                <!-- <span class="sidebar-mini"> UP </span> -->
                <i><img style="width:25px" src="{{ asset('img/inscripcion.png') }}"></i>
                <span class="sidebar-normal">{{ __('Iniciar Inscripción') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- -------------------------------------------------------------- -->
      @can('user_index')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
          <p>Usuarios</p>
        </a>
      </li>
      @endcan
      @can('permission_index')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Permissions') }}</p>
        </a>
      </li>
      @endcan
      @can('role_index')
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">location_ons</i>
          <p>{{ __('Roles') }}</p>
        </a>
      </li>
      @endcan
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      @can('post_index')
      <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('posts.index') }}">
          <i class="material-icons">library_books</i>
          <p>{{ __('Post') }}</p>
        </a>
      </li>
      @endcan
    </ul>
  </div>
</div>