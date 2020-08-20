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
        <?php if( is_category() ): ?>
          <h3><?php single_cat_title(); ?></h3>
        <?php endif; ?>
        <?php if( have_posts()) : ?>
          <ul class="information-list">
            <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <time class="post-news-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                <?php the_category(' '); ?>
                <a href="<?php the_permalink() ?>"><?php the_title(); ?><?php the_excerpt(); ?></a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else: ?>
          <p>現在表示するお知らせはありません。</p>
        <?php endif; ?>
        <div class="pagination">
          <?php echo paginate_links(); ?>
        </div>
      </main>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
  </div>
</body>
</html>
