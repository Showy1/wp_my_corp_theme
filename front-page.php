<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" type="text/css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/for-slick.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js" type="text/javascript"></script>
</head>
<body>
  <div class="wrapper">
    <?php get_template_part('includes/header-nav'); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="mv">
      <?php the_content(); ?>
      <div class="mv-content">
      </div>
    </div>
    <div class="container">
      <main>
          <h2>生活にサイクリングを</h2>
          <p id="front-message">レナクルは、レンタルサイクルおよび<br>中古自転車販売、買取を行っています。</p>
          <h3>お知らせ</h3>
          <?php $info = new WP_Query(array('posts_per_page' => 3));
          if( $info->have_posts() ):?>
          <ul class="information-list">
            <?php while( $info->have_posts()) : $info->the_post(); ?>
              <li>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                <?php the_category(' '); ?>
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
              </li>
            <?php endwhile; ?>
          </ul>
          <div class="button">
            <a href="<?php echo esc_url(home_url('/')); ?>information/">お知らせ一覧</a>
          </div>
        <?php else: ?>
          <p>現在表示するお知らせはありません。</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </main>
    <?php get_sidebar(); ?>
  <?php endwhile; ?>
  </div>
  <?php get_footer(); ?>
</div>
</body>
</html>
