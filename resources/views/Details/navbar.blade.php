<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Route::is('category') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{ route('category', ['id'=>$category->id])}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('publisher') ? 'active' : '' }}" href="{{route('publisher')}}">Publishers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{route('contact')}}">Contacts</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
