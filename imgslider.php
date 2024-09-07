<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    #slider-container {
      width: 100%;
      overflow: hidden;
      white-space: nowrap; /* Allow the content to be in a single line */
      position: relative;
    }

    #slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
    }
  

    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    #prev, #next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 24px;
      cursor: pointer;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      border: none;
      padding: 10px;
      outline: none;
    }

    #prev { left: 10px; }
    #next { right: 10px; }
  </style>
</head>
<body>

<div id="slider-container">
  <div id="slider">
    <div class="slide">
      <img src="images/v3_f1.jpg" alt="Image 1">
    </div>
    <div class="slide">
      <img src="images/v3_f2.jpg" alt="Image 2">
    </div>
	<div class="slide">
      <img src="images/v3_f3.jpg" alt="Image 1">
    </div>
    <div class="slide">
      <img src="images/4.jpeg" alt="Image 2">
    </div>
    <!-- Add more slides as needed -->
  </div>

  <button id="prev" onclick="prevSlide">&#10094;</button>
  <button id="next" onclick="nextSlide">&#10095;</button>
</div>

<script>
  let currentSlide = 0;

  function showSlide(index) {
    const slider = document.getElementById('slider');
    const slides = document.getElementsByClassName('slide');
    
    if (index >= slides.length) {
      currentSlide = 0;
    } else if (index < 0) {
      currentSlide = slides.length - 1;
    } else {
      currentSlide = index;
    }

    const translateValue = -currentSlide * 100 + '%';
    slider.style.transform = 'translateX(' + translateValue + ')';
  }

  function nextSlide() {
    showSlide(currentSlide + 1);
  }

  function prevSlide() {
    showSlide(currentSlide - 1);
  }

  // Automatically advance to the next slide every 3 seconds
  setInterval(nextSlide, 3000);
</script>

</body>
</html>
