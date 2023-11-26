<!--================== Header Section Start ==================-->
<header class="navigation border-bottom">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
          <i class="far fa-envelope"></i>BadrulSajib
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @@about" href="{{ route('about') }}">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @@portfolio" href="{{ route('project') }}">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @@contact" href="{{ route('contact') }}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--================== Header Section End ==================-->