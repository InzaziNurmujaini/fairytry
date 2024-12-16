<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FAIRYTRY</title>
    <link rel="stylesheet" href="{{ url('CSS/style.css')}}">
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
                      <a href="#"><img src="{{ asset('images/search.png')}}" alt="Search Icon"></a>
                      <a href="#"><img src="{{ asset('images/keranjang.png')}}" alt="Cart Icon"></a>
                  </div>
              </div>
          </header>

    <main>
        <section class="contact-us">
            <h1>Contact Us</h1>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Send</button>
            </form>
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