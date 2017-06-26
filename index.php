<!-- Ajout du header -->
<?php get_header();?>

<!-- ajout du milieu page -->
<?php get_template_part( 'content', get_post_format() ); ?>
<!-- ajout du footer -->
<?php get_footer(); ?>
