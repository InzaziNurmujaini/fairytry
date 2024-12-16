<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Fairytry</title>
    <link rel="stylesheet" href="{{ url('CSS/style.css')}}">
</head>
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
<body>
    <!-- Cart Modal -->
    <div class="cart-modal">
        <div class="cart-container">
            <button class="close-btn">&times;</button>
            <div class="cart-item">
                <img src="{{ asset('images/foto1.jpg')}}" alt="Astrophile Series">
                <div class="item-info">
                    <p class="item-name">Astrophile Series</p>
                    <p class="item-price">70.000</p>
                    <div class="quantity">
                        <button class="decrease-btn">-</button>
                        <span class="quantity-value">1</span>
                        <button class="increase-btn">+</button>
                    </div>
                </div>
            </div>
            <div class="subtotal">
                <p>SUBTOTAL</p>
                <p class="subtotal-amount">70.000</p>
            </div>
            <textarea class="order-notes" placeholder="Order notes"></textarea>
            <button class="checkout-btn">CHECKOUT</button>
        </div>
    </div>
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