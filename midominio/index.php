<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QuantumMark.com</title>
    <link rel="stylesheet" type="text/css"  href="CSS/newindex.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
  </head>
  <header id="header">
    <?php include("header.html") ?>
  </header>
  <body>
    <div id="slider">
      <div id="box">
        <img src="imgs/slide1.jpg">
      </div>
      <!-- buttons for controls slider -->
      <button class="prew fa fa-chevron-left" onclick="prewImage()"></button>
      <button class="next fa fa-chevron-right" onclick="nextImage()"></button>
    </div>
    <div class="index-news">
      <div class="wrapper">
        <article>
          <div class="news-img"></div>
          <h3>This is a news title</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
        <article>
          <div class="news-img"></div>
          <h3>This is a news title</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
        <article>
          <div class="news-img"></div>
          <h3>This is a news title</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
        <article>
          <div class="news-img"></div>
          <h3>This is a news title</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
        <article>
          <div class="news-img"></div>
          <h3>This is a news title</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
      </div>
    </div>
  </body>
  <footer id="footer">
    <?php include("footer.html") ?>
  </footer>
  <script type="text/javascript">
    window.addEventListener('scroll',function(){
      var scroll =  document.documentElement.scrollTop;
      var header = document.getElementById('menu');
      if (scroll > 1) {
        header.classList.add('menu-fixed');
      }else{
      header.classList.remove('menu-fixed');
    }
    });
  </script>
  <script type="text/javascript">
  var slider_content = document.getElementById('box');
  // contain images in an array
  var image = ['imgs/slide1','imgs/slide2', 'imgs/slide3', 'imgs/slide4','imgs/slide5'];
  var i = image.length;
  // function for next slide
  function nextImage(){
    if (i<image.length) {
      i= i+1;
    }else{
      i = 1;
    }
    slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
  }
  // function for prew slide
  function prewImage(){

    if (i<image.length+1 && i>1) {
      i= i-1;
    }else{
      i = image.length;
    }
    slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
  }
  // script for auto image slider
  setInterval(nextImage , 4000);
</script> 
</html>
