<div class="side">
  <?php if( is_home() || is_category() || is_single() ): ?>
    <ul class="side-nav">
      <li><a href="<?php echo esc_url( home_url('/') ); ?>information/">すべてのお知らせ</a></li>
      <?php wp_list_categories('title_li='); ?>
    </ul>
  <?php endif; ?>
  <?php if( is_front_page() || is_home() || is_category() ): ?>
    <a class="twitter-timeline" data-height="100%" href="https://twitter.com/f_renacle?ref_src=twsrc%5Etfw">Tweets by PracSho</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <?php endif; ?>
</div>
