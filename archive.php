<?php get_header(); ?>
<div id="content">
   <?php if ( have_posts() ) : ?>
      <h2><?php the_archive_title(); ?></h2>
      <?php while ( have_posts() ) : the_post(); ?>
         <h3><?php the_title(); ?></h3>
         <?php the_excerpt(); ?>
      <?php endwhile; ?>
   <?php endif; ?>
</div>
<?php get_footer(); ?>
