<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="components.menu">Gotcha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse px-5" id="navbarNav">
        <form class="d-flex ms-auto my-2 my-lg-0">
          <input class="form-control me-2" type="search" placeholder="Search items" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="#">Shopping cart icon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="#">Link</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 {{Auth::user()->username}}
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
