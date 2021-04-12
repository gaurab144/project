<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    {{-- nav-bar --}}
    <div class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                      <a class="nav-link" href="/about">About</a>
                      <a class="nav-link" href="/services">Service</a>
                      <a class="nav-link" href="/profile">Profile</a>
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                  </div>
                </div>
              </nav>
        </div>
    </div>
    
    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    <div class="py-5 bg-dark">
      <div class="container text-white">
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. In quaerat, ipsam consequuntur beatae accusamus quos officia id! Atque fuga, sit est officia, aperiam temporibus laudantium id optio, maiores a dignissimos.
        </p>
        <a href="About">About</a><p>creator</p>

      </div>

    </div>
    

  </body>
</html>