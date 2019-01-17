<?php $page = "Home"; ?>
<?php include_once("head.php"); ?>
<body class="page-home">
  <div class="app">
    <div class="main">
      <?php include_once("nav.html"); ?>
      <div class="content">
        <div class="content-page transition-fade">
          <div class="slider">
            <h1 class="h2 display-1 text-uppercase">
              Businesses <a href="#" class="text-info">Trust</a> 
              OFS to deliver <a href="#" class="text-info">Innovative Digital Engineering</a> Solutions
              for the <a href="./cloud.php" class="text-info">Cloud platform</a> 
              that helps to compete in the <a href="#" class="text-info">digital economy</a>
            </h1>

            <ul class="slider-nav">
              <li class="slider-navitem is-prev"></li>
              <li class="slider-nav_prev">
                1 of 3
              </li>
              <li class="slider-navitem is-next"></li>
            </ul>
          </div>
        </div>
        <div class="content-overlay-h transition-slideInLeft">
  
        </div>
        <div class="content-overlay-v transition-slideInTop">
        </div>
      </div>
    </div>
    <aside class="bot">
      <?php include_once("bot.php"); ?>
    </aside>
  </div>
</body>

</html>