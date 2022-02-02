<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">Nikita App</a>
    
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('index') }}">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('post.index') }}">Блог</a>
          </li>
        </ul>
    
      </div>
    </div>
  </nav>