<?php
/*
Template Name: Profile Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
	<h3>Template para el profile</h3>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
