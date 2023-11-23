<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  </head>
  <body>
<div class="slidershow middle">

  <div class="slides">
  <input type="radio" name="r" id="r1" checked>
  <input type="radio" name="r" id="r2">
  <input type="radio" name="r" id="r3">
  <input type="radio" name="r" id="r4">
  <input type="radio" name="r" id="r5">

  <div class="slide s1">
    <img src="<?php echo get_template_directory_uri();?>/1.jpg " alt="">
  </div>
  <div class="slide">
    <img src="<?php echo get_template_directory_uri();?>/2.jpg " alt="">
  </div>
  <div class="slide">
    <img src="<?php echo get_template_directory_uri();?>/3.jpg " alt="">
  </div>
  <div class="slide">
    <img src="<?php echo get_template_directory_uri();?>/4.jpg " alt="">
  </div>
  <div class="slide">
    <img src="<?php echo get_template_directory_uri();?>/5.jpg " alt="">
  </div>
</div>

<div class="navigation">
  <label for="r1" class="bar"></label>
  <label for="r2" class="bar"></label>
  <label for="r3" class="bar"></label>
  <label for="r4" class="bar"></label>
  <label for="r5" class="bar"></label>
</div>
</div>
  </body>
</html>
