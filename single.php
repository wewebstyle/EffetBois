<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
      <?php the_post_thumbnail(); ?>

      <h1><?php the_title(); ?></h1>

      <div class="post__meta">
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          <?php the_tags(); ?>
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>