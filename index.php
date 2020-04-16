<?php get_header(); ?>
<div class="container">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <h1 class="page-title"><?php the_title();?></h1>
  <div>
    <?php the_content();?>
  </div>

<?php endwhile; else: ?>

  <h1 class="page-title">Ops..</h1>
  <div>
    <p>Nenhuma resultado encontrado.</p>
  </div>

<?php endif; ?>
</div>
<?php get_footer(); ?>