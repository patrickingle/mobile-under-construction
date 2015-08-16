<?php
$default = array(
	'image_url' => '/images/image.jpg',
	'sitename' => '<strong>drink</strong>alike',
	'heading' => 'The <strong>EASIEST</strong> way to know, <strong>wat to drink next?</strong>',
	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu ex, luctus sit amet blandit quis, varius consectetur justo. Vivamus consectetur diam at libero imperdiet mollis. Donec hendrerit elit at augue tristique consequat. Morbi posuere egestas convallis. Etiam pellentesque, magna vel facilisis semper, quam justo facilisis turpis, eget vehicula felis felis ac nisi. Nunc erat enim, dictum eu laoreet ac, aliquet non turpis. Aliquam imperdiet dui eu urna consectetur placerat. Nulla ut feugiat tortor.',
	'owner' => '<strong>drink</strong>alike',
	'ownerlink' => '#',
	'googleplus' => '#',
	'twitter' => '#',
	'facebook' => '#',
	'email' => '#',
	'youtube' => '#',
	'pinterest' => '#',
	'mailchimp' => '#'
);

$image_url = get_option('image_url');
if ($image_url != '') {
	$default['image_url'] = $image_url;
} else {
	$default['image_url'] = get_stylesheet_directory_uri() . $default['image_url'];
}

$sitename = get_option('sitename');
if ($sitename != '') {
	$default['sitename'] = $sitename;
}

$heading = get_option('heading');
if ($heading != '') {
	$default['heading'] = $heading;
}

$description = get_option('description');
if ($description != '') {
	$default['description'] = $description;
}

$owner = get_option('owner');
if ($owner != '') {
	$default['owner'] = $owner;
}

$mailchimp = get_option('mailchimp');
if ($mailchimp != '') {
	$default['mailchimp'] = $mailchimp;
}

$googleplus_url = get_option('googleplus_url');
if ($googleplus_url != '') {
	$default['googleplus'] = $googleplus_url;
}

$twitter_url = get_option('twitter_url');
if ($twitter_url != '') {
	$default['twitter'] = $twitter_url;
}

$facebook_url = get_option('facebook_url');
if ($facebook_url != '') {
	$default['facebook'] = $facebook_url;
}

$email_url = get_option('email_url');
if ($email_url != '') {
	$default['email'] = $email_url;
}

$youtube_url = get_option('youtube_url');
if ($youtube_url != '') {
	$default['youtube'] = $youtube_url;
}

$pinterest_url = get_option('pinterest_url');
if ($pinterest_url != '') {
	$default['pinterest'] = $pinterest_url;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coming Soon</title>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/tools/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/tools/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/tools/Comfortaa_250-Comfortaa_700.font.js"></script>
<script type="text/javascript">
	Cufon.replace('h1', {fontFamily: 'Comfortaa'});
	Cufon.replace('p.c_soon strong', {fontFamily: 'Comfortaa'});
</script>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#subscribe").click(function(){
			var mailchimp = "<?php echo $default['mailchimp'];?>";
			if (mailchimp == "#") {
				alert("Create a new list in mailchimp using the General forms, and copy the link provided");
			} else {
				window.open(mailchimp);
			}
		});
	});
</script>
<div class="content_wrapper">
	<div class="top_content">
		<div class="header">
			<div class="iphone">
				<img src="<?php echo $default['image_url']; ?>" alt="" width="258" height="388" />
			</div>
			<div class="logo_content">
				<h1><?php echo $default['sitename']; ?></h1>
				<h3><?php echo $default['heading']; ?></h3>
				<p><?php echo $default['description']; ?></p>
				<a href="#" id="subscribe" class="get_notified"><strong>Get Notified</strong> on the day of launch!</a>
			</div>
		</div>
	</div>
	
	<div class="shadow"></div>
	<div class="white_content">
		<div class="top_content">
			<div class="header">
				<div class="coming_soon">
					<p class="c_soon">we're <br/> <strong>Coming Soon</strong> <br/> to your iPhone, Android and Windows Phone</p>
				</div>
				
				<ul class="social">
					<li><a href="<?php echo $default['googleplus']; ?>" class="googleplus">google plus</a></li>
					<li><a href="<?php echo $default['twitter']; ?>" class="twitter">twitter</a></li>
					<li><a href="<?php echo $default['facebook']; ?>" class="facebook">facebook</a></li>
					<li><a href="mailto:<?php echo $default['email']; ?>" class="email">email</a></li>
					<li><a href="<?php echo $default['youtube']; ?>" class="youtube">youtube</a></li>
					<li><a href="<?php echo $default['pinterest']; ?>" class="pinterest">pinterest</a></li>
				</ul>
				
				<div class="copyright"><p>Copyright &copy; <?php echo date("Y"); ?>. <br/> All Rights Reserved. <br/> <span><?php echo $default['owner']; ?></span></p></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>