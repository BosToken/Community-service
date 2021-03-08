<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<title>@yield('title')</title>

@if($user->role_id === 1)
<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://github.com/BosToken">Layanan Mas Zidan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/masyarakat/beranda-masyarakat')}}">Home</a>
          </li>
        </ul>
        <form class="d-flex">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{$user->username}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{url('/admin/home')}}">Admin Page</a></li>
                  <li><a class="dropdown-item" href="{{url('/masyarakat/profil')}}">Profile</a></li>
                  <li><a class="dropdown-item" href="{{url('/masyarakat/setting')}}">Setting</a></li>
                </ul>
            </div>
            <a class="btn btn-outline-danger" href="{{url('/logout')}}">Logout</a>
        </form>
      </div>
    </div>
  </nav>
  @elseif($user->role_id === 2)
<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://github.com/BosToken">Layanan Mas Zidan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/masyarakat/beranda-masyarakat')}}">Home</a>
          </li>
        </ul>
        <form class="d-flex">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{$user->username}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{url('/admin/home')}}">Admin Page</a></li>
                  <li><a class="dropdown-item" href="{{url('/masyarakat/profil')}}">Profile</a></li>
                  <li><a class="dropdown-item" href="{{url('/masyarakat/setting')}}">Setting</a></li>
                </ul>
            </div>
            <a class="btn btn-outline-danger" href="{{url('/logout')}}">Logout</a>
        </form>
      </div>
    </div>
  </nav>
  @elseif($user->role_id === 3)
  <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://github.com/BosToken">Layanan Mas Zidan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/masyarakat/beranda-masyarakat')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/masyarakat/complaint')}}">Writing Complaint Report</a>
          </li>
        </ul>
        <form class="d-flex">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{$user->username}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{url('/masyarakat/profil')}}">Profile</a></li>
                  <li><a class="dropdown-item" href="{{url('/masyarakat/setting')}}">Setting</a></li>
                </ul>
            </div>
            <a class="btn btn-outline-danger" href="{{url('/logout')}}">Logout</a>
        </form>
      </div>
    </div>
  </nav>
  @else
  
  @endif

@yield('container')

