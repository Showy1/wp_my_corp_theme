<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/item.min.css">
</head>

<body>
  <div class="wrapper">
    <?php get_template_part('includes/header-nav'); ?>
    <div class="container">
      <main>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="item-single">
            <img src="<?php echo the_field('画像') ?>">
            <div class="item-single-content">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              <p>販売価格：¥<?php echo number_format(get_field('価格')); ?></p>
            </div>
          <?php endwhile; ?>
          </div>
      </main>
    </div>
    <?php get_footer(); ?>
  </div>
</body>
</html>
