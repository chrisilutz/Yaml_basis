<?php 	include ("includes/config.php");
		$current_page = "Anfahrt";
 		include('includes/menu.php');
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8"/>

  <title><?php echo SITE_NAME.' - '.$current_page; ?></title>
  <meta content="<?php echo KEYWORDS; ?>">
 <!-- <?php include ("includes/og.php"); ?> !-->
  <meta name="description" content="<?php echo DESCRIPTION; ?>"/>
  <meta name="author" content=""/>

  <!-- mobile viewport optimisation -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- stylesheets -->
  <link rel="stylesheet" href="css/styles.css" type="text/css"/>
  
  <link rel="shortcut icon" href="favicon.ico" />

  <!--[if lte IE 7]>
  <link rel="stylesheet" href="yaml/core/iehacks.min.css" type="text/css"/>
  <![endif]-->
    <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=false">
	</script>
	</head>
<body>
		
		<!-- Skiplinks !-->
	
	<ul class="ym-skiplinks">
		<li><a class="ym-skip" href="#nav">Skip to navigation (Press Enter)</a></li>
		<li><a class="ym-skip" href="#main">Skip to main content (Press Enter)</a></li>
	</ul>
	
		<!-- Skiplinks  Ende !-->
		
		<!-- Header !-->
	<header></header>	
		
		<!-- Header Ende !-->
		
		<!-- Navigation !-->
		
	<?php echo $navi; ?>
	
		<!-- Navigation Ende!-->
		
		<!-- Content !-->
	
	<section class="">
		<div id="main" class="">
			<div class="">
				<h4>Anfahrt</h4>
				<div id="map_canvas" style="width:100%; height:500px"></div>
			</div>
				
			<article class="">
				<div class="">
					<div id="hcard-<?php echo NAME; ?>" class="vcard">
						<div class="org"><?php  echo SITE_NAME; ?></div>
 						<span class="fn n"></span>
 						<div class="adr">
							<div class="street-address"><?php echo STRASSE; ?></div>
							<span class="postal-code"><?php echo PLZ; ?></span> <span class="locality"><?php echo ORT; ?></span>
						</div>
 						<div class="tel"><?php echo PHONE; ?></div>
 						<a class="email" href="mailto:echo EMAIL;"><?php echo EMAIL; ?></a>
					</div>
				</div>
			</article>
		</div>
	</section>
			
		<!-- Content Ende !-->
			
		<!-- Footer !-->
	
	<?php include("includes/footer.php"); ?>
      
     	<!-- Footer Ende !-->
     
     	<!-- Piwik Code !-->
     
     	<!-- Piwik Ende !-->
</body>
</html>