<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.min.css">
</head>

<body>
  <div class="wrapper">
    <?php get_template_part('includes/header-nav'); ?>
    <div class="container">
      <main>
        <?php while(have_posts()): the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </main>
    </div>
    <?php get_footer(); ?>
  </div>
</body>
</html>
