<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link rel="stylesheet" href="css/reset.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
  <link rel="shortcut icon" href="images/favicon (5).ico" type="image/x-icon">
  <link rel="icon" href="images/favicon (5).ico" type="image/x-icon">
  <link async href="http://fonts.googleapis.com/css?family=Arizonia" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
  <link href="{!! asset('css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('css/index.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link async href="http://fonts.googleapis.com/css?family=Akronim" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="images/font-awesome-4.3.0/css/font-awesome.min.css">
  <title>@yield('title')</title>
</head>
<body>
	
@yield('content')
    
<footer class="page-footer">
          <div class="container">
           
            <div class="row">
            	
            	<div class="col s6 offset-s4">
            		<a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank"> <i class="fa fa-facebook" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
                <a href="https://twitter.com/intent/tweet?source=&text=:%20" title="Tweet" target="_blank"> <i class="fa fa-twitter" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
                <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank"> <i class="fa fa-google-plus" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" title="Share on LinkedIn" target="_blank"> 
                	<i class="fa fa-linkedin" style="font-size: 35px; color:white;"> 
                	
                	
                </i></a>
            	</div>
                
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2023 Proyecto Desarrollo Web
            <a class="grey-text text-lighten-4 right" href="https://www.usap.edu/">USAP</a>
            </div>
          </div>
        </footer>
        
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script> 
      <script type="text/javascript" script-name="bonbon" src="http://use.edgefonts.net/bonbon.js"></script>
      <script type="text/javascript" script-name="berkshire-swash" src="http://use.edgefonts.net/berkshire-swash.js"></script>
      <script type="text/javascript" script-name="chicle" src="http://use.edgefonts.net/chicle.js"></script>
<script type="text/javascript" src="js/init.js"></script>
<script>
	 $(document).ready(function(){
      $('.slider').slider();
      $(".button-collapse").sideNav();
       $('.parallax').parallax();
     
    });
</script>
 <script>
  	    $('.head-link').click(function(e) {
        e.preventDefault();
        
        var goto = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(goto).offset().top
        }, 800);
    });

  </script>
	     
	     
	    
			 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60673008-2', 'auto');
  ga('send', 'pageview');
</script>






  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.carousel');
  var instances = M.Carousel.init(elems,
  {duration:200,indicators:true});
});
</script>
</html>
