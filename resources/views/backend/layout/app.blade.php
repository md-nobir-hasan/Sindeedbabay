<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ENV('APP_NAME')}}</title>
	@vite(['resources/css/bootstrap53.min.css'])
  </head>
  <body style="background: #ff0d0d38">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: blue;padding: 0">
        <div class="container-fluid" style="background: blue">
          <a class="navbar-brand text-white" href="{{route('home')}}" target="_blank">{{ENV('APP_NAME')}}</a>
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active text-white fw-bold" aria-current="page" href="{{route('admin.order.index')}}">Order List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{route('admin.order.duplicate')}}">Duplicate Orders</a>
                  </li>
                  {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Link
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li> --}}
                  {{-- <li class="nav-item">
                    <a class="nav-link disabled">Link</a>
                  </li> --}}
                </ul>

              </div>
        </div>
        </div>
      </nav>
    @yield('page_content')
	@vite(['resources/js/bootstrap53.min.js'])
    @stack('js')
  </body>
</html>
