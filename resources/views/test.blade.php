<html>
  <head>
  <title>My Now Amazing Webpage</title>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
  <style>
    .your-class{
      height: 39%;
      width: 50%;
    }
  </style>
  </head>
  <body>

  <div class="your-class">
    <div>your content1</div>
    <div>your content2</div>
    <div>your content3</div>
    <div>your content4</div>
    <div>your content5</div>
    <div>your content6</div>
    <div>your content7</div>
    <div>your content8</div>
  </div>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        arrows:true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    });
  </script>

  </body>
</html>