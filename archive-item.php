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
        <h2>商品一覧</h2>
        <?php if( is_category() ): ?>
          <h3><?php single_cat_title(); ?></h3>
        <?php endif; ?>
        <?php if( have_posts()) : ?>
          <ul class="item-list">
            <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <?php the_category(' '); ?>
                <a href="<?php the_permalink() ?>">
                  <img src="<?php echo the_field('画像') ?>">
                  <div class="item-content">
                    <p><?php the_title(); ?></p>
                    <p>¥<?php echo number_format(get_field('価格')); ?></p>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <p class="notes">*掲載している自転車は一例です。店舗には豊富なラインナップを取り揃えております。</p>
        <?php else: ?>
          <p>商品はありません。</p>
        <?php endif; ?>
        <div class="pagination">
          <?php echo paginate_links(); ?>
        </div>
      </main>
    </div>
    <?php get_footer(); ?>
  </div>
</body>
</html>
