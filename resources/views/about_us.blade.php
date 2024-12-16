<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - FAIRYTRY</title>
    <link rel="stylesheet" href="{{url('CSS/style.css')}}">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo-container">
                <img src="{{ asset('images/logo1.jpg')}}" alt="FAIRYTRY Logo" class="logo-img">
                <span class="logo-text">FAIRYTRY</span>
            </div>
            <nav>
                <a href="home">New Arrivals</a>
                <a href="collection">Collection</a>
                <a href="sale" class="sale">Sale</a>
            </nav>
            <div class="icons">
                <a href="#"><img src="{{ asset('images/profile.png')}}" alt="User Icon"></a>
                <a href="#"><img src="{{asset('images/search.png')}}" alt="Search Icon"></a>
                <a href="#"><img src="{{ asset(('images/keranjang.png'))}}" alt="Cart Icon"></a>
            </div>
        </div>
    </header>

    <main>
        <section class="about-us">
            <h1>About Us</h1>
            <div class="logo-circle">
                <img src="{{ asset('images/logo1.jpg')}}" alt="FAIRYTRY Logo">
            </div>
            <blockquote>
                “ Discover Timeless Elegance and Modern Hijab Fashion. ”
            </blockquote>
            <p>Temukan Keanggunan Abadi dan Fashion Hijab Modern di FAIRYTRY.</p>
            <p>Jelajahi karya-karya kami yang luar biasa, menghadirkan perpaduan sempurna antara kesederhanaan, keanggunan, dan inovasi. Jelajahi Koleksi Hijab Terbaru Kami!</p>
        </section>
    </main>

    <footer>
        <div class="social">
            <p>Social</p>
            <a href="#"><img src="{{ asset('images/instagram.png')}}" alt="Instagram Icon"></a>
            <a href="#"><i class="facebook-icon"><img src="{{ asset('images/download.png')}}"></i></a>
        </div>
        <div class="store-info">
            <p>FAIRYTRY Store</p>
            <p>Discover Timeless Elegance and Modern Hijab Fashion</p>
        </div>
        <div class="more">
            <p>More</p>
            <a href="about_us">About Us</a>
            <a href="contact_us">Contact Us</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>