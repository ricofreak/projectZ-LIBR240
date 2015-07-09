	
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
                	<form action="formHandler1.php" method="post" onSubmit="return validate(this)">
		<fieldset>
			<legend>
				Ask Me A Question:
                <br />
			</legend>
			<label>
				Name:
                <br />
				<input id="fname" type="text" name="name" size="30" maxlength="100" required>
			</label>
			<br />
			<label>
				Email:
                <br />
				<input id="email" type="email" name="email" size="30" maxlength="100">
			</label>
			<label>
            <br />
				What is the capital of Canada?:
                <br />
				<input id="whatis" type="text" name="human" size="30" maxlength="100">
			</label>
		</fieldset>
		<br />
		<fieldset>
			<legend>
				Your Question:
			</legend>
			<p>
				<label for="hear-about">
					How would you like a be contacted?
				</label>
                <br />
				<select name="referrer" id="hear-about">
					<option value="google">Email</option>
					<option value="friend">Phone Call</option>
					<option value="advert">Text Message</option>
					<option value="other">Do Not Contact Me</option>
				</select>
			</p>
			<p>
				Is your question about computers or libraries?
				<br />
				<label>
					<input type="radio" name="rating" value="computers" />
					Computers
				</label>
				<label>
					<input type="radio" name="rating" value="libraries" />
					Libraries
				</label>
				<label>
					<input type="radio" name="rating" value="both" />
					Both
				</label>
			</p>
			<p>
				<label for="comments">
					
				</label>
				<br />
				Ask the ilLibrarian:
				<br />
				<textarea name="comments" rows="4" cols="40" id="comments">
				</textarea>
			</p>
			<label>
				<input type="checkbox" name="subscribe" checked="checked" />
				Sign me up for email updates
			</label>
			<br />
			<input type="submit" value="Submit" />
		</fieldset>
      </form>
           
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
