	
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
                	
                    <?php //formHandler1.php: a simple form handler

//define functions
function sanitizeString($var) //sanitizing input
{
	if (get_magic_quotes_gpc())
		$var = stripslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
}

//initialize variables, sanitize & retrieve submitted data
//watch your naming!
if (isset($_POST['name'])) $name = sanitizeString($_POST['name']);
else $name = "(Not entered)";

if (isset($_POST['email'])) $email = sanitizeString($_POST['email']);
else $email = "(Not entered)";

if (isset($_POST['human'])) $human = sanitizeString($_POST['human']);
else $human = "(Not entered)";

if (isset($_POST['hear-about'])) $referrer = sanitizeString($_POST['hear-about']);
else $referrer = "(Not entered)";

if (isset($_POST['rating'])) $rating = sanitizeString($_POST['rating']);
else $rating = "(Not entered)";

if (isset($_POST['comments'])) $comments = sanitizeString($_POST['comments']);
else $comments = "(Not entered)";

if (isset($_POST['subscribe'])) $subscribe = sanitizeString($_POST['subscribe']);
else $subscribe = "(Not entered)";

//form validation
if ($name == "(Not entered)" || $name == "") //in my example, I only require name, email, and an anti-spam field.
{
	echo "<p>Oops--we didn't quite catch your name. Please try again.</p>";
	exit;
}
if ($email == "(Not entered)" || $email == "") //in my example, I only require name, email, and an anti-spam field.
{
	echo "<p>Oops--we didn't catch your email. Please try again.</p>";
	exit;
}
if ($human !== "Ottawa") //in my example, I only require name, email, and an anti-spam field.
{
	echo "<p>Oops--are you sure you're human? The capital of Canada is Ottawa--please try again.</p>";
	exit;
}

//format submission data into single string (for write to flat file database)
$fielddelimiter = "|";
$rowterminus = "\n";

$text = $name.
	$fielddelimiter.
	$email.
	$fielddelimiter.
	$referrer.
	$fielddelimiter.
	$rating.
	$fielddelimiter.
	$comments.
	$fielddelimiter.
	$subscribe.
	$fielddelimiter.
	date("F j, Y - g:ia", time()).
	$rowterminus;

//update flat file database with submission data string
$filelocation = "testfile.txt"; //full path to your output file!

$fh = fopen($filelocation, 'r+') or die("Oops");
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Oops"); 
fclose($fh);

echo "<p>I'll get back to you as soon as possible.<br /><br />";
echo "Name: " . $name . "<br />";
echo "Email: " . $email . "<br />";
echo "Referrer: " . $referrer . "<br />";
echo "Rating: " . $rating . "<br />";
echo "Comments: " . $comments . "<br />";
echo "Subscribe: " . $subscribe . "<br />";
?>

			</article>
		</div>	
	</div>
	
	<aside class="top-sidebar">
		
            
		
                </article>

	
    
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

		