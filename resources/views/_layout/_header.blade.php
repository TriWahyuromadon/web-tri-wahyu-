<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar fixed navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3>WEB SEKOLAH</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="uil uil-home"></i>Home</a></li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="uil uil-blogger"></i>Profile</a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog bg-dark">
                      <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'Tentang']) }}">About</a></li>
                      <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'sejarah']) }}">History</a></li>
                       <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'visi-misi']) }}">Vision and mission</a></li>
                  </ul>
                </li>
              <li class="nav-item"><a class="nav-link" href="{{ route('guru.index') }}"><i class="uil uil-bag"></i>Teacher</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}"><i class="uil uil-phone"></i>News</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('galeri.index') }}"><i class="uil uil-info-circle"></i>Gallery</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('kontak.index') }}"><i class="uil uil-info-circle"></i>Contact</a></li>
          </ul>
      </div>
  </div>
</nav>

</body>
</html>