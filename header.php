<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php echo get_bloginfo( 'name' ); wp_title( '-', true, 'left' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="container-fluid">
	<div class="row" style="height:100px">
		<div class="col pt-3 pb-3 ps-5">
			<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/image/logo/logo.svg" /></a>
		</div>
		<?php
				
		    if(is_user_logged_in())
			{
				?>
		<div class="col pt-3 pb-3 pe-5 text-end">
			<a href="<?=wp_logout_url(SITE);?>" class="button-circle button-white d-table ms-auto me-0">Wyloguj się</a>
		</div>
		<?php }?>

	</div>
</header>
<?php

	global $wp_query;
	global $url;
	$url= '';
	if(isset($wp_query->query_vars['panel']))
	{
		$url= $wp_query->query_vars['panel'];
	}
	
?>