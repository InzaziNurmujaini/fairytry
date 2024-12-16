<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fairytry - Scarves Collection</title>
    <link rel="stylesheet" href="{{ url('CSS/style.css')}}">
</head>
<body>
    <!-- Header -->
    <header>
       <div class="navbar">
           <div class="logo-container">
               <img src="asset/logo1.jpg" alt="FAIRYTRY Logo" class="logo-img">
               <span class="logo-text">FAIRYTRY</span>
           </div>
           <nav>
               <a href="home">New Arrivals</a>
               <a href="collection">Collection</a>
               <a href="sale" class="sale">Sale</a>
           </nav>
           <div class="icons">
               <a href="#"><img src="{{ asset('images/profile.png')}}" alt="User Icon"></a>
               <a href="#"><img src="{{ asset('images/search.png')}}" alt="Search Icon"></a>
               <a href="#"><img src="{{ asset('images/keranjang.png')}}" alt="Cart Icon"></a>
           </div>
       </div>
   </header>

    <!-- Main Section -->
    <main>
        <h1>SCARVES</h1>
        <div class="gallery">
            <div class="gallery-item">
                <img src="{{ asset('images/foto1.jpg')}}" alt="Astrophile Series">
                <p>Astrophile Series</p>
                <p>$70.00</p>
                <div class="sale-sticker">SALE</div> <!-- Stiker Sale -->
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/foto2.jpg')}}" alt="CLLSX Series">
                <p>CLLSX Series</p>
                <p>$80.00</p>
                <div class="sale-sticker">SALE</div> <!-- Stiker Sale -->
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/foto3.jpg')}}" alt="WAF Series">
                <p>WAF Series</p>
                <p>$75.00</p>
                <div class="sale-sticker">SALE</div> <!-- Stiker Sale -->
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/foto1.jpg')}}" alt="Pashmina Series">
                <p>Pashmina Series</p>
                <p>$90.00</p>
                <div class="sale-sticker">SALE</div> <!-- Stiker Sale -->
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/foto4.jpg')}}" alt="Bergo Series">
                <p>Bergo Series</p>
                <p>$90.00</p>
                <div class="sale-sticker">SALE</div> <!-- Stiker Sale -->
            </div>
            <div class="gallery-item">
              <img src="{{ asset('images/foto1.jpg')}}" alt="Astrophile Series">
              <p>Astrophile Series</p>
              <p>$70.00</p>
              <div class="sale-sticker">SALE</div> <!-- Stiker Sale -->
          </div>
          <div class="gallery-item">
              <img src="{{ asset('images/foto1.jpg')}}" alt="Astrophile Series">
              <p>Astrophile Series</p>
              <p>$70.00</p>
              <div class="sale-sticker">SALE</div> <!-- Stiker Sale -->
          </div>
            <div class="gallery-item">
                <img src="{{ asset('images/foto4.jpg')}}" alt="Paris Series">
                <p>Paris Series</p>
                <p>$90.00</p>
                <div class="sale-sticker">SALE</div> <!-- Stiker Sale -->
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="social">
            <p>Social</p>
            <a href="#"><img src="{{ asset('images/instagram.jpg')}}" alt="Instagram Icon"></a>
            <a href="#"><i class="facebook-icon"><img src="{{ asset('images/download.jpg')}}"></i></a>
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
</body>
</html>