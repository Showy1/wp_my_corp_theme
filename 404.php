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
        <h2>Page Not Found</h2>
        <p>お探しのページが見つかりませんでした。</p>
        <div class="button">
          <a href="<?php echo esc_url(home_url('/')); ?>">トップページへ</a>
        </div>
      </main>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
  </div>
</body>
</html>
