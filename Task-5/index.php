<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="responsive.css">

  <title>AdvenTour</title>
</head>

<body>  
  <section id="hero">
    <div id="back"></div>
    <div class="section-wrap">
      <header>
        <a class="head-logo"><span>Adven</span>Tour</a>

        <nav>
          <a class="nav-item active">Home</a>
          <a class="nav-item" href="discover.html">Discover</a>
          <a class="nav-item">Service</a>
          <a class="nav-item">Blog</a>
          <a class="nav-item">About</a>
          <a class="nav-item">Contact</a>
          <a class="nav-item" href="signup.php">Login</a>
          <a class="nav-item" href="signup.php">Signup</a>
        </nav>

      </header>

      <div class="hr-content">
        <div class="ct-left">
          <h1 class="headline">Discover <span>Your Next </span>Adventure</h1>

          <p class="hr-description">
            ❝Don't wait for tomorrow—start your adventure today! Discover breathtaking destinations, thrilling
            experiences, and unforgettable memories around the world. ❞
          </p>

          <div class="hr-actions">
            <select name="location" id="location">
              <option value="" disabled selected>Select a location</option>
              <option value="bali">Bali, Indonesia</option>
              <option value="paris">Paris, France</option>
              <option value="newyork">New York, USA</option>
              <option value="tokyo">Tokyo, Japan</option>
              <option value="sydney">Sydney, Australia</option>
            </select>

            <button>Search</button>
          </div>

        </div>
        <div class="ct-right">
          <img src="im/car.png" alt="Car">
        </div>
      </div>
    </div>
  </section>

  <section id="destination">
    <div class="section-wrap">

      <div class="section-head">
        <h2 class="section-title">most Popular <br /><span>Destinations</span></h2>

        <div class="ds-control">
          <i class="fa-solid fa-angle-left"></i>
          <i class="fa-solid fa-angle-right"></i>
        </div>
      </div>

      <div class="ds-content">

        <div class="ds-card crd-1">
          <img src="im/d1.jpg" alt="d1">
          <h3 class="ds-crd-title">Tropical Beach Paradise</h3>
          <div>
            <p class="price">$250/Person</p>
            <button class="crd-btn">Book</button>
          </div>
          <p class="ds-rate">
            <i class="fa-solid fa-star"></i>
            4.8
          </p>
        </div>

        <div class="ds-card crd-2">
          <img src="im/d2.jpg" alt="d2">
          <h3 class="ds-crd-title">Mountain Escape</h3>
          <div>
            <p class="price">$400/Person</p>
            <button class="crd-btn">Book</button>
          </div>
          <p class="ds-rate">
            <i class="fa-solid fa-star"></i>
            4.6
          </p>
        </div>

        <div class="ds-card crd-3">
          <img src="im/d3.jpg" alt="d3">
          <h3 class="ds-crd-title">Rainforest Retreat</h3>
          <div>
            <p class="price">$150/Person</p>
            <button class="crd-btn">Book</button>
          </div>
          <p class="ds-rate">
            <i class="fa-solid fa-star"></i>
            4.7
          </p>
        </div>

      </div>

      <button class="ds-btn">See all</button>

    </div>
  </section>

  <section id="about">
    <div class="section-wrap">
      <div class="ab-content">
        <div class="ct-right">
          <img src="im/p2.png"  alt="p2" class="animationRotste">
        </div>
        <div class="ct-left">
          <h2 class="section-title">Our Stories with <br /><span>Adventurers</span></h2>

          <p class="ab-description">
            We bring adventurers to the world’s most stunning destinations. Whether you’re looking for a calm retreat or
            an adrenaline rush, we have the perfect trip for you.
          </p>

          <div class="ab-st">

            <div class="ab-crd">
              <h3>12K+</h3>
              <p>Happy Customers</p>
            </div>

            <div class="ab-crd">
              <h3>20+</h3>
              <p>Years of Experience</p>
            </div>

            <div class="ab-crd">
              <h3>30+</h3>
              <p>Global Destinations</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="section-wrap">
      <div class="ct-content">
        <div class="ct-left">
          <h2 class="section-title">Contact <span>us</span></h2>

          <form>
            <input type="text" placeholder="Your name" spellcheck="false" class="name">
            <input type="text" placeholder="Your email" spellcheck="false" class="email">
            <input type="text" placeholder="Phone number" spellcheck="false" class="pn">
            <input type="submit" value="Send" class="send">
          </form>
        </div>

        <div class="ct-right">
          <img src="im/man.png" alt="man">
        </div>
      </div>
    </div>
  </section>

  <section id="footer">
    <div class="section-wrap">
      <div class="socials">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <a href="https://www.linkedin.com/in/jeet-shaw-34544131b" target="_blank" rel="noopener noreferrer" style="color: inherit;"><i class="fa-brands fa-linkedin-in"></i></a>
        <i class="fa-brands fa-youtube"></i>
        <a href="https://www.instagram.com/jeetshaw04" target="_blank" rel="noopener noreferrer" style="color: inherit;"><i class="fa-brands fa-instagram"></i></a>
      </div>

      <p class="copyrights">© <a href="mailto:shawjeet04@gmail.com" style="text-decoration: none; color: inherit;">Jeet Shaw</a> 2025</p>
    </div>
  </section>

  <script src="script.js"></script>

</body>
</html>
