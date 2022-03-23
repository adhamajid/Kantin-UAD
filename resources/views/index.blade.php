<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/style.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Boostrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />


    <title>Kantin | Univ. Ahmad Dahlan</title>
  </head>
  <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-apple text-white"></i>Kantin UAD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Card -->
    <br /><br /><br /><br /><br />

    <audio id="myAudio" controls autoplay hidden>
      <source src="{{ asset('music') }}/WhatsApp Audio 2021-07-03 at 08.15.34.mpeg_music.ogg" type="audio/ogg" />
      <source src="{{ asset('music') }}/WhatsApp Audio 2021-07-03 at 08.15.34.mpeg_music.mp3" type="audio/mpeg" />
    </audio>
    <script>
      function myFunction() {
        var x = document.getElementById("myAudio").autoplay;
        document.getElementById("demo").innerHTML = x;
      }
    </script>

    <!-- Akhir Card -->

    <!-- Jumbotron -->
    <section id="home" class="jumbotron text-center">
      <img src="{{ asset('img') }}/me.png" alt="อัดฮา & สุรดา" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Kantin UAD</h1>
      <p class="lead">Menyediakan makanan lezat & bergizi</p>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,256L48,261.3C96,267,192,277,288,277.3C384,277,480,267,576,224C672,181,768,107,864,90.7C960,75,1056,117,1152,165.3C1248,213,1344,267,1392,293.3L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="row fs-5">
          <div class="col-md-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quibusdam ex sint pariatur id natus molestias unde rem adipisci et!</p>
          </div>
          <div class="col-md">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, odio aliquid perspiciatis totam quod blanditiis fuga debitis vero tenetur autem consectetur veniam porro vitae aliquam?</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f5d752"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <div id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Menu makanan</h2>
          </div>
        </div>
        
        <div class="row">

          {{-- Ambil data makanan dari database --}}
          @foreach ($makanan as $makanan)
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ $makanan->foto }}/4.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body">
                <h5 class="card-title">{{ $makanan->nama }}</h5>
                <p class="card-text">{{ $makanan->detail }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          @endforeach
          {{-- Selesai --}}

      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5d752" fill-opacity="1" d="M0,192L1440,192L1440,320L0,320Z"></path></svg>
    </div>
    <!-- Akhir Project -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,192L1440,192L1440,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-warning text-white text-center">
      <p>
        Created with love by <a href="https://www.instagram.com/asyah_majid" class="text-white fw-bold"><i class="bi bi-instagram"></i>asyah_majid</a>
      </p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
