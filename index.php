<?php $page = "Home"; ?>
<?php include_once("head.php"); ?>
<body class="page-home">
  <div class="app">
    <div class="main">
      <?php include_once("nav.html"); ?>
      <div class="content">
        <div class="content-page transition-fade">
          <div class="slider is-horizontal">
            <div class="slides">
              <div class="slide" id="slide-1">
                <h1 class="h2 display-1 text-uppercase">
                  Businesses <a href="#" class="text-info" data-target="bg2.jpg">Trust</a> 
                  OFS to deliver <a href="#" class="text-info" data-target="bg3.jpg">Innovative Digital Engineering</a> Solutions
                  for the <a href="./cloud.php" class="text-info" data-target="bg1.jpg">Cloud platform</a> 
                  that helps to compete in the <a href="#" class="text-info" data-target="bg4.jpg">digital economy</a>
                </h1>
              </div>
              <div class="slide" id="slide-2">
                <h1 class="h2 display-1 text-uppercase">
                  Businesses <a href="#" class="text-info">Trust</a>
                  OFS to deliver <a href="#" class="text-info">Innovative Digital Engineering</a> Solutions
                  for the <a href="./cloud.php" class="text-info">Cloud platform</a> 
                  that helps to compete in the <a href="#" class="text-info">digital economy</a>
                </h1>
              </div>
              <div class="slide" id="slide-3">
                <h1 class="h2 display-1 text-uppercase">
                  Businesses <a href="#" class="text-info">Trust</a> 
                  OFS to deliver <a href="#" class="text-info">Innovative Digital Engineering</a> Solutions
                  for the <a href="./cloud.php" class="text-info">Cloud platform</a> 
                  that helps to compete in the <a href="#" class="text-info">digital economy</a>
                </h1>
              </div>
            </div>
            <ul class="slider-page">
              <li class="slider-pageitem">
                <a href="#" class="slider-pagelink is-prev action-item"></a>
              </li>
              <li class="slider-pageitem">
                1 of 3
              </li>
              <li class="slider-pageitem">
                <a href="#" class="slider-pagelink is-next action-item"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="content-overlay-h transition-slideInLeft">
  
        </div>
        <div class="content-overlay-v transition-slideInTop">
        </div>
      </div>

      <div class="bg-slider">
        <div class="bg-slide1"></div>
        <div class="bg-slide2"></div>
        <div class="bg-slide3"></div>
      </div>
    </div>
    <aside class="bot">
      <?php include_once("bot.php"); ?>
    </aside>
  </div>
</body>

</html>