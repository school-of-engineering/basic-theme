<?php get_header() ?>

<h1>SINGLE POST/PAGE</h1>
<?php
if( have_posts() ) {
  while ( have_posts() ) {
    the_post(); // adds stuff to $post ?>
    <section>
      <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
      <main>
        <?php the_content() ?>
      </main>
    </section> <?php
  }
} else {
  echo ':(' ;
}
 ?>

<?php wp_footer() ?>
</body>
</html>
