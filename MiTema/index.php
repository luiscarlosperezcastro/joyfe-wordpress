<?php get_header(); ?>

<main style="max-width:900px; margin:40px auto; font-family: Arial, sans-serif;">
  <h1>Mi tema esta activo</h1>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article style="margin-bottom:28px; padding-bottom:16px; border-bottom:1px solid #ddd;">
        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No hay contenido todavia.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>