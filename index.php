<!doctype html>
<html>
  <head>
<?php
include "mon/headtag.php";
include "mon/gtag.php";
 ?>
    <title>GOOD BOXING</title>
    <h1><a style="color:red">GOOD BOXING</h1>
    <meta charset="utf-8">
    <!-- <style>
    a {
      color: black;
      text-decoration: none;
    }
    #active {
          color: red;
        }
    .saw {
      color: gray;
    }
    h1 {
      font-size: 60px;
      text-align: center;
    }
    </style> -->
    <a href="http://cafe.naver.com/goodboxing1">네이버</a>
    <a href="https://www.instagram.com/blat18">인스타</a>
    <a href="https://facebook.com/977827499031780">페이스북</a>
    <a href="https://www.youtube.com/user/MrBlat18">유튜브</a>
    <a href="http://blog.naver.com/blat18">블러그</a>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
    include "mon/bodytag.php";
     ?>
    <!-- 다크모드 -->
    <input id="밤_낮" type="button" value="밤" onclick="
    if(document.querySelector('#밤_낮').value === '밤'){
      document.querySelector('body').style.backgroundColor = 'black';
      document.querySelector('body').style.color = 'white';
      document.querySelector('#밤_낮').value = '낮';
    } else {
      document.querySelector('body').style.backgroundColor = 'white';
      document.querySelector('body').style.color = 'black';
      document.querySelector('#밤_낮').value = '밤';
    }
    ">


    <h2><a href="index.html">굿복싱</a></h2>

  <img src="Hibox.jpg" width="50%">

    <p style="margin-top:28px;">
    [GOOD BOXING] 굿복싱<br>
    대구칠곡 북구 구암로 32길 6-16<br>
    (구암동 653-4번지) 3층<br>
    T. 053)270-9977<br>
    H. 010-9474-7407<br></p>

<!-- 동영상링크 -->
  <!-- <p> -->
      <!-- <iframe </iframe> -->
      <!-- </p> -->
<?php
include "chat/tawk.php";
include "cmt/disqus.php";
 ?>
  </body>
</html>