<!DOCTYPE html>
<html>
<head>
<title>CKEditor Embeded Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
</head>
<body>
<div class="w3-container w3-blue">
  <h2>CKEditor Demo View</h2>
  <p>Use the maximum functionality from the below CKEditor</p>
  
</div>
<hr>

<div class="w3-container w3-light-blue"> 
  <p>
  <form action="#" method="POST">
  <textarea name="text" id="text">Write What Ever You Want</textarea>
	<script>
		CKEDITOR.replace( 'text' );
	</script>
	<br>
	<button class="w3-btn w3-light-grey w3-border" name="submit">Submit</button>
  </p>
</div>
<hr>

<article class="w3-container"> 
  <h2>Result Will Like This :</h2>
  <?php 
	if(isset($_POST['submit']))
	{
		$text=$_POST['text'];
	}
  ?>
  <p><?php if(isset($_POST['submit'])){echo $text;} else{echo "You Wrote Nothing";} ?></p>
</article>
<hr>

<script type='text/javascript'>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-53899462-1']);
        _gaq.push(['_trackPageview']);
        (function() {
          var ga = document.createElement('script');
          ga.type = 'text/javascript';
          ga.async = true;
          ga.src = (document.location.protocol == 'https:' ?
                    'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(ga, s);
        })();
      </script>

<script type='text/javascript'>

var sc_project=10206578; 
var sc_invisible=1; 
var sc_security="d7178416"; 
var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+ "statcounter.com/counter/counter_xhtml.js'></"+"script>");

</script>
<noscript><div class='statcounter'><a class='statcounter' href='http://statcounter.com/blogger/' title='counter for blogger'><img alt='counter for blogger' class='statcounter' src='http://c.statcounter.com/10206578/0/d7178416/1/'/></a></div></noscript>
</body>
</html>
