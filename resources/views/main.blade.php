<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda @yield('title')  </title>

    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body style="background-color: #d8d3c2">
  <header>
      <nav class="navbar navbar-expand-lg d-flex navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                      <img src="{{asset('images/bookstore.png')}}" alt="" width="75" height="50">
                    </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="nav navbar-nav collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Index</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('ebook.index')}}">{{__('navbar.home_ebook')}}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('cart')}}">{{__('navbar.cart')}}</a>
                      </li>
                     

                      <ul class="nav navbar-nav navbar-right">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('login.login_title') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                            @else
                          <li class="nav-item dropdown justify-between">
                            @if (Auth::user())
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->first_name }}
                             </a>
                            @endif
                            

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              @if (Auth::user()->role_id == 1)
                                <a class="dropdown-item" href="{{route('admin.editProfile',Auth::user()->account_id)}}">{{__('navbar.admin.account')}}</a>
                                <a class="dropdown-item" href="{{route('admin.role')}}">{{__('navbar.admin.role')}}</a>
                              @endif
                         
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} </a>
                               
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                          </li>
                        @endguest
                        <li class="nav-item dropdown justify-between">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{ Config::get('languages')[App::getLocale()]['display'] }}
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          @foreach (Config::get('languages') as $lang => $language)
                              @if ($lang != App::getLocale())
                                      <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language['display']}}</a>
                              @endif
                          @endforeach
                          </div>
                       </li>
                    </ul>
                  
                    </ul>
                  </div>
          </div>
      </nav>
  </header>      

      <div class="container">
        <div class="row row-cols-1">
          <div class="col"  style="height: 160px">
             
          </div>

          <div class="col p-0">
            <div class="container p-0">
                @yield('content')
            </div>
          </div>

          <div class="col" style="height: 70px"></div>
        </div>
      </div>

    

    {{-- <div class="container mx-auto mx-4 mb-4 bg-dark text-white">
        
    </div> --}}

    <footer class="footer fixed-bottom mt-auto py-3 bg-dark">
        <div class="container">
          <span class="text-muted">&#169; Amazing Ebook</span>
        </div>
    </footer>



    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>