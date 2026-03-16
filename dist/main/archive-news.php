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
  <div class="top-news__list">
    <?php
    while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <?php
      $terms = get_the_terms(get_the_ID(), 'news_category');
      $category_name = '';
      $category_slug = '';
      if ($terms && !is_wp_error($terms)) {
        $category_name = $terms[0]->name;
        $category_slug = $terms[0]->slug;
      } else {
        $post_categories = get_the_category(get_the_ID());
        if (!empty($post_categories)) {
          $category_name = $post_categories[0]->name;
          $category_slug = $post_categories[0]->slug;
        }
      }
      ?>
      <article class="top-news__item">
        <div class="top-news__thumb">
          <?php if (get_the_post_thumbnail()) : ?>
            <?php the_post_thumbnail() ?>
          <?php else : ?>
            <img src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
          <?php endif ?>
        </div>
        <div class="top-news__content"<?= $category_name !== '' ? ' data-category="' . esc_attr($category_name) . '"' : ''; ?>>
          <?php if ($category_name !== '') : ?>
            <span class="top-news__category top-news__category--<?= esc_attr($category_slug); ?>">
              <?= esc_html($category_name); ?>
            </span>
          <?php endif; ?>
          <h3 class="top-news__title"><?php the_title(); ?></h3>
          <p class="top-news__date"><?php the_time('Y.m.d'); ?></p>
        </div>
      </article>
      <article class="top-news__item">
        <div class="top-news__thumb">
          <img src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
        </div>
        <div class="top-news__content">
          <span class="top-news__category top-news__category--info">お知らせ</span>
          <h3 class="top-news__title">年末年始休業のお知らせ</h3>
          <p class="top-news__date">2026.01.01</p>
        </div>
      </article>
      <article class="top-news__item">
        <div class="top-news__thumb">
          <img src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
        </div>
        <div class="top-news__content">
          <span class="top-news__category top-news__category--campaign">キャンペーン</span>
          <h3 class="top-news__title">車検の「早割サービス」実施中！</h3>
          <p class="top-news__date">2026.01.01</p>
        </div>
      </article>
    <?php endwhile; ?>
  </div>


  <div>
    <?php
    if (function_exists('wp_pagenavi')) {
      // wp_pagenavi(array('query' => $the_query));
    }
    wp_reset_postdata();
    ?>
  </div>
</main>
<?php get_footer(); ?>
