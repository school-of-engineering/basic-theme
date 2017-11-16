<?php get_header() ?>

<?php
if( have_posts() ) {
  while ( have_posts() ) {
    the_post(); // Loads the next DB row from the results?>
    <section>
      <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
      <main>
        <?php the_post_thumbnail('grid_thumb') ?>
        <?php the_excerpt() ?>
      </main>
    </section>  <?php
  }
} else {
  echo ':(' ;
}
 ?>

<?php wp_footer() ?>
</body>
</html>
