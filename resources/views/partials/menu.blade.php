
<div class="container">
    <hr class="color_1">
</div>
<div class="container">
         <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
             <a class="navbar-brand" href="{{route('site')}}">Laravel-starter</a>
             <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                     <li class="nav-item active">
                         <a class="nav-link" href="{{route('site')}}">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Dev</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                         <div class="dropdown-menu" aria-labelledby="dropdownId">
                             <a class="dropdown-item" href="#">Action 1</a>
                             <a class="dropdown-item" href="#">Action 2</a>
                         </div>
                     </li>
                 </ul>


                 <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else


                        <li class="nav-item mr-4">
                        <a class="nav-link text-primary font-weight-bold" href="{{route('admin')}}"><i class="fa fa-user-injured mr-2"></i>{{ __('Dashboard') }}</a>
                        </li>

                        <li class="nav-item"><img src="{{Auth::user()->getGravatar()}}"  style="border-radius: 100%; width: 35px;height: 35px;" alt=""></li>

                        <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right my-4" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('profile', Auth::user()->id)}}">
                                <span> Profile</span>
                                </a>
                                  <div class="dropdown-divider color_1"></div>

                                  <a class="dropdown-item" href="{{ route('settings') }}">
                                    <span> Settings</span>
                                </a>
                                  <div class="dropdown-divider color_1"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

                 {{-- <ul class="navbar-nav ml-5 mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">register</a>
                    </li>

                </ul> --}}
             </div>
         </nav>
</div>


