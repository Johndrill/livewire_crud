<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("/styles/index.css")}}">
   @livewireStyles 
</head>


<body>

    {{$slot}}

        <div class="carousel">
            <h2 class="info">Health Infos you might need</h2>
            <!-- Slideshow container -->
        <div style="text-align-last: center;" class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      
      <p>Walking can help boost creativity: A study has found that walking especially outdoors, can increase
        creative thingking.
      </p>
      
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <p>Healty life style</p>
      
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <p>Excercise always to health your body</p>
      
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <div class="location">
    <div class="brgy-location">
        <img src="./assets/images/image 4.png" alt="">
    </div>
    
  </div>
        </div>

        


    
        <div class="footer-section">
            <div class="contact">Contact Us</div>
            <div class="contact-1">
                <img src="./assets/images/pin 1.png" alt="">
                <p> Sto. Rosario St. Mapulang Luca, Valenzuela Philippines</p>
                <img src="./assets/images/gmail 1.png" alt="">
                <p>mailto:brgy.mapulanglupa2018@gmail.com</p>
            </div>
            <div class="contact-2">
                <img src="./assets/images/phone-call 1.png" alt="">
                <p>09230888995</p>
                <img src="./assets/images/web 1.png" alt="">
                <p> <a href="https://www.facebook.com/bagongmapulanglupa2018">https://www.facebook.com/bagongmapulanglupa2018</a></p>
            </div>
            <div class="contact-page">
                <p><a href="#">More info<span>></span></a></p>
            </div>
        </div>
        
        
    </div>



    @livewireScripts
    <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
</body>
</html>