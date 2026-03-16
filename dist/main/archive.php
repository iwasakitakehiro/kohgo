<?php get_header(); ?>
<!-- ページとコンテンツを取得 -->
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$the_query = new WP_Query(array(
  'post_status' => 'publish',
  'post_type' => 'post', // ページの種類（例、page、post、カスタム投稿タイプ）
  'paged' => $paged,
  'posts_per_page' => 1, // 表示件数
  'orderby' => 'date',
  'order' => 'DESC',
)); ?>
<main>
  <section class="archive-page">
    <div class="inner">

      <div class="top-news__list">
        <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <?php
          $terms = get_the_category(get_the_ID());
          $category_name = '';
          $category_slug = '';

          if ($terms && !is_wp_error($terms)) {
            $category_name = $terms[0]->name;
            $category_slug = $terms[0]->slug;
          }
          ?>
          <a href="<?= the_permalink() ?>">
            <article class="top-news__item">
              <div class="top-news__thumb">
                <?php if (get_the_post_thumbnail()) : ?>
                  <?php the_post_thumbnail() ?>
                <?php else : ?>
                  <img src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
                <?php endif ?>
              </div>
              <div class="top-news__content" <?= $category_name !== '' ? ' data-category="' . esc_attr($category_name) . '"' : ''; ?>>
                <?php if ($category_name !== '') : ?>
                  <span class="top-news__category top-news__category--<?= esc_attr($category_slug); ?>">
                    <?= esc_html($category_name); ?>
                  </span>
                <?php endif; ?>
                <h3 class="top-news__title"><?php the_title(); ?></h3>
                <p class="top-news__date"><?php the_time('Y.m.d'); ?></p>
              </div>
            </article>
          </a>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <div>
    <?php
    if (function_exists('wp_pagenavi')) {
      wp_pagenavi(array('query' => $the_query));
    }
    wp_reset_postdata();
    ?>
  </div>
</main>
<?php get_footer(); ?>