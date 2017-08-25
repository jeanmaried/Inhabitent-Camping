<?php
get_header();

echo '
<section class="banner" style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('.get_banner().');background-size: cover;">
	<div class="logo flex justify-center">
		<img src="http://localhost:8888/project-wordpress/wp-content/themes/redstarter-master/assets/images/logos/inhabitent-logo-full.svg">
	</div>
</section>'; ?>

<main>

<h1 class='flex justify-center'>SHOP STUFF</h1>

<?php get_template_part('template-parts/content', 'front-page-terms');?>

<h1 class='flex justify-center'>INHABITANT JOURNAL</h1>

<?php get_template_part('template-parts/content', 'front-page-journal');?>  

<h1 class='flex justify-center'>LATEST ADVENTURES</h1>

<?php get_template_part('template-parts/content', 'front-page-adventures');?> 

<div class="read"><a href="http://localhost:8888/project-wordpress/?post_type=adventures">MORE ADVENTURES</a></div>

</main>

<?php get_footer();
?>