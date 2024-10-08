<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('products.index')}}">I miei prodotti</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">I miei articoli</a>
        </li>

        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
          </li>
        @endguest
   
        @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.create')}}">Crea prodotto</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Crea articolo</a>
          </li>

          <li class="nav-item">
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="nav-link" type="submit">Logout</button>
              </form>
          </li>

          <li class="nav-item">
            <a class="nav-link ms-5">Salve {{Auth::user()->name}}</a>
          </li>
        @endauth
      </ul>
      
    </div>
  </div>
</nav>