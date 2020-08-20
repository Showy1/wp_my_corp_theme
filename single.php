<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <?php get_header(); ?>
</head>

<body>
  <div class="wrapper">
    <?php get_template_part('includes/header-nav'); ?>
    <div class="container">
      <main>
        <h2>お知らせ</h2>
        <?php while ( have_posts() ) : the_post(); ?>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
          <?php the_category(' '); ?>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
  </div>
</body>
</html>
