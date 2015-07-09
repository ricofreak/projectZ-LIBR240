	
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
		<link rel="stylesheet" href="css/xmltable.css">

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
                	<h1>Reccomended Readings for Information Professionals</h1>
					<script>
						if (window.XMLHttpRequest)
						  {// code for IE7+, Firefox, Chrome, Opera, Safari
						  xmlhttp=new XMLHttpRequest();
						  }
						else
						  {// code for IE6, IE5
						  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						  }
						xmlhttp.open("GET","xml/books.xml",false);
						xmlhttp.send();
						xmlDoc=xmlhttp.responseXML; 

						document.write("<table><tr><th>Title</th><th>Author</th><th>Publisher</th><th>Year</th></tr>");
						var x=xmlDoc.getElementsByTagName("book");
						for (i=0;i<x.length;i++)
						  { 
						  document.write("<tr><td>");
						  document.write(x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue);
						  document.write("</td><td>");
						  document.write(x[i].getElementsByTagName("author")[0].childNodes[0].nodeValue);
						  document.write("</td><td>");
						  document.write(x[i].getElementsByTagName("publisher")[0].childNodes[0].nodeValue);
						  document.write("</td><td>");
						  document.write(x[i].getElementsByTagName("year")[0].childNodes[0].nodeValue);
						  document.write("</td></tr>");
						  
						
						  }
						document.write("</table>");
					</script>
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
