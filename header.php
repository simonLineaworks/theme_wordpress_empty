<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

<?php $plugins_url = plugins_url(); ?>


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<script src="https://use.typekit.net/bmj0uty.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script type="text/javascript" src="//fast.fonts.net/jsapi/64c47bbc-6086-4713-a80f-8ba6db0aa741.js"></script>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header >
</header><!-- .site-header -->	

<body>
	<div class="section black container-fluid" id="section1">
	<h2>Section 1</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo earum esse architecto odit sint aut tenetur, dolorem atque dicta ullam fuga ipsum, ratione in odio at repudiandae. Ab, id, nobis.
	</p>
	<span style="width: 50%; float: right; background-color: gray;">test</span>
	<ul class="nav">
		
		<li><a href="#section2">></a></li>
		
	</ul>
</div>
<div class="section white" id="section2">
	<h2>Section 2</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reprehenderit hic veniam, ipsum saepe explicabo sit nobis, quo aut suscipit earum, eos ab. Dolor ipsum neque eos ipsam accusamus alias.

	</p>
	<span style="width: 50%; float: right; background-color: #e9e9e9;">test</span>
	<ul class="nav">	
		
		<li><a href="#section3">></a></li>
	</ul>
</div>
<div class="section black" id="section3">
	<h2>Section 3</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta cum non laborum libero, harum error veniam, iure doloribus aliquam quia ex ullam quibusdam necessitatibus, consectetur impedit quo placeat ea sint?

	</p>
	
	<span style="width: 50%; float: right; background-color: gray;color: gray;">0</span>
	<ul class="nav">
		
		
		<li><a href="#section4">></a></li>
		
	</ul>
</div>
<div class="section white" id="section4">
	<h2>Section 4</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum in alias tempora possimus, expedita quos similique quod blanditiis, voluptas quis soluta doloribus placeat est et. Dolores eos, doloribus! Aut, illum.

	</p>
	
	<ul class="nav" style="margin: 0;">
		
		<li style="float: left;"><a href="#section1"><</a></li>
		
	</ul>
</div>			
</body>		


<script>

$(function() {
	$('ul.nav a').bind('click',function(event){
		var $anchor = $(this);
		/*
		if you want to use one of the easing effects:
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1500,'easeInOutExpo');
		 */
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1000);
		event.preventDefault();
	});
});
</script>	