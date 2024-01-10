<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
	<link rel="satylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="Untitled.js">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
    <!-- custom css file link  -->
	
	<link rel="stylesheet" href="footerstyle.css">
    <link rel="stylesheet" href="Untitled-7.css">

</head>
<body onLoad="showSlides()">
	<script>
	let slideIndex=0;
		function showSlides(){
		let i;
		let slides = document.getElementsByClassName("mySlides");
		for(i=0;i<slides.length;i++){
			slides[i].style.display="none";
		}
		slideIndex++;
		if(slideIndex>slides.length){slideIndex=1}
		slides[slideIndex-1].style.display="block";
		setTimeout(showSlides,1800);
		}
	</script>
			
	
<div class="slideshow-container">
		<div class="mySlides fade">
		<img src="image/h1.png" width="100%" alt="">
			<div class="text"></div>
		</div>
</div>
	
	  
	  <div class="slideshow-container">
		<div class="mySlides fade">
		<img src="image/h2.png" width="100%" alt="">
			<div class="text"></div>
		</div>
	</div>
	
<div class="slideshow-container">
		<div class="mySlides fade">
		<img src="image/h3.png" width="100%" alt="">
			<div class="text"></div>
		</div>
</div>
	

	
<!-- header section starts  -->

<a href="#" class="logopic"> <i class="fas fa-shopping-basket"></i>gri </a>
	
<header class="header"><img class="logoright" src="image/LOGO1.png"   width="6%" align="left-corner">
	<a href="#" class="logo">RATHNA</a>
	
<div	class="grocery">GROCERY</div> 
 
	
	
    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#features">features</a>
      <a href="#products">products</a>
      <a href="#categories">categories</a>
      <a href="contactus">contactus</a>
      <a href="#blogs">blogs</a>
    </nav>

	

    <form action="" class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
    
    </form>
<div class="awesomelogos">
	<i class="fa fa-search" aria-hidden="true"></i>
	<a href="login"><i class="fa fa-user" aria-hidden="true"></i></a>
	<i class="fa fa-shopping-cart" aria-hidden="true"></i>
	
	
  </div>
	   
</header>

<!-- header section ends -->
	
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>organic</span> products for your</h3>
        <p>shop online at sainsbury's for everything from groceries and clothing to homewares, electricals and more. we also offer a great range of financial services. together we’re helping everyone eat better.</p>
        
  </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading">our<span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/featureimg.png" alt="">
            <h3>fresh and organic</h3>
            <p>Fresh And Organic</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>free delivery</h3>
            <p>Free Delivery...</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>Easy Payments</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>
<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading">our<span>Products</span> </h1>

  <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-1.png" alt="">
                <h3>Orange</h3>
                <div class="price"> 250grams   RS.200 </div>
              <button class="buy"onclick="document.location='YourButtonURL'">BUY   </button> 
                <button class="addtocart" onclick="document.location='YourButtonURL'">Add To Cart   </button> 
            </div>

            <div class="swiper-slide box">
                <img src="image/product-2.png" alt="">
                <h3>Onion</h3>
                <div class="price"> 1KG   RS.600 </div>
                <button class="buy" onclick="document.location='YourButtonURL'">BUY   </button> 
				 <button class="addtocart" onclick="document.location='YourButtonURL'">Add To Cart   </button>
                
            </div>

            <div class="swiper-slide box">
                <img src="image/product-3.png" alt="">
                <h3>Meat</h3>
                <div class="price"> 1KG   RS.600 </div>
               <button class="buy" onclick="document.location='YourButtonURL'">BUY   </button> 
				 <button class="addtocart" onclick="document.location='YourButtonURL'">Add To Cart   </button>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-4.png" alt="">
                <h3>cabbage</h3>
                <div class="price"> 1KG   RS.200 </div>
              <button class="buy" onclick="document.location='YourButtonURL'">BUY   </button> 
               <button class="addtocart" onclick="document.location='YourButtonURL'">Add To Cart   </button>
            </div>

        </div>

    </div>

  <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-5.png" alt="">
                <h3>fresh potato</h3>
                <div class="price"> 1KG   RS.250  </div>
              <button class="buy" onclick="document.location='YourButtonURL'">BUY   </button> 
               <button class="addtocart" onclick="document.location='YourButtonURL'">Add To Cart   </button>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-6.png" alt="">
                <h3>Avocado</h3>
                <div class="price"> 1KG   RS.250</div>
              <button class="buy" onclick="document.location='YourButtonURL'">BUY   </button> 
               <button class="addtocart" onclick="document.location='YourButtonURL'">Add To Cart   </button>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-7.png" alt="">
                <h3>Carrot</h3>
                <div class="price"> 1KG   RS.250 </div>
               <button class="buy "onclick="document.location='YourButtonURL'">BUY   </button> 
               <button class="addtocart" onclick="document.location='YourButtonURL'">Add To Cart   </button>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-8.png" alt="">
                <h3>green lemon</h3>
                <div class="price"> 1KG   RS.250</div>
              <button class="buy" onclick="document.location='YourButtonURL'">BUY   </button> 
               <button class="addtocart" onclick="document.location='YourButtonURL'">Add To Cart   </button>
            </div>

        </div>

    </div>


</section>

<!-- categorie section starts  -->
	
<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/cat-1.png" alt="">
            <h3>vegitables</h3>
            <button class="shopnow" onclick="document.location='YourButtonURL'">Shop Now   </button> 
        </div>

        <div class="box">
            <img src="image/cat-2.png" alt="">
            <h3>fresh fruits</h3>
            <button class="shopnow" onclick="document.location='YourButtonURL'">Shop Now   </button>
        </div>

        <div class="box">
            <img src="image/cat-3.png" alt="">
            <h3>dairy products</h3>
            <button class="shopnow" onclick="document.location='YourButtonURL'">Shop Now   </button>
        </div>

        <div class="box">
            <img src="image/cat-4.png" alt="">
            <h3>fresh meat</h3>
            <button class="shopnow" onclick="document.location='YourButtonURL'">Shop Now   </button>
        </div>

    </div>

</section>

<!-- categories section ends -->
	
	

<!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
         
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            27/A , 24 Street, 7131 Colombo 4, Sri Lanka          </div>
          <div>
            <span>
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </span>
            rathnagrocery@gmail.com
          </div>
          <div>
            <span>
              <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
            +9477-456-4512
          </div>
          <div class="payment-methods">
            <img src="./images/payment.png" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->
	


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	
<script src="java.js"></script>
</body>
</html>