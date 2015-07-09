	
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/nav.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <?php
  	include"txt/nav.txt";
  ?>


        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Ramblings from a Digital Librarian</h1>
                        <p>Web design, usability, information retrieval & storage, information security, and all things library and information.</p>
                    </header>
                    <section>
                        <h2><a href="managment.php">Philosphy of Managment</a></h2>
                        <p>When I began LIBR 204 I was asked to define ‘organizational management’ to which I responded: 

<blockquote>“Organizational management is the ability to take a goal, or set of goals, and implement them within the business system, this includes physical, virtual, and human assets.”</blockquote>
                    </section>
                    <section>
                        <h2><a href="minds.php">The Minds of a Library Technologist</a></h2>
                        <p>The library technologist must be action oriented. Working in technology makes the action mind-set very interesting to me. The relentless pace of change the world can move at, especially in technology, can be numbing. We have to constantly stay up-to-date on technology and decide what is needed, or what is just a passing fad. Using the action mind-set is important. Technologists must quickly decide if something is going to benefit the library and be worth the money spent. Recently this has been things like 3D printers, Arduino, Raspberry Pi, and the latest eReaders.</p>
                
                </article>

	<?php
		include"txt/aside.txt";
	?>
    
            </div> <!-- #main -->
        </div> <!-- #main-container -->

	<?php
		include"txt/footer.txt";
	?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
